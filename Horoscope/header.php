<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" http-equiv="Refresh" content="25;URL=./../info/info.php">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>デジタイサイネージ</title>
    <link rel="stylesheet" href="style.css">

    <script>
        $(function() {
            // 一旦hide()で隠してフェードインさせる
            $('div').hide().fadeIn('slow');
        });

        function out() {
            $('div').fadeOut('slow');
        };

        setTimeout("out()", 25000);
    </script>

    <style>
        html {
            touch-action: none;
        }
    </style>

</head>

<body>