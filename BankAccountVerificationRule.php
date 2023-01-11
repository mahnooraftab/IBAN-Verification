<?php

namespace App\Rules;

use App\Models\Bank;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class BankAccountVerificationRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(protected int $bankId)
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->checkPattern($value) && $this->bankAccountVerification($value, $this->bankId);
    }

    private function checkPattern($value): bool
    {
        preg_match('/^(PK[0-9]{2}[A-Z]{4}[0-9]{16})$/i', $value, $matches);

        return !(count($matches) === 0);
    }

    private function bankAccountVerification($value, $bankId): bool
    {
        $bank = Bank::query()->find($bankId);
        $patterns = range('A', 'Z');
        $replacements = range(10, 35);

        $formattedIban = preg_replace("/(PK\d{2})(.*)/i", "$2$1", $value);

        if (!Str::contains($formattedIban, $bank->abbreviation)) {
            return false;
        }

        $convertedIban = preg_replace(array_map(fn($pattern) => "/{$pattern}/i", $patterns), $replacements, $formattedIban);
        return bcmod($convertedIban, 97) === '1';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Incorrect IBAN';
    }
}
