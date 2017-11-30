<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //đăng xuất
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    //hiển thị trang thay đổi mật khẩu
    public function getChangeUserPass($idUser){
        return view('change_password');
    }
    //xử lý việc thay đổi mật khẩu
    public function postChangeUserPass(Request $request,$idUser){
        $this->validate($request,[
            'username' => 'required|min:4',
            'password' => 'required|min:6',
            'passwordAgain' => 'required|same:password'
        ],[
            'username.required' => 'Bạn chưa điền username',
            'username.min' => 'Username phải chứa ít nhất 4 kí tự',
            'password.required' => 'Bạn chưa điền mật khẩu',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu không khớp',
        ]);
        $user = User::find($idUser);
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('admin/changeUserPass/'.$user->id)->with('thongbao','Thay đổi tài khoản thành công');
    }
    //xóa bài báo
    public function deletePaper($idPager){

    }
    //hiển thị trang thêm bài báo
    public function getAddPaper(){

    }
    //xử lý việc thêm bài báo
    public function postAddPaper(Request $request){

    }
}
