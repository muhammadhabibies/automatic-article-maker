<?php

namespace app\Controllers;

abstract class Article
{
	private $tanggal;
	const OPEN = 'SANTAI AJA - ';

	protected function __construct($tanggal = "2022")
	{
		$this->tanggal = $tanggal;
	}

	protected function getTanggal() {
		return $this->tanggal;
	}

	abstract protected function getArticle();

	protected static function formatData($data) {
		$pecah = explode("\t", $data);
		$totalKata = str_word_count($data);
		$formatted = [];
		for ($nomor1 = -1; $nomor1 < $totalKata; $nomor1++) {
				$nomor1 += 1;
				$nomor2 = $nomor1 + 1;
				if (isset($pecah[$nomor1]) && isset($pecah[$nomor2])) {
						$juragan = substr_replace($pecah[$nomor1], '', 0, -6); // menghapus array string yg lokasinya diantara 0 dan -6
						$juragan2 = substr_replace($pecah[$nomor2], '', 0, 0);
				} else {
						break;
				}
				// echo $juragan . " " . $juragan2 . "<br/><br/>";
				$formatted[] = $juragan . " " . $juragan2 . "<br/><br/>";
		}
		return $formatted;
	}
}