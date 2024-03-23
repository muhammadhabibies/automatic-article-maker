<?php //require_once 'data.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Txt File Form</title>
    <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.min.css">
</head>

<body style="background-color: rgb(11, 33, 170); color: #fff;">
    <?php
    $dummyDatabase = [
        // database
        'testing' => [
            // table
            'saluran' => [
                // column
                'antv' => 'ANTV',
                'rcti' => 'RCTI',
                'transtv_trans7' => 'TransTV dan Trans7',
                'nettv_gtv' => 'NET TV dan GTV',
            ],
            'date' => ['dummy'],
            'background' => ['dummy'],
            'IEEE' => [
                'id' => 123,
                'saluran' => 'ANTV',
                'acaraTV1' => 'Gopi',
                'acaraTV2' => 'Balika Vadhu',
                'title' => 'a',
                'description' => '00.30 Merah Putih Peristiwa; 01.00',
                'link' => 'https://www.visionplus.id/watch/channel/12/antv?cnumb=12&utype=visitor',
            ],
        ],
    ];
    
    // buat variable sesuai data dari array database
    // 1. mengambil nama (value type => string)
    // == nama database
    foreach (array_keys($dummyDatabase) as $nama_db) {
        ${'nm_db_' . $nama_db} = $nama_db;
    }
    // == nama table dari database testing
    foreach (array_keys($dummyDatabase[$nm_db_testing]) as $nama_table) {
        ${'nm_table_' . $nama_table} = $nama_table;
    }
    // == nama column dari database testing table IEEE
    foreach (array_keys($dummyDatabase[$nm_db_testing][$nm_table_IEEE]) as $nama_column) {
        ${'nm_column_' . $nama_column} = $nama_column;
    }
    // 2. mengambil value
    // == string value dari nm_table_saluran sesuai nama_column-nya
    foreach ($dummyDatabase[$nm_db_testing][$nm_table_saluran] as $nama_column => $value) {
        ${'saluran_' . $nama_column} = $value;
    }
    // == string value dari nm_table_IEEE sesuai nama_column-nya
    foreach ($dummyDatabase[$nm_db_testing][$nm_table_IEEE] as $nama_column => $value) {
        ${'IEEE_' . $nama_column} = $value;
    }
    
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 border">
                <!-- form isi data testing -->
                <form action="" method="post">
                    <table border="0" cellspacing="0" cellpadding="3">
                        <tr>
                            <td class="col1">Saluran</td>
                            <td class="col2">
                                <select name=<?= $nm_table_saluran ?> class="title">
                                    <?php foreach ($dummyDatabase[$nm_db_testing][$nm_table_saluran] as $column => $value) : ?>
                                    <!-- ambil data column saluran -->
                                    <option><?= $value ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col1">Date</td>
                            <td class="col2"><input type="date" name="<?= $nm_table_date ?>" required
                                    class="title" value=<?= date('Y-m-d') ?> /></td>
                        </tr>
                        <!-- title -->
                        <tr>
                            <td class="col1">Title</td>
                            <td class="col2"><input type="text" name="<?= $nm_column_title ?>" required
                                    class="title"></td>
                        </tr>
                        <!-- abstract -->
                        <tr>
                            <td class="col1" valign="top">Background</td>
                            <td class="col2">
                                <textarea name="<?= $nm_table_background ?>" required class="content"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class=" col1"></td>
                            <td class="col2"><input type="submit" value="Save"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="col-6 border">
                <?php
                if (
                    // pengecekan apabila user belum mengisikan form program akan berhenti di if ini
                    !isset($_POST[$nm_table_saluran]) &&
                    !isset($_POST[$nm_table_date]) &&
                    !isset($_POST[$nm_table_background]) &&
                    !isset($_POST[$nm_column_title])
                ) {
                    // exit();
                    echo 'Data form belum diisi';
                } else {
                    // masukkan data dari form ke dalam database
                    // saluran
                    $replace_saluran_base = [$dummyDatabase[$nm_db_testing][$nm_table_IEEE][$nm_column_saluran]];
                    $replace_saluran_replacement = [trim($_POST[$nm_table_saluran])];
                    $replace_saluran = array_replace($replace_saluran_base, $replace_saluran_replacement);
                    $replace_saluran_string = implode(' ', $replace_saluran);
                    // title
                    $replace_title_base = [$dummyDatabase[$nm_db_testing][$nm_table_IEEE][$nm_column_title]];
                    $replace_title_replacement = [trim($_POST[$nm_column_title])];
                    $replace_title = array_replace($replace_title_base, $replace_title_replacement);
                    $replace_title_string = implode(' ', $replace_title);
                    // background
                    $replace_background_base = $dummyDatabase[$nm_db_testing][$nm_table_background];
                    $replace_background_replacement = [trim($_POST[$nm_table_background])];
                    $replace_background = array_replace($replace_background_base, $replace_background_replacement);
                    $replace_background_string = implode(' ', $replace_background);
                    // date
                    $replace_date_base = $dummyDatabase[$nm_db_testing][$nm_table_date];
                    $replace_date_replacement = [dateIndonesia(date('l j F Y', strtotime($_POST['date'])))];
                    $replace_date = array_replace($replace_date_base, $replace_date_replacement);
                    $replace_date_string = implode(' ', $replace_date);
                
                    // deklarasikan data dari database ke dalam variable agar mudah dimanipulasi
                    $get_saluran = $replace_saluran_string;
                    $get_description = $dummyDatabase[$nm_db_testing][$nm_table_IEEE][$nm_column_description];
                    $get_acaraTV1 = $dummyDatabase[$nm_db_testing][$nm_table_IEEE][$nm_column_acaraTV1];
                    $get_acaraTV2 = $dummyDatabase[$nm_db_testing][$nm_table_IEEE][$nm_column_acaraTV2];
                    $get_acaraTV3 = $replace_title_string;
                    $get_link = $dummyDatabase[$nm_db_testing][$nm_table_IEEE][$nm_column_link];
                    $get_baca_juga = $dummyDatabase[$nm_db_testing][$nm_table_promedia]['baca_juga'];
                    $get_pimred = $dummyDatabase[$nm_db_testing][$nm_table_promedia]['pimred'];
                    $get_date = $replace_date_string; // 2022-06-23
                    $get_background = $replace_background_string;
                
                    // manipulasi data content dari mnc
                    $explode_content = explode("\t", $get_background);
                    for ($index1 = -1; $index1 < str_word_count($get_background); $index1++) {
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
                    $title
                    EOD;
                
                    // https://ojs.cbn.ac.id/index.php/jukanti/announcement/view/4
                    // link aturan penulisan IEEE
                
                    // CREATE -> membuat file txt sesuai dengan perwakilan satu variable data di atas
                    $get_nama_file_txt = dateTxt($get_date) . " $get_saluran $get_acaraTV1, $get_acaraTV2, $get_acaraTV3.txt";
                    $file = fopen("output-create-and-read-txt-file-form/$get_nama_file_txt", 'w');
                    fwrite($file, $template);
                    fclose($file);
                
                    // READ -> membuatkan link untuk file yang telah dibuat
                    if (!empty($get_background)) {
                        echo "Link file txt yang telah dibuat : <a href='output/$get_nama_file_txt' target='_blank'> $get_nama_file_txt </a><br><hr>";
                    } else {
                        echo '';
                    }
                
                    // READ -> membuka dan menampilkan isi dari link file txt yang telah dibuat
                    $openFile = fopen("output-create-and-read-txt-file-form/$get_nama_file_txt", 'r');
                    //Output lines until EOF is reached
                    while (!feof($openFile)) {
                        $line = fgets($openFile);
                        echo $line . '<br>';
                    }
                    fclose($openFile);
                }
                ?>
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
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu',
    ];
    $bulan = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember',
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
        'Minggu' => '7',
        'Senin' => '1',
        'Selasa' => '2',
        'Rabu' => '3',
        'Kamis' => '4',
        'Jumat' => '5',
        'Sabtu' => '6',
    ];
    $bulan = [
        'Januari' => 'Ja',
        'Februari' => 'F',
        'Maret' => 'Ma',
        'April' => 'Ap',
        'Mei' => 'Me',
        'Juni' => 'Jn',
        'Juli' => 'Jl',
        'Agustus' => 'Ag',
        'September' => 'S',
        'Oktober' => 'O',
        'November' => 'N',
        'Desember' => 'D',
    ];
    $pecahkan = explode(' ', $tanggal);
    // variable pecahkan 0 = hari
    // variable pecahkan 1 = tanggal
    // variable pecahkan 2 = bulan
    // variable pecahkan 3 = tahun
    return $pecahkan[1] . ' ' . $bulan[$pecahkan[2]] . ' ' . substr($pecahkan[3], 2) . ' ' . $hari[$pecahkan[0]];
}

?>
