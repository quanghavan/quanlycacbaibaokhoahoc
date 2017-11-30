<?php

namespace App\Http\Controllers;
use App\PaperManager;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //đăng xuất
    public function logout(){

    }
    //hiển thị trang thay đổi mật khẩu
    public function getChangeUserPass($idUser){

    }
    //xử lý việc thay đổi mật khẩu
    public function postCangeUserPass($idUser){

    }
    //xóa bài báo
    public function deletePaper($idPager){

    }
    //hiển thị trang thêm bài báo
    public function getAddData(Request $request){

        if($request->has('success_message') || $request->has('error_message')){
            return view('add_data', ['success_message'=>$request->input('success_message'), 
                        'error_message'=>$request->input('error_message')]);
        }
        return view('add_data', ['success_message'=>"", 'error_message'=>'']);
    }
    //xử lý việc thêm bài báo
    public function postAddData(Request $request){
        $paper_manager = new PaperManager();
        return $paper_manager->addData($request);
    }
}
