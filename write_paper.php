<?php include_once('data.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Txt File Form</title>
    <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: consolas;
            background-color: rgb(11, 33, 170);
        }

        .tinggi {
            height: 650px;
        }

        textarea {
            resize: none;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="container text-white mt-4">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="border border-2 p-2 tinggi">
                    <?php
                    $all_databases = [
                        // database
                        "testing" => [
                            // table
                            "saluran" => [
                                // column
                                "antv" => "ANTV",
                                "rcti" => "RCTI",
                                "transtv_trans7" => "TransTV dan Trans7",
                                "nettv_gtv" => "NET TV dan GTV"
                            ],
                            "date" => [ "dummy" ],
                            "content" => [ "dummy" ],
                            "antv" => [
                                "id" => 123,
                                "saluran" => "ANTV",
                                "acaraTV1" => "Gopi",
                                "acaraTV2" => "Balika Vadhu",
                                "acaraTV3" => "a",
                                "description" => "00.30 Merah Putih Peristiwa; 01.00",
                                "link" => "https://www.visionplus.id/watch/channel/12/antv?cnumb=12&utype=visitor"
                            ],
                            "promedia" => [
                                "id" => 123,
                                "pimred" => "SANTAI AJA -",
                                "baca_juga" => "-",
                                "content" => '',
                                "tanggal" => ''
                            ],
                            "rcti" => [
                                "id" => 123,
                                "saluran" => "RCTI",
                                "acaraTV1" => "Ikatan Cinta",
                                "acaraTV2" => "Putri Untuk Pangeran",
                                "acaraTV3" => "Amanah Wali S6",
                                "description" => "04.45 Seputar iNews Pagi; 06.00 Go Spot",
                                "link" => "https://www.rctiplus.com/tv/rcti"
                            ],
                            "TransTV_Trans7" => [
                                "id" => 123,
                                "saluran1" => "TransTV",
                                "saluran2" => "Trans7",
                                "live1" => "https://www.transtv.co.id/live",
                                "live2" => "https://www.transtv.co.id/live/trans7",
                                "description" => "05.00 Islam Itu Indah; 06.30 Insert Pagi",
                                "acaraTV1" => "Krim Malam", // ini yang diubah
                                "acaraTV2" => "Bikin Laper",
                                "acaraTV3" => "Makan Receh"
                            ],
                            "NET_GTV" => [
                                "id" => 123,
                                "saluran1" => "NET TV",
                                "saluran2" => "GTV",
                                "live1" => "https://www.netmedia.co.id/live-streaming",
                                "live2" => "https://www.rctiplus.com/tv/gtv",
                                "description" => "00.00 ONE Championship Warrior; 01.00 Comedy Night Live",
                                "acaraTV1" => "Elementary", // ini yang diubah
                                "acaraTV2" => "Biar Viral",
                                "acaraTV3" => "Hot Spot Viral"
                            ]
                        ]
                    ];

                    // // menampilkan seluruh isi dummy database (all_databases) ke dalam sebuah table
                    // // buat table
                    // echo "<table border='1' cellspacing='0' cellpadding='10' width='500px'/>";
                    // // ambil nama table
                    // $table = array_keys($all_databases);
                    // for ($i = 0; $i < count($all_databases); $i++) {
                    //     echo "<tr>" .
                    //         "<th colspan = '2'>" . strtoupper($table[$i]) . "</th>" .
                    //         "</tr>";
                    //     // mengambil isi data table (setiap column dan isinya)
                    //     foreach ($all_databases[$table[$i]] as $column => $dataColumn) {
                    //         // pengecekan apabila data column berisi array atau tidak
                    //         if (is_array($dataColumn) == false) {
                    //             echo "<tr>" .
                    //                 "<td>" . $column . "</td>" .
                    //                 "<td>" . $dataColumn . "</td>" .
                    //                 "</tr>";
                    //         } else if (is_array($dataColumn) == true) {
                    //             echo "<tr>" .
                    //                 "<td>" . $column . "</td>" .
                    //                 "<td>" . implode("<br/>", $dataColumn) . "</td>" .
                    //                 "</tr>";
                    //         }
                    //     }
                    // }

                    // buat variable sesuai data dari array database
                        // 1. mengambil nama
                            // == string nama database
                                foreach (array_keys($all_databases) as $nama_db) {
                                    ${"nm_db_" . $nama_db} = $nama_db;
                                }
                            // == string nama table dari database testing
                                foreach (array_keys($all_databases[$nm_db_testing]) as $nama_table) {
                                    ${"nm_table_" . $nama_table} = $nama_table;
                                }
                            // == string nama column dari database testing table antv
                                foreach (array_keys($all_databases[$nm_db_testing][$nm_table_antv]) as $nama_column) {
                                    ${"nm_column_" . $nama_column} = $nama_column;
                                }
                        // 2. mengambil value
                            // == string value dari nm_table_saluran sesuai nama_column-nya
                                foreach ($all_databases[$nm_db_testing][$nm_table_saluran] as $nama_column => $value) {
                                    ${"saluran_" . $nama_column} = $value;
                                }
                            // == string value dari nm_table_antv sesuai nama_column-nya
                                foreach ($all_databases[$nm_db_testing][$nm_table_antv] as $nama_column => $value) {
                                    ${"antv_" . $nama_column} = $value;
                                }

                    ?>

                    <!-- form isi data testing -->
                    <form  action="" method="post" class="p-1">
                        <div class="row mb-3">
                            <label for="input1" class="col-sm-3 col-form-label">Saluran</label>
                            <div class="col-sm-9">
                                <select name=<?= $nm_table_saluran; ?> class="form-select" aria-label="saluran">
                                    <?php foreach ($all_databases[$nm_db_testing][$nm_table_saluran] as $column => $value) : ?>
                                        <!-- ambil data column saluran -->
                                        <option><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input2" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="<?= $nm_table_date; ?>" required class="title" value=<?= date('Y-m-d'); ?> />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input3" class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="<?= $nm_table_content; ?>" class="form-control" id="input3" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input4" class="col-sm-3 col-form-label">Third TV Show</label>
                            <div class="col-sm-9">
                                <input type="text"  name="<?= $nm_column_acaraTV3; ?>" class="form-control" id="input4" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border border-2 p-2 tinggi overflow-auto">
                    <?php /*  source: belajarwebpedia.com  */
                    if (
                        // pengecekan apabila user belum mengisikan form program akan berhenti di if ini
                        !isset($_POST[$nm_table_saluran]) &&
                        !isset($_POST[$nm_table_date]) &&
                        !isset($_POST[$nm_table_content]) &&
                        !isset($_POST[$nm_column_acaraTV3])
                    ) {
                        // exit();
                        echo "Data form belum diisi";
                    } else {
                        // masukkan data dari form ke dalam database (belum)
                        // saluran
                        $replace_saluran_base         = [ $all_databases[$nm_db_testing][$nm_table_antv][$nm_column_saluran] ];
                        $replace_saluran_replacement  = [ trim($_POST[$nm_table_saluran]) ];
                        $replace_saluran              = array_replace($replace_saluran_base, $replace_saluran_replacement);
                        $replace_saluran_string       = implode(" ", $replace_saluran);
                        // acaraTV3
                        $replace_acaraTV3_base        = [ $all_databases[$nm_db_testing][$nm_table_antv][$nm_column_acaraTV3] ];
                        $replace_acaraTV3_replacement = [ trim($_POST[$nm_column_acaraTV3]) ];
                        $replace_acaraTV3             = array_replace($replace_acaraTV3_base, $replace_acaraTV3_replacement);
                        $replace_acaraTV3_string      = implode(" ", $replace_acaraTV3);
                        // content
                        $replace_content_base         = $all_databases[$nm_db_testing][$nm_table_content];
                        $replace_content_replacement  = [ trim($_POST[$nm_table_content]) ];
                        $replace_content              = array_replace($replace_content_base, $replace_content_replacement);
                        $replace_content_string       = implode(" ", $replace_content);
                        // date
                        $replace_date_base            = $all_databases[$nm_db_testing][$nm_table_date];
                        $replace_date_replacement     = [ dateIndonesia(date('l j F Y', strtotime($_POST['date']))) ];
                        $replace_date                 = array_replace($replace_date_base, $replace_date_replacement);
                        $replace_date_string          = implode(" ", $replace_date);

                        // deklarasikan data dari database ke dalam variable agar mudah dimanipulasi
                        $get_saluran     = $replace_saluran_string;
                        $get_description = $all_databases[$nm_db_testing][$nm_table_antv][$nm_column_description];
                        $get_acaraTV1    = $all_databases[$nm_db_testing][$nm_table_antv][$nm_column_acaraTV1];
                        $get_acaraTV2    = $all_databases[$nm_db_testing][$nm_table_antv][$nm_column_acaraTV2];
                        $get_acaraTV3    = $replace_acaraTV3_string;
                        $get_link        = $all_databases[$nm_db_testing][$nm_table_antv][$nm_column_link];
                        $get_baca_juga   = $all_databases[$nm_db_testing][$nm_table_promedia]['baca_juga'];
                        $get_pimred      = $all_databases[$nm_db_testing][$nm_table_promedia]['pimred'];
                        $get_date        = $replace_date_string; // 2022-06-23
                        $get_content     = $replace_content_string;

                        // manipulasi data content dari mnc
                        $explode_content = explode("\t", $get_content);
                        for ($index1 = -1; $index1 < str_word_count($get_content); $index1++) {
                            $index1 = $index1 + 1;
                            $index2 = $index1 + 1;
                            if (isset($explode_content[$index1]) && isset($explode_content[$index2])) {
                                // menghapus array string yg lokasinya diantara 0 dan -6 lalu 0 dan 0
                                $jamTayang = substr_replace($explode_content[$index1], '', 0, -6);
                                $acaraTV = substr_replace($explode_content[$index2], '', 0, 0);
                                $isi[$index1] = "$jamTayang $acaraTV\n";
                            } else {
                                break;
                            }
                        }
                        $array_to_string = implode($isi);

                        // heredoc php = https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
                        $template = <<<EOD
                        C : Live Streaming $get_acaraTV1 dan $get_acaraTV2 Cek di Jadwal $get_saluran Hari Ini, $get_date. ($get_saluran)
                        
                        T : jadwal, acara TV, $get_saluran, hari ini, $get_date, link, live streaming, $get_acaraTV1, $get_acaraTV2, $get_acaraTV3
                        
                        D : Ini jadwal acara TV dan Live Streaming $get_saluran hari ini, $get_date. Jadwal Saluran $get_saluran: $get_description
                        
                        Live Streaming $get_acaraTV1 dan $get_acaraTV2, Cek Jadwal Acara TV $get_saluran Hari Ini, $get_date: $get_acaraTV3
                        
                        $get_pimred Berikut link live streaming $get_acaraTV1 dan $get_acaraTV2 di jadwal acara TV $get_saluran hari ini, $get_date.
                        
                        Apa saja jadwal acara TV menarik yang akan tayang di $get_saluran hari ini, pada $get_date?
                        
                        Salah satu jadwal acara TV di $get_saluran hari ini, pada $get_date adalah $get_acaraTV1, $get_acaraTV3 dan $get_acaraTV2.
                        
                        $get_baca_juga
                        
                        Untuk link live streaming $get_saluran $get_acaraTV1 dan $get_acaraTV2 dapat diakses diakhir artikel.
                        
                        Berikut jadwal acara TV $get_saluran hari ini, $get_date di Waktu Indonesia Barat (WIB) yang telah dirangkum Santaiaja.co dari laman resmi $get_saluran:
                        
                        Jadwal Saluran $get_saluran
                        
                        $array_to_string
                        $get_baca_juga
                        
                        Berikut link live streaming $get_acaraTV1 dan $get_acaraTV2 pada $get_date $get_saluran: $get_link
                        
                        Jadwal dapat berubah sesuai kebijakan saluran televisi, itulah jadwal acara TV yang akan tayang di $get_saluran hari ini, $get_date di Waktu Indonesia Barat (WIB).***
                        EOD;

                        // https://ojs.cbn.ac.id/index.php/jukanti/announcement/view/4
                        // link aturan penulisan IEEE

                        // CREATE -> membuat file txt sesuai dengan perwakilan satu variable data di atas
                        $get_nama_file_txt = dateTxt($get_date) . " $get_saluran $get_acaraTV1, $get_acaraTV2, $get_acaraTV3.txt";
                        $file = fopen("write_paper_output_form/$get_nama_file_txt", "w");
                        fwrite($file, $template);
                        fclose($file);

                        // READ -> membuatkan link untuk file yang telah dibuat
                        if (!empty($get_content)) {
                            echo "Link file txt yang telah dibuat : <a href='write_paper_output_form/$get_nama_file_txt' target='_blank'> $get_nama_file_txt </a><br><hr>";
                        } else {
                            echo "";
                        }

                        // READ -> membuka dan menampilkan isi dari link file txt yang telah dibuat
                        $openFile = fopen("write_paper_output_form/$get_nama_file_txt", "r");
                        //Output lines until EOF is reached
                        while (!feof($openFile)) {
                            $line = fgets($openFile);
                            echo $line . "<br>";
                        }
                        fclose($openFile);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php 

// fungsi untuk mengganti format date sql menjadi indonesia
function dateIndonesia($tanggal)
{
    $hari = [
        'Sunday' => 'Minggu', 'Monday' => 'Senin', 'Tuesday' => 'Selasa', 'Wednesday' => 'Rabu', 'Thursday' => 'Kamis', 'Friday' => 'Jumat', 'Saturday' => 'Sabtu'
    ];
    $bulan = [
        'January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret', 'April' => 'April', 'May' => 'Mei', 'June' => 'Juni', 'July' => 'Juli', 'August' => 'Agustus', 'September' => 'September', 'October' => 'Oktober', 'November' => 'November', 'December' => 'Desember'
    ];
    $pecahkan = explode(' ', $tanggal);
    // variable pecahkan 0 = hari
    // variable pecahkan 1 = tanggal
    // variable pecahkan 2 = bulan
    // variable pecahkan 3 = tahun
    return $hari[$pecahkan[0]] . ' ' . $pecahkan[1] . ' ' . $bulan[$pecahkan[2]] . ' ' . $pecahkan[3];
}

function dateTxt($tanggal)
{
    $hari = [
        'Minggu' => '7', 'Senin' => '1', 'Selasa' => '2', 'Rabu' => '3', 'Kamis' => '4', 'Jumat' => '5', 'Sabtu' => '6'
    ];
    $bulan = [
        'Januari' => 'Ja', 'Februari' => 'F', 'Maret' => 'Ma', 'April' => 'Ap', 'Mei' => 'Me', 'Juni' => 'Jn', 'Juli' => 'Jl', 'Agustus' => 'Ag', 'September' => 'S', 'Oktober' => 'O', 'November' => 'N', 'Desember' => 'D'
    ];
    $pecahkan = explode(' ', $tanggal);
    // variable pecahkan 0 = hari
    // variable pecahkan 1 = tanggal
    // variable pecahkan 2 = bulan
    // variable pecahkan 3 = tahun
    return $pecahkan[1] . ' ' . $bulan[$pecahkan[2]] . ' ' . substr($pecahkan[3], 2) . ' ' . $hari[$pecahkan[0]];
}

?>