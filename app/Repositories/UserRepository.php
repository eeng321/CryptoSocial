<?php 

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

class UserRepository implements RepositoryInterface
{
    protected $model;
    private static $paginationValue;

    public function __construct(Model $m) 
    {
        $this->model = $m;
        $this::$paginationValue = \Config::get('constants.pagination');
    }

    public function all()
    {
        return $this->model::all();
    }
    public function paginateAll(Request $request)
    {
        $page = $request->has('page') ? $request->query('page') : 1;
        //dd($page);
        //update list every 2 minutes 
        $userList = Cache::remember('users_page_'.$page,2, function() {
            return $this->model->paginate($this::$paginationValue);
        });
        return $userList;
    }
    public function create(array $userinfo) 
    {
        return $this->model::create($userinfo);
    }

    public function getbyid($id)
    {
        return $this->model::findOrFail($id);
    }

    public function update(array $userinfo, $id)
    {
        $user = $this->model::find($id);
        return $user->update($userinfo);
    }

    public function delete($id)
    {
        return $this->model::destroy($id);
    }

    public function searchquery($query) 
    {
        return $this->model::where('name','like',"%".$query."%")->paginate($this::$paginationValue);
    }
}