<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use Mail; 
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{

      public function submitForgetPasswordForm(Request $request)
      {
          
          $request->validate([
              'email' => 'required|email',
          ]);
  
          $checkEmail = DB::table('user')
                              ->where([
                                'email' => $request->email
                              ])
                              ->first();
  
          if(!$checkEmail){
              return view('login')->with('output', '無効なメール！');
          }

  
          $token = Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('forgetPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });
  
          return view('login')->with('output', 'パスワードリセットリンクをメールで送信しました。');
      }

      public function showResetPasswordForm($token) { 
         return view('forgetPasswordLink', ['token' => $token]);
      }

      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return view('login')->with('output', '無効なメールまたはトークン！');
          }
  
          $user = DB::table('user')->where('email', $request->email)
                      ->update(['password' => $request->password]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
          return view('login')->with('output', 'あなたのパスワードは変更されました！');
      }

}
