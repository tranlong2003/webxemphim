<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function addMove(){
        return view("admin.add-move");
    }
    public function deleteMove(){
        return view("admin.delete-move");
    }
    public function editMove(){
        return view("admin.edit-move");
    }
    public function login(){
        return view("admin.Login");
    }

  
    public function register(){
        return view("admin.Register");
    }
    public function postRegister(Request $request){
       
        $request ->validate([
            'name'=> 'required|unique:user',
            'email'=>'required|unique:user',
            'password'=>'required|required_with:rePassword|same:rePassword'
        ],[
            'name.required'=>'Tên không được để trống',
            'name.unique'=>'Tên đã tồn tại',
            'email.required'=>'Email không được để trống',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Password không được để trống',
            'password.same'=>'Password không trùng khớp',
        ]);
        $dataInput=[
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ];
        $data = User::create($dataInput);
        if ($data){
            return redirect()->route('login');
        }else{
            return "Đăng ký không thành công";
        }

    }
    
}
