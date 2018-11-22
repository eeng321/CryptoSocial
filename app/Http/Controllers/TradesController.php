<?php

namespace App\Http\Controllers;

use App\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myId = null;
        if (!Auth::guest()) {
            $myId = DB::table('users')->where('id', Auth::user()->id)->value('id');
        }

        $trades = DB::table('trades')->latest()->paginate(15);
        return view('trades', ['myId' => $myId, 'trades' => $trades]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'buy_price' => 'required',
            'sell_price' => 'required',
            'trade_time' => 'required',
            'coin' => 'required',
        ]);
        $trade = new Trade([
            'user_id' => $request->get('user_id'),
            'buy_price' => $request->get('buy_price'),
            'sell_price' => $request->get('sell_price'),
            'trade_time' => $request->get('trade_time'),
            'coin' => $request->get('coin')
        ]);
        $trade->save();
        if($request->get('page') == 'users'){
            return redirect('/users/' .$request->get('user_id'))->with('success', 'Reply has been added');
        }else
            return redirect('/trades')->with('success', 'Trade has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function getTradeCount($id){
        $trades = \DB::table('trades')->where('user_id', $id)->count();
        return $trades;
    }  
}
