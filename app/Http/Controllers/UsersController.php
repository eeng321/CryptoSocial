<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    protected $userrequest;
    //
    public function __construct(User $user)
    {
        $this->userrequest = new UserRepository($user);
    }
    public function index(Request $req) 
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

    public function show($id)
    {
        //display user profile 
        // path: /users/{id/name ??} 
        $displayedUser = $this->userrequest->getbyid($id);
      //  dd($displayedUser);
        $data['userProfile'] = $displayedUser;
        return view('profile',$data);
    }

    public function myWatchlist($id)
    {
        //display user profile 
        // path: /users/{id/name ??} 
        $displayedUser = $this->userrequest->getbyid($id);
      //  dd($displayedUser);
        $data['userProfile'] = $displayedUser;
        return view('partials/profile/myWatchlist',$data);
    }

    
    public function dashboard($id)
    {
        //display user profile 
        // path: /users/{id/name ??} 
        $displayedUser = $this->userrequest->getbyid($id);
      //  dd($displayedUser);
        $data['userProfile'] = $displayedUser;
        return view('partials/profile/dashboard',$data);
    }

    public function myTrades($id)
    {
        //display user profile 
        // path: /users/{id/name ??} 
        $displayedUser = $this->userrequest->getbyid($id);
      //  dd($displayedUser);
        $data['userProfile'] = $displayedUser;
        return view('partials/profile/myTrades',$data);
    }

    public function chat($id)
    {
        //display user profile 
        // path: /users/{id/name ??} 
        $displayedUser = $this->userrequest->getbyid($id);
      //  dd($displayedUser);
        $data['userProfile'] = $displayedUser;
        return view('partials/profile/chat',$data);
    }
}
