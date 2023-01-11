# IBAN-Verification
Added IBAN verification for Pakistani account using preg_match which intially checks for the pattern that is 'PK(2 check digits)(bank abbreviation--4 characters)(16 digits account number)'
After that follwed the steps:
1. Move the two alphabetic character country code and check digit pair from the
    front of the IBAN to back 
2. Convert all alphabetic characters to numeric digits according to the standard
    character Conversion Table – ‘Annexure A’
3. Take modulus 97 of the number obtained in the above step, if this remainder is 1,
    then the IBAN is valid
    
Annexure A
![image](https://user-images.githubusercontent.com/42619450/211727801-02528690-3c1b-4c3b-966f-8728366524bd.png)
