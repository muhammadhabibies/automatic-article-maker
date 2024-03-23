<?php

require_once "app/init.php";

use app\Controllers\LiveStreaming;
use app\Controllers\Content2AcaraTV;

// $tanggal = "Senin 18 Juli 2022";
$tanggal = 'Selasa 19 Juli 2022';
// $tanggal = "Rabu 20 Juli 2022";
// $tanggal = "Kamis 21 Juli 2022";
// $tanggal = "Jumat 22 Juli 2022";
// $tanggal = "Sabtu 23 Juli 2022";
// $tanggal = "Minggu 24 Juli 2022";

// ANTV
// Sn : Kulfi / Ashoka
// Sl : Suami Pengganti / Berbagi Suami
// Rb : TMTM (Terpaksa Menikahi Tuan Muda) / Kulfi / Mata Batin
// Km : Silsila / Sufiyana ======== Suami Pengganti / Gangaa
// Jm : Kulfi / Peti Mati / Kafir / TMTM
// Sb : Menolak Talak / Karma Baik / The Andarans / Kekasih Halal / Ashoka
// Mg : Silsila / TMTM / Kopi Pas Tenan
// Default : (Gopi, Balika Vadhu, Silsila)
// RCTI
// Sn : Tukang Ojek Pengkolan / Dunia Terbalik
// Sl : Putri Untuk Pangeran / Tukang Ojek Pengkolan / Dunia Terbalik
// Rb : Putri Untuk Pangeran / Dunia Terbalik
// Km : Putri Untuk Pangeran / Dunia Terbalik
// Jm : Putri Untuk Pangeran / Dunia Terbalik
// Sb : Amanah Wali S5
// Mg : Amanah Wali S5
// Default : (Ikatan Cinta, Putri Untuk Pangeran, Amanah Wali S6)
// cek dulu apabila default acara tv tidak ada di jadwal kali ini
$i = new LiveStreaming(
    $tanggal,
    // ~~~~~~~~~~~~~~~~~~~ ANTV
    // note: acaraTV ganti yang ke-3
    'ANTV',
    ['Gopi', 'Balika Vadhu', 'Cakrawala'],
    '00.30 Merah Putih Peristiwa; 01.00',
    'https://www.visionplus.id/watch/channel/12/Antv?cnumb=12&utype=visitor',
    // ~~~~~~~~~~~~~~~~~~~ end ANTV
    // ~~~~~~~~~~~~~~~~~~~ RCTI
    // note: acaraTV ganti yang ke-2
    // 'RCTI',
    // ['Ikatan Cinta', 'Dunia Terbalik', 'Amanah Wali S6'],
    // '04.45 Seputar iNews Pagi; 06.00 Go Spot',
    // 'https://www.rctiplus.com/tv/rcti',
    // ~~~~~~~~~~~~~~~~~~~ end RCTI
    "02:00	Saur Sepuh 2: Pesanggrahan...	02:00
    04:00	Senyum Iman	00:30
    04:30	Shy Shy Cat	00:30
    05:00	Cakrawala	00:30
    05:30	Kasus Viral	01:00
    06:30	Panji Sang Penakluk	01:00
    07:30	Folbec	01:00
    08:30	Masquerade	01:00
    09:30	Prem Ratan Dhan Payo	03:30
    13:00	Takdir Lonceng Cinta	02:30
    15:30	Cinta Untuk Guddan	02:30
    18:00	Bunga Kembar Di Tepi Jalan	01:00
    19:00	Pusaka Penyebar Maut	02:00
    21:00	The Owl Vs Bambo	02:00
    23:00	Ikut Aku Ke Neraka	02:30",
);

// TransTV dan Trans7
// Sn : Lapor Pak!
// Sl : Anak Sekolah
// Rb : Bioskop TransTV
// Km : Krim Malam / Dunia Punya Cerita
// Jm : Klinik Tendean / Misteri Dunia
// Sb : Dewan Curhat / Warkop / The Police / The Hotman
// Mg : BTS / Terkait MotoGP
// Saran Default : (Krim Malam, Bikin Laper, Makan Receh)
// NET TV dan GTV
// Sn : Anak Jalanan A New Beginning
// Sl : Film / Legenda Sang Penunggu / Dunia Kiara / Bukan Cinderella Biasa
// Rb : Film / Take It Or Leave It / Police University / Jatanras
// Km : Film / Elementary / Touch Your Heart / Bulletproof / Detective Conan / Kurulus Osman 2
// Jm : Film / Festival Komedi / D-Tox / Extraordinary You / Big Movies Platinum
// Sb : Film / Tonight Show / BRIT Awards 2022
// Mg : IPA dan IPS
// Saran Default : (Elementary, Biar Viral, Hot Spot Viral)
// cek dulu apabila default acara tv tidak ada di jadwal kali ini
// note: acaraTV ganti yang ke-1 untuk kedua saluran
$j = new Content2AcaraTV(
    // ~~~~~~~~~~~~~~~~~~~ TransTV dan Trans7
    $tanggal,
    ['TransTV', 'Trans7'],
    ['Krim Malam', 'Bikin Laper', 'Makan Receh'],
    '05.00 Islam Itu Indah; 06.30 Insert Pagi',
    ['https://www.transtv.co.id/live', 'https://www.transtv.co.id/live/trans7'],
    // ~~~~~~~~~~~~~~~~~~~ end TransTV dan Trans7
    // ~~~~~~~~~~~~~~~~~~~ NET TV dan GTV
    // ["NET TV", "GTV"],
    // ["Anak Jalanan A New Beginning", "Biar Viral", "Hot Spot Viral"],
    // "00.00 ONE Championship Warrior; 01.00 Comedy Night Live",
    // ["https://www.netmedia.co.id/live-streaming", "https://www.rctiplus.com/tv/gtv"],
    // ~~~~~~~~~~~~~~~~~~~ end NET TV dan GTV
    [
        "00:30	Int'l Boxing: Fight Sports	00:30
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
23:30	Jatanras	01:00",
        "06:30	Obsesi (L)	00:30
07:00	SpongeBob SquarePants Movie	03:00
10:00	Buletin iNews Siang (L)	01:00
11:00	SpongeBob SquarePants Movie	01:30
12:30	SpongeBob SquarePants Movie	02:30
15:00	SpongeBob SquarePants Movie	02:00
17:00	Kisah Viral	01:00
18:00	Superdeal Indonesia	01:30
19:30	IPA & IPS	02:00
21:30	Anak Jalanan A New Beginning	02:00
23:30	Three Billboards Outside...	01:00",
    ],
);

$data = [
    $i->getArticle(),
    $j->getArticle(),
];
