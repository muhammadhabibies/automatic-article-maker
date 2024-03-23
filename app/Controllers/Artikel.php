<?php

namespace app\Controllers;

interface Artikel
{
    public function __construct($tanggal, $saluran, $acaraTV = [], $description, $link, $data);
    public function getArticle();
}