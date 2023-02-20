<?php
class artikel
{
	protected $enter1 = "<br/>";
	protected $enter2 = "<br/><br/>";
	protected $tanggal = "2022";
	protected $open = "SANTAI AJA - ";
	public function getEnter1()
	{
		return $this->enter1;
	}
	public function getEnter2()
	{
		return $this->enter2;
	}
	public function setTanggal($tanggal)
	{
		$this->tanggal = $tanggal;
	}
	public function getTanggal()
	{
		return $this->tanggal;
	}
	public function getOpen()
	{
		return $this->open;
	}
}
class antv extends artikel
{
	private $saluran = "ANTV";
	private $acaraTV1 = "Gopi";
	private $acaraTV2 = "Balika Vadhu";
	private $acaraTV3 = "Silsila";
	private $description = "00.30 Merah Putih Peristiwa; 01.00";
	private $link = "https://www.visionplus.id/watch/channel/12/antv?cnumb=12&utype=visitor";
	public function getSaluran()
	{
		return $this->saluran;
	}
	public function setAcaraTV1($acaraTV1)
	{
		$this->acaraTV1 = $acaraTV1;
	}
	public function getAcaraTV1()
	{
		return $this->acaraTV1;
	}
	public function setAcaraTV2($acaraTV2)
	{
		$this->acaraTV2 = $acaraTV2;
	}
	public function getAcaraTV2()
	{
		return $this->acaraTV2;
	}
	public function setAcaraTV3($acaraTV3)
	{
		$this->acaraTV3 = $acaraTV3;
	}
	public function getAcaraTV3()
	{
		return $this->acaraTV3;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getLink()
	{
		return $this->link;
	}
}
class rcti extends artikel
{
	private $saluran = "RCTI";
	private $acaraTV1 = "Ikatan Cinta";
	private $acaraTV2 = "Putri Untuk Pangeran";
	private $acaraTV3 = "Amanah Wali S6";
	private $description = "04.45 Seputar iNews Pagi; 06.00 Go Spot";
	private $link = "https://www.rctiplus.com/tv/rcti";
	public function getSaluran()
	{
		return $this->saluran;
	}
	public function setAcaraTV1($acaraTV1)
	{
		$this->acaraTV1 = $acaraTV1;
	}
	public function getAcaraTV1()
	{
		return $this->acaraTV1;
	}
	public function setAcaraTV2($acaraTV2)
	{
		$this->acaraTV2 = $acaraTV2;
	}
	public function getAcaraTV2()
	{
		return $this->acaraTV2;
	}
	public function setAcaraTV3($acaraTV3)
	{
		$this->acaraTV3 = $acaraTV3;
	}
	public function getAcaraTV3()
	{
		return $this->acaraTV3;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getLink()
	{
		return $this->link;
	}
}
class TransTV_Trans7 extends artikel
{
	private $saluran1 = "TransTV";
	private $saluran2 = "Trans7";
	private $live1 = "https://www.transtv.co.id/live";
	private $live2 = "https://www.transtv.co.id/live/trans7";
	private $description = "05.00 Islam Itu Indah; 06.30 Insert Pagi";
	private $acaraTV1 = "Krim Malam"; // ini yang diubah
	private $acaraTV2 = "Bikin Laper";
	private $acaraTV3 = "Makan Receh";

	public function getSaluran1()
	{
		return $this->saluran1;
	}
	public function getSaluran2()
	{
		return $this->saluran2;
	}
	public function getLive1()
	{
		return $this->live1;
	}
	public function getLive2()
	{
		return $this->live2;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setAcaraTV1($acaraTV1)
	{
		$this->acaraTV1 = $acaraTV1;
	}
	public function getAcaraTV1()
	{
		return $this->acaraTV1;
	}
	public function setAcaraTV2($acaraTV2)
	{
		$this->acaraTV2 = $acaraTV2;
	}
	public function getAcaraTV2()
	{
		return $this->acaraTV2;
	}
	public function setAcaraTV3($acaraTV3)
	{
		$this->acaraTV3 = $acaraTV3;
	}
	public function getAcaraTV3()
	{
		return $this->acaraTV3;
	}
}
class NET_GTV extends artikel
{
	private $saluran1 = "NET TV";
	private $saluran2 = "GTV";
	private $live1 = "https://www.netmedia.co.id/live-streaming";
	private $live2 = "https://www.rctiplus.com/tv/gtv";
	private $description = "00.00 ONE Championship Warrior; 01.00 Comedy Night Live";
	private $acaraTV1 = "Elementary"; // ini yang diubah
	private $acaraTV2 = "Biar Viral";
	private $acaraTV3 = "Hot Spot Viral";

	public function getSaluran1()
	{
		return $this->saluran1;
	}
	public function getSaluran2()
	{
		return $this->saluran2;
	}
	public function getLive1()
	{
		return $this->live1;
	}
	public function getLive2()
	{
		return $this->live2;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setAcaraTV1($acaraTV1)
	{
		$this->acaraTV1 = $acaraTV1;
	}
	public function getAcaraTV1()
	{
		return $this->acaraTV1;
	}
	public function setAcaraTV2($acaraTV2)
	{
		$this->acaraTV2 = $acaraTV2;
	}
	public function getAcaraTV2()
	{
		return $this->acaraTV2;
	}
	public function setAcaraTV3($acaraTV3)
	{
		$this->acaraTV3 = $acaraTV3;
	}
	public function getAcaraTV3()
	{
		return $this->acaraTV3;
	}
}

// $tanggal = "Senin 18 Juli 2022";
$tanggal = "Selasa 19 Juli 2022";
// $tanggal = "Rabu 20 Juli 2022";
// $tanggal = "Kamis 21 Juli 2022";
// $tanggal = "Jumat 22 Juli 2022";
// $tanggal = "Sabtu 23 Juli 2022";
// $tanggal = "Minggu 24 Juli 2022";

// TransTV dan Trans7
// Sn : Lapor Pak!
// Sl : Anak Sekolah
// Rb : Bioskop TransTV
// Km : Krim Malam / Dunia Punya Cerita
// Jm : Klinik Tendean / Misteri Dunia
// Sb : Dewan Curhat / Warkop / The Police / The Hotman
// Mg : BTS / Terkait MotoGP
// cek dulu apabila default acara tv tidak ada di jadwal kali ini
$j = new TransTV_Trans7(); // Default : (Krim Malam, Bikin Laper, Makan Receh)
$j->setAcaraTV1("Lapor Pak"); // ganti ini
// $j->setAcaraTV2("Bikin Laper");
// $j->setAcaraTV3("Makan Receh");

// NET TV dan GTV
// Sn : Anak Jalanan A New Beginning
// Sl : Film / Legenda Sang Penunggu / Dunia Kiara / Bukan Cinderella Biasa
// Rb : Film / Take It Or Leave It / Police University / Jatanras
// Km : Film / Elementary / Touch Your Heart / Bulletproof / Detective Conan / Kurulus Osman 2
// Jm : Film / Festival Komedi / D-Tox / Extraordinary You / Big Movies Platinum
// Sb : Film / Tonight Show / BRIT Awards 2022
// Mg : IPA dan IPS
// cek dulu apabila default acara tv tidak ada di jadwal kali ini
// $j = new NET_GTV(); // Default : (Elementary, Biar Viral, Hot Spot Viral)
// $j->setAcaraTV1("Anak Jalanan A New Beginning"); // ganti ini
// $j->setAcaraTV2("Biar Viral");
// $j->setAcaraTV3("Hot Spot Viral");

$j->setTanggal($tanggal);

$acaraTV_live = "Live Streaming :{$j->getEnter1()}- {$j->getSaluran1()} : {$j->getLive1()}{$j->getEnter1()}- {$j->getSaluran2()} : {$j->getLive2()}";
$acaraTV_tag = "T : jadwal, acara TV, {$j->getSaluran1()}, {$j->getSaluran2()}, hari ini, {$j->getTanggal()}, {$j->getAcaraTV1()}";
$acaraTV_description = "D : Ini jadwal acara TV {$j->getSaluran1()} dan {$j->getSaluran2()} hari ini, {$j->getTanggal()}. Jadwal Saluran {$j->getSaluran1()}: {$j->getDescription()}";
$acaraTV_title = "Jadwal Acara TV {$j->getSaluran1()} dan {$j->getSaluran2()} Hari Ini, {$j->getTanggal()}: Ada {$j->getAcaraTV1()}";
$acaraTV_open = $j->getOpen();
$acaraTV_sentence1 = "Berikut jadwal acara TV {$j->getSaluran1()} dan {$j->getSaluran2()} hari ini, {$j->getTanggal()}.";
$acaraTV_sentence2 = "Apa saja jadwal acara TV menarik yang akan tayang di {$j->getSaluran1()} dan {$j->getSaluran2()} hari ini, pada {$j->getTanggal()}?";
$acaraTV_sentence3 = "Salah satu jadwal acara TV di {$j->getSaluran1()} dan {$j->getSaluran2()} hari ini, pada {$j->getTanggal()} adalah {$j->getAcaraTV2()}, {$j->getAcaraTV1()} dan {$j->getAcaraTV3()}.";
$acaraTV_sentence4 = $j->getEnter2() . "Berikut jadwal acara TV di {$j->getSaluran1()} dan {$j->getSaluran2()} hari ini, {$j->getTanggal()} di Waktu Indonesia Barat (WIB) yang telah dirangkum Santaiaja.co dari vidio.com:";
$acaraTV_sentence5 = "Jadwal Saluran {$j->getSaluran1()}";
$acaraTV_sentence6 = $j->getEnter2() . "Jadwal Saluran {$j->getSaluran2()}";

$acaraTV_take_article1 = "00:30	Int'l Boxing: Fight Sports	00:30
01:00	ONE Championship Warrior	00:30
01:30	Comedy Night Live	01:30
03:00	Ini Talkshow	01:00
04:00	Jatanras	01:00
05:00	Menjemput Berkah	01:00
06:00	86	01:00
07:00	Fakta +62	00:30
07:30	TikTok Wow	01:00
08:30	Zona Musik	00:30
09:00	Makan Enak	01:30
10:30	Hercai	01:30
12:00	Birth Of A Beauty	01:00
13:00	Hello Jadoo	01:30
14:30	Cells At Work	01:30
16:00	Shinbi's House	02:00
18:00	High Society	01:00
19:00	Top Spot	01:00
20:00	Biar Viral	02:00
22:00	Kurulus Osman 2	01:00
23:00	Jejak Peristiwa	00:30
23:30	Jatanras	01:00";

$acaraTV_take_article2 = "06:30	Obsesi (L)	00:30
07:00	SpongeBob SquarePants Movie	03:00
10:00	Buletin iNews Siang (L)	01:00
11:00	SpongeBob SquarePants Movie	01:30
12:30	SpongeBob SquarePants Movie	02:30
15:00	SpongeBob SquarePants Movie	02:00
17:00	Kisah Viral	01:00
18:00	Superdeal Indonesia	01:30
19:30	IPA & IPS	02:00
21:30	Anak Jalanan A New Beginning	02:00
23:30	Three Billboards Outside...	01:00";

$acaraTV_closing_paragraph = "Jadwal dapat berubah sesuai kebijakan saluran televisi, itulah jadwal acara TV yang akan tayang di {$j->getSaluran1()} dan {$j->getSaluran2()} hari ini, {$j->getTanggal()}.***";

// ANTV
// Sn : Kulfi / Ashoka
// Sl : Suami Pengganti / Berbagi Suami
// Rb : TMTM (Terpaksa Menikahi Tuan Muda) / Kulfi / Mata Batin
// Km : Silsila / Sufiyana ======== Suami Pengganti / Gangaa
// Jm : Kulfi / Peti Mati / Kafir / TMTM
// Sb : Menolak Talak / Karma Baik / The Andarans / Kekasih Halal / Ashoka
// Mg : Silsila / TMTM / Kopi Pas Tenan
// cek dulu apabila default acara tv tidak ada di jadwal kali ini
$i = new antv(); // Default : (Gopi, Balika Vadhu, Silsila)
// $i->setAcaraTV1("Gopi");
// $i->setAcaraTV2("Balika Vadhu");
$i->setAcaraTV3("The Intruder"); // ganti ini

// RCTI
// Sn : Tukang Ojek Pengkolan / Dunia Terbalik
// Sl : Putri Untuk Pangeran / Tukang Ojek Pengkolan / Dunia Terbalik
// Rb : Putri Untuk Pangeran / Dunia Terbalik
// Km : Putri Untuk Pangeran / Dunia Terbalik
// Jm : Putri Untuk Pangeran / Dunia Terbalik
// Sb : Amanah Wali S5
// Mg : Amanah Wali S5
// cek dulu apabila default acara tv tidak ada di jadwal kali ini
// $i = new rcti(); // Default : (Ikatan Cinta, Putri Untuk Pangeran, Amanah Wali S6)
// $i->setAcaraTV1("Ikatan Cinta");
// $i->setAcaraTV2("Dunia Terbalik"); // ganti ini
// $i->setAcaraTV3("Amanah Wali S6");

$i->setTanggal($tanggal);

$caption = "C : Live Streaming {$i->getAcaraTV1()} dan {$i->getAcaraTV2()} Cek di Jadwal {$i->getSaluran()} Hari Ini, {$i->getTanggal()}. ({$i->getSaluran()})";
$tag = "T : jadwal, acara TV, {$i->getSaluran()}, hari ini, {$i->getTanggal()}, link, live streaming, {$i->getAcaraTV1()}, {$i->getAcaraTV2()}, {$i->getAcaraTV3()}";
$description = "D : Ini jadwal acara TV dan Live Streaming {$i->getSaluran()} hari ini, {$i->getTanggal()}. Jadwal Saluran {$i->getSaluran()}: {$i->getDescription()}";
$title = "Live Streaming {$i->getAcaraTV1()} dan {$i->getAcaraTV2()}, Cek Jadwal Acara TV {$i->getSaluran()} Hari Ini, {$i->getTanggal()}: {$i->getAcaraTV3()}";
$open = $i->getOpen();
$paragraph1 = "Berikut link live streaming {$i->getAcaraTV1()} dan {$i->getAcaraTV2()} di jadwal acara TV {$i->getSaluran()} hari ini, {$i->getTanggal()}.";
$paragraph2 = "Apa saja jadwal acara TV menarik yang akan tayang di {$i->getSaluran()} hari ini, pada {$i->getTanggal()}?";
$paragraph3 = "Salah satu jadwal acara TV di {$i->getSaluran()} hari ini, pada {$i->getTanggal()} adalah {$i->getAcaraTV1()}, {$i->getAcaraTV3()} dan {$i->getAcaraTV2()}.";
$paragraph4 = $i->getEnter2() . "Untuk link live streaming {$i->getSaluran()} {$i->getAcaraTV1()} dan {$i->getAcaraTV2()} dapat diakses diakhir artikel.";
$paragraph5 = "Berikut jadwal acara TV {$i->getSaluran()} hari ini, {$i->getTanggal()} di Waktu Indonesia Barat (WIB) yang telah dirangkum Santaiaja.co dari laman resmi {$i->getSaluran()}:";
$paragraph6 = "Jadwal Saluran {$i->getSaluran()}";

$takeArtikel = "01:15	Delik	00:30
01:45	Awas Banyak Copet	00:45
02:30	Just For Laugh	00:30
03:00	Awas Banyak Copet	00:45
03:45	Kultum	00:15
04:00	Seputar iNews Pagi (L)	01:30
05:30	Sergap	00:45
06:15	Go Spot	01:15
07:30	Trending Banget Loh (TBL)	01:00
08:30	Dahsyatnya 2022	01:30
10:00	Silet	01:45
11:45	Seputar iNews Siang (L)	01:00
12:45	Si Doel Spesial	01:15
14:00	Bumi Langit	01:00
15:00	Tukang Ojek Pengkolan	02:30
17:30	Aku Jatuh Cinta	01:15
18:45	Aku Bukan Wanita Pilihan	01:30
20:15	Ikatan Cinta	01:30
21:45	Amanah Wali S6	01:45
23:30	Dunia Terbalik	01:00";

// bisa juga mungkin dengan cara ini : https://www.kodefungsi.com/fungsi/php/2c2d9fc40035d7856343173ad9c9a025/Cara-Menghitung-Jumlah-Kata-Pada-Kalimat-dan-Menguraikannya-Menjadi-Array-Menggunakan-Fungsi-str-word-count---Pada-Bahasa-Pemrograman-PHP

$closingParagraph1 = $i->getEnter2() . "Berikut link live streaming {$i->getAcaraTV1()} dan {$i->getAcaraTV2()} pada {$i->getTanggal()} {$i->getSaluran()}: {$i->getLink()}";
$closingParagraph2 = "Jadwal dapat berubah sesuai kebijakan saluran televisi, itulah jadwal acara TV yang akan tayang di {$i->getSaluran()} hari ini, {$i->getTanggal()} di Waktu Indonesia Barat (WIB).***";
