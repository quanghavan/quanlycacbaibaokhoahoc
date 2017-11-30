<?php

use Illuminate\Database\Seeder;

class TheloaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('theloai')->delete();
        
        \DB::table('theloai')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Ten' => 'Xã Hội',
                'TenKhongDau' => 'Xa-Hoi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'Ten' => 'Thế Giới',
                'TenKhongDau' => 'The-Gioi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'Ten' => 'Kinh Doanh',
                'TenKhongDau' => 'Kinh-Doanh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'Ten' => 'Văn Hoá',
                'TenKhongDau' => 'Van-Hoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'Ten' => 'Thể Thao',
                'TenKhongDau' => 'The-Thao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'Ten' => 'Pháp Luật',
                'TenKhongDau' => 'Phap-Luat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'Ten' => 'Đời Sống',
                'TenKhongDau' => 'Doi-Song',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'Ten' => 'Khoa Học',
                'TenKhongDau' => 'Khoa-Hoc',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'Ten' => 'Vi Tính',
                'TenKhongDau' => 'Vi-Tinh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}