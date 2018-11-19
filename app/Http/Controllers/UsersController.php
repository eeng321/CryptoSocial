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
        dd($displayedUser);
        $data['userProfile'] = $displayedUser;
        return view('placeholder',$data);
    }
    //Delete this and implement update for edit page @Osborn
    // public function update(Request $req)
    // {
    //     $user = null;
    //     if(!empty($_POST['id'])) {
    //         \DB::table('users')->where('id', $_POST['id']) ->update(['name' => $_POST['name'], 'password' => $_POST['password']]);

    //     }
    //     $data['user'] = $user;
    //     return view('edit',$data);

    // }

    //Geting Username for trades page
    public static function getName($id)
    {
        $myName = \DB::table('users')->where('id', $id )->value('name');
        return $myName;
    }
}
