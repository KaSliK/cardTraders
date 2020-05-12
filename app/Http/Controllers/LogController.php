<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LogController extends Controller
{
        public function Login(Request $request){
            $response = Http::post('http://ct.zobacztu.pl/api/login', [
                'email' => $request->email,
                'password' =>  $request->password,
            ]);
            if($response->status() == 200) {
                session(['token' => $response->json()['success']['token']]);
                session(['logged' => true]);

                $response_user = Http::withHeaders([
                    'Authorization' => 'Bearer '.session('token'),
                ])
                    ->post('http://ct.zobacztu.pl/api/users/details');


            }else{

            }
        }
}
