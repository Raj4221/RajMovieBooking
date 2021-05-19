<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $req){
        if($req->username=="admin" and $req->password=="admin")
        {
            $req->session()->put("admin",$req->username);
            return redirect("/insert");
        }
        elseif($req->username=="raj" and $req->password=="raj"){
            $req->session()->put("user",$req->username);
            return redirect("/home");
        }
        else{
            return back()->with('msg','Pleae enter valid user name and password');
        }
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect("/");
    }
    public function view(Request $req){
        $affected = DB::table('movies')
            ->where(['id' => $req->id])
            ->get();
        return view("ticket")->with('affected',$affected);
    }
}
