<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bùi Đức Phú',
                'email' => 'phubui2702@gmail.com',
                'quyen' => 1,
                'password' => '$2y$10$CEdbdsSMU9Nv.6yjdRMEtOhR0kdIiOBWtNR2Bup9upjueOPbcsM9m',
                'remember_token' => 'wqpzyNdbiIEnIpViHJHxsPEzOrGfGQWm1m9VEvBxR7poaRs8PviM8TZCrIFa',
                'created_at' => '2016-06-09 10:05:09',
                'updated_at' => '2016-06-18 14:06:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User_2',
                'email' => 'phubui2703@gmail.com',
                'quyen' => 0,
                'password' => '$2y$10$VSYdTPHgu6iQ0NBouPmQTe2nxENOouLMEcjQiG54cFNlUbEInurxC',
                'remember_token' => 'Ct5uhVw0v6IRl6tIZREu7htXXZ7FVM1nPu78EbY5TbnKhdkL49E8imPpJHal',
                'created_at' => '2016-06-09 10:05:09',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'User_3',
                'email' => 'user_3@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$DES3NL8tozlU99dvO9o4lOfYyYcaM9n86gJcJV5.fz2G8b6qLa6Gq',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:09',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'User_4',
                'email' => 'user_4@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$xqfx9motmrCAEuEjCyQroOo/eFqum1hPhgwnz5LSLkhdyGHvf6l8O',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'User_5',
                'email' => 'user_5@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$rTviORV94uWv/KcNK7s0UeGwlQ2DSN5UGSOAzMkZ6sGgfr9nE2fSq',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'User_6',
                'email' => 'user_6@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$AwcqOIqwnPM9ZkYE1e6x.OkQAjY5V7H.WP73VVod/2mGNp1Y0zWUy',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'User_7',
                'email' => 'user_7@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$nSJhdDCm7zfF5uZpkhEuQufsLAqc1OZZnTME4AcTIx/2PsnnbrpZ6',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'User_8',
                'email' => 'user_8@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$s1ik567.aaB/ZbykP5zBR.20Ps5Qd6EPkhHFGdSQwERYmX1G/CnEK',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'User_9',
                'email' => 'user_9@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$/GQdzMM1G0CsrEF7RnQy4eHCkO2SqTNbE6QyRXCBtOuvyqIaFoMnm',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'User_10',
                'email' => 'user_10@mymail.com',
                'quyen' => 0,
                'password' => '$2y$10$gV.fAHxmpvB57JXKIEuUYumcZZhbCqtM8MpXDZOfDFBTl6X0WAHiK',
                'remember_token' => NULL,
                'created_at' => '2016-06-09 10:05:10',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 17,
                'name' => 'quangha',
                'email' => 'quangha.nb.hust@gmail.com',
                'quyen' => 0,
                'password' => '$2y$10$DzNU3QGXFDDow6rDSpM6xuqyTSnDOINhnA.vd5pQ0A5df.rsaogWy',
                'remember_token' => 'huowvt5JSxYzKPu71rUHaHz9d2IwORG6Zm9ExBF3TJFIBgmhkBDvYMd2ap7i',
                'created_at' => '2017-10-21 22:26:15',
                'updated_at' => '2017-10-21 22:26:15',
            ),
            11 => 
            array (
                'id' => 18,
                'name' => 'quanghavan',
                'email' => '1ad@gmail.com',
                'quyen' => 0,
                'password' => '$2y$10$1BQRNY3cx/3cct6c2jCEjOtrr7ZfxQHLzVamiLFBE1Gc2SBEdUpCO',
                'remember_token' => 'Sg04il8nXUZ1FlBLym13yL3ZAqqHQKDcCmIPW3CrvlDFaZtXmj4iHo43qDWh',
                'created_at' => '2017-10-21 22:32:17',
                'updated_at' => '2017-10-21 22:32:17',
            ),
            12 => 
            array (
                'id' => 19,
                'name' => 'quanghavan',
                'email' => '2ad@gmail.com',
                'quyen' => 0,
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => '2017-10-21 22:33:09',
                'updated_at' => '2017-10-21 22:33:09',
            ),
            13 => 
            array (
                'id' => 20,
                'name' => 'haquang',
                'email' => '3ad@gmail.com',
                'quyen' => 0,
                'password' => '123456789',
                'remember_token' => NULL,
                'created_at' => '2017-10-25 20:01:20',
                'updated_at' => '2017-10-25 20:01:20',
            ),
            14 => 
            array (
                'id' => 21,
                'name' => 'quanghavan120796',
                'email' => '24ad@gmail.com',
                'quyen' => 0,
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => '2017-10-25 20:08:42',
                'updated_at' => '2017-10-25 20:08:42',
            ),
            15 => 
            array (
                'id' => 22,
                'name' => 'quanghavan123123',
                'email' => '123@gmail.com',
                'quyen' => 0,
                'password' => '123456',
                'remember_token' => NULL,
                'created_at' => '2017-10-25 21:06:10',
                'updated_at' => '2017-10-25 21:06:10',
            ),
            16 => 
            array (
                'id' => 24,
                'name' => 'quanghavan',
                'email' => '12ad@gmail.com',
                'quyen' => 0,
                'password' => '$2y$10$1BQRNY3cx/3cct6c2jCEjOtrr7ZfxQHLzVamiLFBE1Gc2SBEdUpCO',
                'remember_token' => NULL,
                'created_at' => '2017-10-31 22:43:52',
                'updated_at' => '2017-10-31 22:43:52',
            ),
        ));
        
        
    }
}