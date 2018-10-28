<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiNews;

class ApiNewsController extends Controller
{
    //
    public function cryptonews(Request $request)
    {
        $newsApi = new ApiNews;
        $newsquery = urlencode("crypto or bitcoin");
        $data['news'] = $newsApi->queryNews($newsquery);
        return view('news',$data);
    }
}
