<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comment')->delete();
        
        \DB::table('comment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idUser' => 10,
                'idTinTuc' => 93,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:45',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'idUser' => 8,
                'idTinTuc' => 19,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:45',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'idUser' => 2,
                'idTinTuc' => 22,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:45',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'idUser' => 2,
                'idTinTuc' => 41,
                'NoiDung' => 'Ý kiến của tôi khác so với bài này',
                'created_at' => '2016-06-09 17:20:45',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'idUser' => 6,
                'idTinTuc' => 50,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:45',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'idUser' => 9,
                'idTinTuc' => 79,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:45',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'idUser' => 5,
                'idTinTuc' => 94,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'idUser' => 8,
                'idTinTuc' => 99,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'idUser' => 7,
                'idTinTuc' => 22,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'idUser' => 5,
                'idTinTuc' => 48,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'idUser' => 4,
                'idTinTuc' => 69,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'idUser' => 5,
                'idTinTuc' => 87,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'idUser' => 6,
                'idTinTuc' => 72,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'idUser' => 5,
                'idTinTuc' => 6,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'idUser' => 7,
                'idTinTuc' => 88,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'idUser' => 9,
                'idTinTuc' => 58,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'idUser' => 1,
                'idTinTuc' => 19,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'idUser' => 4,
                'idTinTuc' => 80,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'idUser' => 10,
                'idTinTuc' => 40,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'idUser' => 2,
                'idTinTuc' => 17,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'idUser' => 5,
                'idTinTuc' => 25,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'idUser' => 1,
                'idTinTuc' => 48,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'idUser' => 4,
                'idTinTuc' => 68,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'idUser' => 10,
                'idTinTuc' => 14,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'idUser' => 4,
                'idTinTuc' => 8,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'idUser' => 10,
                'idTinTuc' => 39,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:46',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'idUser' => 4,
                'idTinTuc' => 61,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'idUser' => 6,
                'idTinTuc' => 55,
                'NoiDung' => 'Ý kiến của tôi khác so với bài này',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'idUser' => 3,
                'idTinTuc' => 34,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'idUser' => 10,
                'idTinTuc' => 30,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'idUser' => 10,
                'idTinTuc' => 59,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'idUser' => 5,
                'idTinTuc' => 91,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'idUser' => 9,
                'idTinTuc' => 16,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'idUser' => 5,
                'idTinTuc' => 50,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'idUser' => 8,
                'idTinTuc' => 55,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'idUser' => 9,
                'idTinTuc' => 27,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'idUser' => 4,
                'idTinTuc' => 22,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'idUser' => 4,
                'idTinTuc' => 77,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'idUser' => 7,
                'idTinTuc' => 88,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'idUser' => 5,
                'idTinTuc' => 14,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'idUser' => 7,
                'idTinTuc' => 67,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'idUser' => 10,
                'idTinTuc' => 38,
                'NoiDung' => 'Tôi sẽ học thèo bài viết này',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'idUser' => 3,
                'idTinTuc' => 49,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'idUser' => 4,
                'idTinTuc' => 57,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'idUser' => 1,
                'idTinTuc' => 17,
                'NoiDung' => 'Ý kiến của tôi khác so với bài này',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'idUser' => 5,
                'idTinTuc' => 13,
                'NoiDung' => 'Tôi sẽ học thèo bài viết này',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'idUser' => 7,
                'idTinTuc' => 78,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:47',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'idUser' => 3,
                'idTinTuc' => 9,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'idUser' => 2,
                'idTinTuc' => 86,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'idUser' => 10,
                'idTinTuc' => 29,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'idUser' => 3,
                'idTinTuc' => 67,
                'NoiDung' => 'Tôi sẽ học thèo bài viết này',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'idUser' => 3,
                'idTinTuc' => 71,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'idUser' => 5,
                'idTinTuc' => 41,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'idUser' => 5,
                'idTinTuc' => 65,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'idUser' => 3,
                'idTinTuc' => 55,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'idUser' => 1,
                'idTinTuc' => 99,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'idUser' => 6,
                'idTinTuc' => 98,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'idUser' => 5,
                'idTinTuc' => 47,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'idUser' => 10,
                'idTinTuc' => 34,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'idUser' => 9,
                'idTinTuc' => 94,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'idUser' => 9,
                'idTinTuc' => 22,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'idUser' => 9,
                'idTinTuc' => 56,
                'NoiDung' => 'Ý kiến của tôi khác so với bài này',
                'created_at' => '2016-06-09 17:20:48',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'idUser' => 7,
                'idTinTuc' => 44,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'idUser' => 3,
                'idTinTuc' => 10,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'idUser' => 2,
                'idTinTuc' => 28,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'idUser' => 10,
                'idTinTuc' => 18,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'idUser' => 7,
                'idTinTuc' => 75,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'idUser' => 4,
                'idTinTuc' => 50,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'idUser' => 6,
                'idTinTuc' => 82,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'idUser' => 7,
                'idTinTuc' => 12,
                'NoiDung' => 'Ý kiến của tôi khác so với bài này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'idUser' => 2,
                'idTinTuc' => 69,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'idUser' => 10,
                'idTinTuc' => 68,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'idUser' => 1,
                'idTinTuc' => 1,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'idUser' => 5,
                'idTinTuc' => 66,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'idUser' => 6,
                'idTinTuc' => 16,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'idUser' => 1,
                'idTinTuc' => 65,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'idUser' => 9,
                'idTinTuc' => 48,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'idUser' => 3,
                'idTinTuc' => 58,
                'NoiDung' => 'Ý kiến của tôi khác so với bài này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'idUser' => 10,
                'idTinTuc' => 56,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'idUser' => 5,
                'idTinTuc' => 96,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'idUser' => 7,
                'idTinTuc' => 41,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'idUser' => 4,
                'idTinTuc' => 16,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'idUser' => 10,
                'idTinTuc' => 80,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:49',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'idUser' => 2,
                'idTinTuc' => 64,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'idUser' => 9,
                'idTinTuc' => 45,
                'NoiDung' => 'Tôi sẽ học thèo bài viết này',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'idUser' => 8,
                'idTinTuc' => 19,
                'NoiDung' => 'Bài viết này được',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'idUser' => 5,
                'idTinTuc' => 30,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'idUser' => 1,
                'idTinTuc' => 21,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'idUser' => 2,
                'idTinTuc' => 75,
                'NoiDung' => 'Không thích bài viết này',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'idUser' => 9,
                'idTinTuc' => 94,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'idUser' => 10,
                'idTinTuc' => 94,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'idUser' => 1,
                'idTinTuc' => 71,
                'NoiDung' => 'Tôi chưa có ý kiến gì',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'idUser' => 9,
                'idTinTuc' => 97,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'idUser' => 6,
                'idTinTuc' => 19,
                'NoiDung' => 'Bài viết này tạm ổn',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'idUser' => 7,
                'idTinTuc' => 15,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'idUser' => 9,
                'idTinTuc' => 66,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'idUser' => 8,
                'idTinTuc' => 27,
                'NoiDung' => 'Bài viết này chưa được hay lắm',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'idUser' => 3,
                'idTinTuc' => 24,
                'NoiDung' => 'Hay quá trời',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'idUser' => 1,
                'idTinTuc' => 83,
                'NoiDung' => 'Bài viết rất hay',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'idUser' => 8,
                'idTinTuc' => 11,
                'NoiDung' => 'Tôi rất thích bài viết này',
                'created_at' => '2016-06-09 17:20:50',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'idUser' => 1,
                'idTinTuc' => 1,
                'NoiDung' => 'Được',
                'created_at' => '2016-06-16 14:25:59',
                'updated_at' => '2016-06-16 14:25:59',
            ),
            101 => 
            array (
                'id' => 102,
                'idUser' => 1,
                'idTinTuc' => 1,
                'NoiDung' => 'Chán muốn chết',
                'created_at' => '2016-06-16 14:32:43',
                'updated_at' => '2016-06-16 14:32:43',
            ),
            102 => 
            array (
                'id' => 103,
                'idUser' => 1,
                'idTinTuc' => 403,
                'NoiDung' => 'a',
                'created_at' => '2016-06-18 14:02:59',
                'updated_at' => '2016-06-18 14:02:59',
            ),
        ));
        
        
    }
}