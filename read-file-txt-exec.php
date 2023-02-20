<!DOCTYPE html>
<html>

<body>

    <?php
    $file = fopen("read-file-txt-data.txt", "r");
    //Output lines until EOF is reached
    while (!feof($file)) {
        $line = fgets($file);
        echo $line . "<br>";
    }

    fclose($file);
    ?>

</body>

</html>