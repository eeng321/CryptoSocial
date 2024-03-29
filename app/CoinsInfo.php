<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CoinDetail;

class CoinsInfo extends Model{


	public function populateCoins() {
		$coins_url = "https://api.coinmarketcap.com/v2/listings/";

		$coins_json = file_get_contents($coins_url);
		$coins_array = json_decode($coins_json, true);

		return $coins_array;
	}

	public function getCoinDetail($coinName) {

		$coins_url = "https://api.coinmarketcap.com/v2/listings/";

		$coins_json = file_get_contents($coins_url);
		$coins_list = json_decode($coins_json, true);


		$coin_id = '';
		for($i = 0; $i < sizeof($coins_list['data']); $i++) {
			if($coinName == $coins_list['data'][$i]['name']) {
				$coin_id = $coins_list['data'][$i]['id'];
				break;
			}
		}

		$coin_url = "https://api.coinmarketcap.com/v2/ticker/".$coin_id."/";
		$coin_json = file_get_contents($coin_url);
		$coin = json_decode($coin_json, true);

		
		$coin_price = $coin['data']['quotes']['USD']['price'];

		$coinDetail = new CoinDetail();
		$coinDetail->setPrice($coin['data']['quotes']['USD']['price']);
		$coinDetail->setChangeIn24($coin['data']['quotes']['USD']['percent_change_24h']); 

		return $coinDetail;
	}
	
}
?>