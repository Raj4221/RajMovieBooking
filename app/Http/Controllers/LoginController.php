<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $req){
        $affected = DB::table('members')->get();
        foreach($affected as $member){
            if($req->username=="admin" and $req->password=="admin")
            {
                $req->session()->put("admin",$req->username);
                return redirect("/insert");
            }
            elseif($req->username==$member->username and $req->password==$member->password){
                $req->session()->put("user",$member->id);
                $req->session()->put("name",$member->username);
                return redirect("/home");
            }
        }
        return back()->with('msg','Pleae enter valid user name and password');
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect("/");
    }
    public function view(Request $req){
        $affected = DB::table('bookings')
            ->join('movies', 'movies.id', '=', 'bookings.m_id')
            ->select('movies.image','movies.name','movies.description','bookings.time','bookings.TheatreName','bookings.totalperson')
            ->orderBy('bookings.b_id', 'desc')
            ->get();
        return view("ticket")->with('affected' , $affected);
    }
    public function viewmovie(Request $req){
        $affected = DB::table('movies')
            ->get();
        return view("view_movie")->with('affected',$affected);
    }
    public function viewmoviedetail(Request $req){
        $affected = DB::table('movies')
        ->where(['movies.id' => $req->id])
        ->get();
        $cast = DB::table('actors')
        ->where(['m_id' => $req->id])
        ->get();
        return view("view_movie_detail")->with(['affected' => $affected,  'cast' => $cast]);
    }
    public function viewtheatre(Request $req){
        $affected = DB::table('theatres')
            ->get();
        return view("view_theatre")->with('affected',$affected);
    }
    public function theatredelete(Request $req){
        $delete = DB::table('theatres')->where('t_id', $req->id)->delete();
        return back();
    }
    public function actordelete(Request $req){
        $delete = DB::table('actors')->where('a_id', $req->id)->delete();
        return back();
    }
    public function viewactordetail(Request $req){
        $actor = DB::table('actors')
        ->where(['a_id' => $req->id])
        ->get();
        $movie=DB::table('actors')
        ->join('movies', 'movies.id', '=', 'actors.m_id')
        ->select('movies.image','movies.name')
        ->where(['actors.a_id' => $req->id])
        ->get();
        return view("viewactordetail")->with(['actor' => $actor,  'movie' => $movie]);
    }
    public function viewtheatredetail(Request $req){
        $affected = DB::table('theatres')
            ->where(['t_id' => $req->id])
            ->get();
        return view("update_theatre")->with('affected',$affected);
    }
    public function updatetheatredetail(Request $req){
        $affected = DB::table('theatres')
        ->where('t_id', $req->t_id)
        ->update(['t_name'=>$req->name,'t_city'=>$req->city,'rate'=>$req->rate]);
        return back()->with('msg','Theatre Updated Sucessfully');
    }
}
