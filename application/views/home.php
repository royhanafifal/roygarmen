<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home RoyGarmen</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 20px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid #85e0e0;
            border-radius: 4px;
            box-sizing: border-box;
        }
        }
    </style>
</head>
<body class="container">
    <h2>Tracking Order</h2>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <form action="<?php echo site_url('home/search')?>" action="GET">
        <input name="kode_order" type="text" placeholder="Masukkan Kode Pesananmu Disini">
    </form>
</body>
</html>