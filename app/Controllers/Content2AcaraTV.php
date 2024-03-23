<?php

namespace app\Controllers;

class Content2AcaraTV extends Article
{
    private $saluran;
    private $acaraTV;
    private $description;
    private $live;
    private $data;

    public function __construct($tanggal, $saluran = [], $acaraTV = [], $description, $live = [], $data = [])
    {
        parent::__construct($tanggal);
        $this->saluran = $saluran;
        $this->acaraTV = $acaraTV;
        $this->description = $description;
        $this->live = $live;
        $this->data = $data;
    }

    public function getArticle()
    {
        $articleText1 = implode(Article::formatData($this->data[0]));
        $articleText2 = implode(Article::formatData($this->data[1]));
        $date = parent::getTanggal();
        $open = Article::OPEN;

        return <<<FORMAT
        <p>Live Streaming :<br>- {$this->saluran[0]} : {$this->live[0]}<br>- {$this->saluran[1]} : {$this->live[1]}</p>

        <p>T : jadwal, acara TV, {$this->saluran[0]}, {$this->saluran[1]}, hari ini, {$date}, {$this->acaraTV[0]}</p>

        <p>D : Ini jadwal acara TV {$this->saluran[0]} dan {$this->saluran[1]} hari ini, {$date}. Jadwal Saluran {$this->saluran[0]}: {$this->description}</p>

        <p>Jadwal Acara TV {$this->saluran[0]} dan {$this->saluran[1]} Hari Ini, {$date}: Ada {$this->acaraTV[0]}</p>

        <p><b>{$open}</b>Berikut jadwal acara TV {$this->saluran[0]} dan {$this->saluran[1]} hari ini, {$date}.</p>

        <p>Apa saja jadwal acara TV menarik yang akan tayang di {$this->saluran[0]} dan {$this->saluran[1]} hari ini, pada {$date}?</p>

        <p>Salah satu jadwal acara TV di {$this->saluran[0]} dan {$this->saluran[1]} hari ini, pada {$date} adalah {$this->acaraTV[1]}, {$this->acaraTV[0]} dan {$this->acaraTV[2]}.</p>

        <br><br><p>Berikut jadwal acara TV di {$this->saluran[0]} dan {$this->saluran[1]} hari ini, {$date} di Waktu Indonesia Barat (WIB) yang telah dirangkum Santaiaja.co dari vidio.com:</p>

        <p><b>Jadwal Saluran {$this->saluran[0]}</b></p>

        <p>{$articleText1}</p>

        <br><br><p><b>Jadwal Saluran {$this->saluran[1]}</b></p>

        <p>{$articleText2}</p>

        <p>Jadwal dapat berubah sesuai kebijakan saluran televisi, itulah jadwal acara TV yang akan tayang di {$this->saluran[0]} dan {$this->saluran[1]} hari ini, {$date}.***</p>
        FORMAT;
    }
}
