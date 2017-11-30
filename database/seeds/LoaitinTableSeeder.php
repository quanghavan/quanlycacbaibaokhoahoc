<?php

use Illuminate\Database\Seeder;

class LoaitinTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loaitin')->delete();
        
        \DB::table('loaitin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idTheLoai' => 1,
                'Ten' => 'Giáo Dục',
                'TenKhongDau' => 'Giao-Duc',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'idTheLoai' => 1,
                'Ten' => 'Nhịp Điệu Trẻ',
                'TenKhongDau' => 'Nhip-Dieu-Tre',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'idTheLoai' => 1,
                'Ten' => 'Du Lịch',
                'TenKhongDau' => 'Du-Lich',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'idTheLoai' => 1,
                'Ten' => 'Du Học',
                'TenKhongDau' => 'Du-Hoc',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'idTheLoai' => 2,
                'Ten' => 'Cuộc Sống Đó Đây',
                'TenKhongDau' => 'Cuoc-Song-Do-Day',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'idTheLoai' => 2,
                'Ten' => 'Ảnh',
                'TenKhongDau' => 'Anh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'idTheLoai' => 2,
                'Ten' => 'Người Việt 5 Châu',
                'TenKhongDau' => 'Nguoi-Viet-5-Chau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'idTheLoai' => 2,
                'Ten' => 'Phân Tích',
                'TenKhongDau' => 'Phan-Tich',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'idTheLoai' => 3,
                'Ten' => 'Chứng Khoán',
                'TenKhongDau' => 'Chung-Khoan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'idTheLoai' => 3,
                'Ten' => 'Bất Động Sản',
                'TenKhongDau' => 'Bat-Dong-San',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'idTheLoai' => 3,
                'Ten' => 'Doanh Nhân',
                'TenKhongDau' => 'Doanh-Nhan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'idTheLoai' => 3,
                'Ten' => 'Quốc Tế',
                'TenKhongDau' => 'Quoc-Te',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'idTheLoai' => 3,
                'Ten' => 'Mua Sắm',
                'TenKhongDau' => 'Mua-Sam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'idTheLoai' => 3,
                'Ten' => 'Doanh Nghiệp Viết',
                'TenKhongDau' => 'Doanh-Nghiep-Viet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'idTheLoai' => 4,
                'Ten' => 'Hoa Hậu',
                'TenKhongDau' => 'Hoa-Hau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'idTheLoai' => 4,
                'Ten' => 'Nghệ Sỹ',
                'TenKhongDau' => 'Nghe-Sy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'idTheLoai' => 4,
                'Ten' => 'Âm Nhạc',
                'TenKhongDau' => 'Am-Nhac',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'idTheLoai' => 4,
                'Ten' => 'Thời Trang',
                'TenKhongDau' => 'Thoi-Trang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'idTheLoai' => 4,
                'Ten' => 'Điện Ảnh',
                'TenKhongDau' => 'Dien-Anh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'idTheLoai' => 4,
                'Ten' => 'Mỹ Thuật',
                'TenKhongDau' => 'My-Thuat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'idTheLoai' => 5,
                'Ten' => 'Bóng Đá',
                'TenKhongDau' => 'Bong-Da',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'idTheLoai' => 5,
                'Ten' => 'Tennis',
                'TenKhongDau' => 'Tennis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'idTheLoai' => 5,
                'Ten' => 'Chân Dung',
                'TenKhongDau' => 'Chan-Dung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'idTheLoai' => 5,
                'Ten' => 'Ảnh',
                'TenKhongDau' => 'Anh-TT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'idTheLoai' => 6,
                'Ten' => 'Hình Sự',
                'TenKhongDau' => 'Hinh-Su',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'idTheLoai' => 1,
                'Ten' => 'Sennehi 12',
                'TenKhongDau' => '',
                'created_at' => '2016-06-11 08:43:27',
                'updated_at' => '2016-06-11 08:43:27',
            ),
        ));
        
        
    }
}