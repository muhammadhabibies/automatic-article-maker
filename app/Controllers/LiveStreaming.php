<?php

namespace app\Controllers;

class LiveStreaming extends Article implements Artikel
{
    private $saluran;
    private $acaraTV;
    private $description;
    private $link;
    private $data;

    public function __construct($tanggal, $saluran, $acaraTV = [], $description, $link, $data)
    {
        parent::__construct($tanggal);
        $this->saluran = $saluran;
        $this->acaraTV = $acaraTV;
        $this->description = $description;
        $this->link = $link;
        $this->data = $data;
    }

    public function getArticle()
    {
        $articleText = implode(Article::formatData($this->data));
        $date = parent::getTanggal();
        $open = Article::OPEN;

        return <<<FORMAT
        <p>C : Live Streaming {$this->acaraTV[0]} dan {$this->acaraTV[1]} Cek di Jadwal {$this->saluran} Hari Ini, {$date}. ({$this->saluran})</p>

        <p>T : jadwal, acara TV, {$this->saluran}, hari ini, {$date}, link, live streaming, {$this->acaraTV[0]}, {$this->acaraTV[1]}, {$this->acaraTV[2]}</p>

        <p>D : Ini jadwal acara TV dan Live Streaming {$this->saluran} hari ini, {$date}. Jadwal Saluran {$this->saluran}: {$this->description}</p>

        <p>Live Streaming {$this->acaraTV[0]} dan {$this->acaraTV[1]}, Cek Jadwal Acara TV {$this->saluran} Hari Ini, {$date}: {$this->acaraTV[2]}<p>

        <p><b>{$open}</b>Berikut link live streaming {$this->acaraTV[0]} dan {$this->acaraTV[1]} di jadwal acara TV {$this->saluran} hari ini, {$date}.</p>

        <p>Apa saja jadwal acara TV menarik yang akan tayang di {$this->saluran} hari ini, pada {$date}?</p>

        <p>Salah satu jadwal acara TV di {$this->saluran} hari ini, pada {$date} adalah {$this->acaraTV[0]}, {$this->acaraTV[2]} dan {$this->acaraTV[1]}.</p>

        <p>Untuk link live streaming {$this->saluran} {$this->acaraTV[0]} dan {$this->acaraTV[1]} dapat diakses diakhir artikel.<p>

        <p>Berikut jadwal acara TV {$this->saluran} hari ini, {$date} di Waktu Indonesia Barat (WIB) yang telah dirangkum Santaiaja.co dari laman resmi {$this->saluran}:<p>

        <p><b>Jadwal Saluran {$this->saluran}</b></p>

        <p>{$articleText}</p>

        <p>Berikut link live streaming {$this->acaraTV[0]} dan {$this->acaraTV[1]} pada {$date} {$this->saluran}: {$this->link}</p>

        <p>Jadwal dapat berubah sesuai kebijakan saluran televisi, itulah jadwal acara TV yang akan tayang di {$this->saluran} hari ini, {$date} di Waktu Indonesia Barat (WIB).***</p>
        FORMAT;
    }
}
