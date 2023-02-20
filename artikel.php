<?php include_once('data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <title>Artikel</title>
    <style>
        body {
            line-height: 1.4;
        }
    </style>
</head>

<body class="bg-black">
    <div class="container d-md-flex bg-secondary my-3 p-0">
        <div class="col-md-4 m-2 p-3 bg-warning bg-opacity-75">
            <div class="text-center p-2 mb-2 bg-secondary">
                <label><b>Live Streaming Acara TV</b></label>
            </div>
            <p><?= $caption; ?></p>
            <p><?= $tag; ?></p>
            <p><?= $description; ?></p>
            <p><?= $title; ?></p>
            <p><b><?= $open; ?></b><?= $paragraph1; ?></p>
            <p><?= $paragraph2; ?></p>
            <p><?= $paragraph3; ?></p>
            <p><?= $paragraph4; ?></p>
            <p><?= $paragraph5; ?></p>
            <p><b><?= $paragraph6; ?></b></p>
            <p>
                <?php
                $pecah = explode("\t", $takeArtikel); // memotong teks menjadi sebuah array dengan mengambil pembaginya, kalo aku pembaginya \t, sumber : http://yuu-sharing.blogspot.com/2014/09/cara-memecah-teks-dengan-explode-php.html
                $jumlah = str_word_count($takeArtikel);
                for ($nomor1 = -1; $nomor1 < $jumlah; $nomor1++) {
                    $nomor1 = $nomor1 + 1;
                    $nomor2 = $nomor1 + 1;
                    if (isset($pecah[$nomor1]) && isset($pecah[$nomor2])) {
                        $juragan = substr_replace($pecah[$nomor1], '', 0, -6); // menghapus array string yg lokasinya diantara 0 dan -6
                        $juragan2 = substr_replace($pecah[$nomor2], '', 0, 0);
                    } else {
                        break;
                    }
                    echo $juragan . " " . $juragan2 . "<br/><br/>";
                }
                ?>
            </p>
            <p><?= $closingParagraph1; ?></p>
            <p><?= $closingParagraph2; ?></p>
            <?php
            // require_once 'hungryClass.php';
            // if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // 	$newSearch = new hungryClass();
            // 	$newSearch->searchMeal();
            // 	exit();
            // }
            ?>
            <!-- <form action="<? //echo $_SERVER['PHP_SELF']
                                ?>" method="post" id="searchMealForm">
				<input type="search" size="35" placeholder="What Food Are you looking for?" id="mealName" class="meal"/>
				<input type="search" placeholder="City Area" id="mealLocation" class="meal">
				<input type="submit" value="Satisfy Me" id="findMeal" />
			</form> -->
        </div>
        <div class="col-md-4 m-2 p-3  bg-warning bg-opacity-75">
            <div class="text-center p-2 mb-2 bg-secondary">
                <label><b>2 Acara TV</b></label>
            </div>
            <p><?= $acaraTV_live; ?></p>
            <p><?= $acaraTV_tag; ?></p>
            <p><?= $acaraTV_description; ?></p>
            <p><?= $acaraTV_title; ?></p>
            <p><b><?= $acaraTV_open; ?></b><?= $acaraTV_sentence1; ?></p>
            <p><?= $acaraTV_sentence2; ?></p>
            <p><?= $acaraTV_sentence3; ?></p>
            <p><?= $acaraTV_sentence4; ?></p>
            <p><b><?= $acaraTV_sentence5; ?></b></p>
            <p>
                <?php
                $pecah = explode("\t", $acaraTV_take_article1);
                $jumlah = str_word_count($acaraTV_take_article1);
                for ($nomor1 = -1; $nomor1 < $jumlah; $nomor1++) {
                    $nomor1 = $nomor1 + 1;
                    $nomor2 = $nomor1 + 1;
                    if (isset($pecah[$nomor1]) && isset($pecah[$nomor2])) {
                        $juragan = substr_replace($pecah[$nomor1], '', 0, -6); // menghapus array string yg lokasinya diantara 0 dan -6
                        $juragan2 = substr_replace($pecah[$nomor2], '', 0, 0);
                    } else {
                        break;
                    }
                    echo $juragan . " " . $juragan2 . "<br/><br/>";
                }
                ?>
            </p>
            <p><b><?= $acaraTV_sentence6; ?></b></p>
            <p>
                <?php
                $pecah = explode("\t", $acaraTV_take_article2);
                $jumlah = str_word_count($acaraTV_take_article2);
                for ($nomor1 = -1; $nomor1 < $jumlah; $nomor1++) {
                    $nomor1 = $nomor1 + 1;
                    $nomor2 = $nomor1 + 1;
                    if (isset($pecah[$nomor1]) && isset($pecah[$nomor2])) {
                        $juragan = substr_replace($pecah[$nomor1], '', 0, -6); // menghapus array string yg lokasinya diantara 0 dan -6
                        $juragan2 = substr_replace($pecah[$nomor2], '', 0, 0);
                    } else {
                        break;
                    }
                    echo $juragan . " " . $juragan2 . "<br/><br/>";
                }
                ?>
            </p>
            <p><?= $acaraTV_closing_paragraph; ?></p>
        </div>
    </div>
    
    <script src="bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>