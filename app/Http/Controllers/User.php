<?php

namespace App\Http\Controllers;
use App\Models\userMdl;
use Illuminate\Http\Request;

class User extends Controller
{
    //
     public function index(){
          
          if(!session()->has('name')) return redirect('/');

          if(session()->get('role') == 1){
               $users = userMdl::getAllUser();
               return view('users',['users'=>$users]);
          }else
               return redirect()->back();
          
     }
     
    public function setUser(Request $request){

       $name = $request->post('name');
       $company = $request->post('company');
       $email = $request->post('email');
       $password = $request->post('password');

       $data = array(
           'name' => $name,
           'company' => $company,
           'email' => $email,
           'password' => $password,
            'date' => date('Y-m-d h:i:s')
       );

       $result = userMdl::insertUser($data);

       if($result == 0){
            return view('login')->with('output','存在するユーザーIDまたは電子メール');
       }else         
            return view('login')->with('output','登録に成功しました。承認されるまでお待ちください');


    }

    public function updateUser(Request $request){

          $id = $request->post('id');
          $email = $request->post('email');
          $address_id = $request->post('address_id');
          $role = $request->post('role');
          $state = $request->post('state');

          return userMdl::updateUser($id,$email,$address_id,$role,$state);
    }

    public function login(Request $request){

        $id = $request->post('username');
        $password = $request->post('password');
     
        $result = userMdl::getUser($id, $password);

          if($result == 0){
               return view('login')->with('output','ユーザー名またはメールアドレスが存在しません');
          }
          else if($result == 2){
                    return view('login')->with('output','無効なパスワード');
          }
          else if($result == 3){
               return view('login')->with('output','まだ承認されていません。承認されるまでお待ちください');
          }
          else if($result == 1){

                    if(session()->get('role') == 1)
                         return redirect('/orders');
                    else
                         return redirect('/producers');
          }
    }

    public function logout(){

          session()->flush();
          return redirect('/');
    }
}
