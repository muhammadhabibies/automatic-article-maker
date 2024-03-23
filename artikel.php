<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <title>Artikel</title>
</head>

<body class="bg-dark" style="line-height: 1.4;">
    <div class="container bg-secondary my-3">
        <div class="row d-flex">
            <div class="col-md-4 m-2 p-3 bg-warning bg-opacity-75">
                <div class="text-center p-2 mb-2 bg-secondary">
                    <label><b>Live Streaming Acara TV</b></label>
                </div>
                <?= $data[0] ?>
            </div>

            <div class="col-md-4 m-2 p-3 bg-warning bg-opacity-75">
                <div class="text-center p-2 mb-2 bg-secondary">
                    <label><b>2 Acara TV</b></label>
                </div>
                <?= $data[1] ?>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
