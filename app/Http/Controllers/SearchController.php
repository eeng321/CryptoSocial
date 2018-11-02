<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class SearchController extends Controller
{
    protected $userrequest;
    //
    public function __construct(User $user)
    {
        $this->userrequest = new UserRepository($user);
    }
    public function search(Request $req) 
    {
        //check query
        $userList = null;
        if(!empty($_GET['searchUser'])) {
            $query = $_GET['searchUser'];
            $userList = $this->userrequest->searchquery($query);
        } else {

            $userList = $this->userrequest->paginateAll($req);
        }
        $data['users'] = $userList;
        return view('userspage',$data);
    }
}
