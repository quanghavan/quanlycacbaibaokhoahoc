<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class AuthenticationManager extends Model
{
    //thay đổi password
    public function changeUserPass(){

    }
    public function check($name, $pass){
        $check = DB::table('user')->where([['name', '=', $name], ['pass', '=', $pass]])->first();
        if(count($check)){
            return true;
        }
        return false;
    }
}
