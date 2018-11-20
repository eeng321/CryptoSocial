<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

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

    public function edit()
    {
        return view('edit');
    }
    public function update(Request $req)
    {
        $req_info = $req->only(['id','name','password']);
        
        //image handler
        if($req->hasFile('pic')){
            $req->validate([
                'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $pathName = $req_info['id'].'_avatar'.'.'.$req->file('pic')->getClientOriginalExtension();
            $req->file('pic')->storeAs('avatars',$pathName);
            $update_data = [
                'name' => $req_info['name'],
                'avatar' => $pathName,
                'password' => Hash::make($req_info['password']),
            ];
        }else{
            $update_data = [
                'name' => $req_info['name'],
                'password' => Hash::make($req_info['password']),
            ];
        }
       
        $this->userrequest->update($update_data, $req_info['id']);
        $data['new_name'] = $req_info['name'];
        return redirect()->to('edit');

    }


    //Geting Username for trades page
    public static function getName($id)
    {
        $myName = \DB::table('users')->where('id', $id )->value('name');
        return $myName;
    }
     //Geting Picture for trades page
     public static function getAvatar($id)
     {
         $myPic = \DB::table('users')->where('id', $id )->value('avatar');
         return $myPic;
     }
}
