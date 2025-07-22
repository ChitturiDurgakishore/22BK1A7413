<?php

namespace App\Http\Controllers;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;
use App\Models\UsersData;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Attribute\WithHttpStatus;
use App\Models\URL;
class UserController extends Controller
{
    function LoginAssigningToken(Request $req){
        $email=$req->email;
        $rollno=$req->rollno;
        $details=UsersData::where('rollno',$rollno)->where('email',$email)->first();
        if($details){
            $tokendetails="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJNYXBDbGFpbXMiOnsiYXVkIjoiaHR0cDovLzIwLjI0NC41Ni4xNDQvZXZhbHVhdGlvbi1zZXJ2aWNlIiwiZW1haWwiOiJjaGl0dHVyaWR1cmdha2lzaG9yZUBnbWFpbC5jb20iLCJleHAiOjE3NTMxNjQ4NTEsImlhdCI6MTc1MzE2Mzk1MSwiaXNzIjoiQWZmb3JkIE1lZGljYWwgVGVjaG5vbG9naWVzIFByaXZhdGUgTGltaXRlZCIsImp0aSI6IjgwYmI4M2Y3LWU4YmItNDY1MC1iNzBiLTZjYjNmZDU4NWE2YyIsImxvY2FsZSI6ImVuLUlOIiwibmFtZSI6ImR1cmdha2lzaG9yZSBjaGl0dHVyaSIsInN1YiI6ImE3MmQ3ZjZlLTkwYTAtNDA5NS05MzkyLWFmYTYwZjc5MDlhMCJ9LCJlbWFpbCI6ImNoaXR0dXJpZHVyZ2FraXNob3JlQGdtYWlsLmNvbSIsIm5hbWUiOiJkdXJnYWtpc2hvcmUgY2hpdHR1cmkiLCJyb2xsTm8iOiIyMmJrMWE3NDEzIiwiYWNjZXNzQ29kZSI6InZwSmdzWiIsImNsaWVudElEIjoiYTcyZDdmNmUtOTBhMC00MDk1LTkzOTItYWZhNjBmNzkwOWEwIiwiY2xpZW50U2VjcmV0IjoiZGp1eXZySmFDdWJNanRlRSJ9.T7mCqDwnJKtFVnIWhWsMBGFY3kfF1EfRxnccrfW6_WQ";
            return view('URLPAGE',['token'=>$tokendetails]);
        }else{
            return "YOU are not authorized";
        }
    }

    function URLstored(Request $req){
        $originalurl=$req->BeforeURL;
        $redirecturl=$req->DesiredURL;
        $expiry=$req->duration;
        $status=URL::create([
            'originalurl'=>$originalurl,
            'redirecturl'=>$redirecturl,
            'expiry'=>$expiry
        ]);
        if($status){
            $details=URL::where('originalurl',$status->originalurl)->first();
            return view('URLDetails',['details'=>$details]);
        }
    }
}
