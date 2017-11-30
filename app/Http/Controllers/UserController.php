<?php

namespace App\Http\Controllers;
use DB;
use App\PaperManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //hiển thị trang login
    public function getLogin(){
        return view('login');
    }
    //xử lý việc login
    public function postLogin(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Vui lòng nhập vào username',
            'password.required' => 'Vui lòng nhập vào password'
        ]);
        if(Auth::attempt(['username' =>$request->username,'password' => $request->password])){
            return redirect()->intended('search');
        }
        return redirect('login')->with('thongbao','Đăng nhập không thành công');

    }
    //hiển thị trang danhsach
    public function getList(){
        return view('list');
    }
    //hiển thị trang tìm kiếm và xử lý việc tìm kiếm
    public function search(Request $request){
        if($request->author != ""){
            $str = preg_split ('/[\s,]+/',$request->author);
			$arr[] = array('author.surname','like',$str[0].'%');
			$givenName[] = array('author.givenName','like',$str[0].'%');
			if(count($str)>1){
				$arr[] = array('author.givenName','like',$str[1].'%');
			}
        }
        if($request->keywords != ""){
          $arr[] = array('paper.keywords','like',$request->keywords.'%');
        }
        if($request->institute != ""){
          $arr[] = array('institute.name','like',$request->institute.'%');
        }
        if($request->city_state != ""){
          $arr[] = array('city.name','like',$request->city_state.'%');
        }
        if($request->country != ""){
          $arr[] = array('country.name','like',$request->country.'%');
        }
        if(isset($request->author)||isset($request->keywords)
          ||isset($request->institute)||isset($request->city_state)
          ||isset($request->country)){
          $pm = new PaperManager();
		  if(!isset($givenName)){
			$givenName[] = array('author.givenName','=','.');
		  }
          $paper = $pm->searchByField($arr,$givenName);
          $paper->setPath('search?author='.$request->author.'&keywords='.$request->keywords.'&institute='.$request->institute
          .'&city_state='.$request->city_state.'&country='.$request->country);
          return view('search_paper',['paper' => $paper]);
        }
        else{
          return view('search_paper');
        }
    }
}
