<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search() 
    {
        //check query
        $userList = null;
        if(!empty($_GET['searchUser'])) {
            $query = $_GET['searchUser'];
            $userList = DB::table('users')->where('name','like',"%".$query."%")->paginate(15);
        } else {
            $userList = DB::table('users')->paginate(15);
        }
        $data['users'] = $userList;
        return view('userspage',$data);
    }
}
