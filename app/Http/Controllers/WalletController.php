<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Wallet;

class WalletController extends Controller
{

    public static function getWallets($id){
       // $walletList = null;
        $wallets = \DB::table('wallets')->where('user_id', $id)->oldest()->paginate(100);
        return $wallets;
    }

    public function store(Request $request)
    {
      $request->validate([
        'user_id' => 'required',
        'coin' => 'required',
        'amount' => 'required'
      ]);
      $wallet = new Wallet([
        'user_id'=> $request->get('user_id'),
        'coin' => $request->get('coin'),
        'amount'=> $request->get('amount')
      ]);
      $wallet->save();
      return redirect('/users/'. $request->input('user_id'))->with('success', 'Wallet has been added');
    }


}
