<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            ['name' => 'NATIONAL BANK OF PAKISTAN', 'abbreviation' => 'NBPA'],
            ['name' => 'STATE BANK OF PAKISTAN', 'abbreviation' => 'SBPP'],
            ['name' => 'HABIB BANK LTD', 'abbreviation' => 'HABB'],
            ['name' => 'UNITED BANK LTD', 'abbreviation' => 'UNIL'],
            ['name' => 'MCB BANK LTD', 'abbreviation' => 'MCIB'],
            ['name' => 'ALLIED BANK LTD', 'abbreviation' => 'ABPA'],
            ['name' => 'INDUSTRIAL DEVELOPMENT BANK LTD', 'abbreviation' => 'ICBK'],
            ['name' => 'ZARAI TARAQIATI BANK LTD', 'abbreviation' => 'ZTBL'],
            ['name' => 'FIRST WOMEN BANK LTD', 'abbreviation' => 'FWOM'],
            ['name' => 'BANK AL - HABIB LTD', 'abbreviation' => 'BAHL'],
            ['name' => 'ASKARI BANK LTD', 'abbreviation' => 'ASCM'],
            ['name' => 'BANK ALFALAH LTD', 'abbreviation' => 'ALFH'],
            ['name' => 'SAMBA BANK LTD', 'abbreviation' => 'SAMB'],
            ['name' => 'FAYSAL BANK LTD', 'abbreviation' => 'FAYS'],
            ['name' => 'KASB BANK LTD', 'abbreviation' => 'PLCO'],
            ['name' => 'MEEZAN BANK LTD', 'abbreviation' => 'MEZN'],
            ['name' => 'HABIB METROPOLITAN BANK LTD', 'abbreviation' => 'MBPL'],
            ['name' => 'NIB BANK LTD', 'abbreviation' => 'NIBP'],
            ['name' => 'DEUTSCHE BANK LTD', 'abbreviation' => 'DEUT'],
            ['name' => 'SILK BANK LTD', 'abbreviation' => 'SAUD'],
            ['name' => 'SONERI BANK LTD', 'abbreviation' => 'SONE'],
            ['name' => 'BANK OF KHYBER', 'abbreviation' => 'KHYB'],
            ['name' => 'BANK OF PUNJAB', 'abbreviation' => 'BPUN'],
            ['name' => 'ALBARAKA BANK(PAKISTAN) LTD', 'abbreviation' => 'AIIN'],
            ['name' => 'BANK ISLAMI PAKISTAN LTD', 'abbreviation' => 'BKIP'],
            ['name' => 'BANK OF TOKYO - MITSUBISHI UFJ LTD', 'abbreviation' => 'BOTK'],
            ['name' => 'CITIBANK N . A .', 'abbreviation' => 'CITI'],
            ['name' => 'DUBAI ISLAMIC BANK PAKISTAN LTD', 'abbreviation' => 'DUIB'],
            ['name' => 'SUMMIT BANK LTD', 'abbreviation' => 'SUMB'],
            ['name' => 'STANDARD CHARTERED BANK(PAKISTAN) LTD', 'abbreviation' => 'SCBL'],
            ['name' => 'JS BANK LTD', 'abbreviation' => 'JSBL'],
            ['name' => 'SME BANK LTD', 'abbreviation' => 'SMES'],
            ['name' => 'SINDH BANK LTD', 'abbreviation' => 'SIND'],
            ['name' => 'BURJ BANK LTD', 'abbreviation' => 'BURJ'],
            ['name' => 'APNA MICROFINANCE BANK LTD', 'abbreviation' => 'AMBL'],
            ['name' => 'U MICROFINANCE BANK LTD', 'abbreviation' => 'UMBL']
        ];

        Bank::query()->insert($banks);
    }
}
