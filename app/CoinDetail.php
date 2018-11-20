<?php

namespace App;

class CoinDetail {
	var $price;
	var $changeIn24;

	public function setPrice($price) {
		$this->price = $price;
	}

	public function setChangeIn24($changeIn24) {
		$this->changeIn24 = $changeIn24;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getChangeIn24() {
		return $this->changeIn24;
	}
}
?>