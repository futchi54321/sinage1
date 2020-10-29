<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" http-equiv="Refresh" content="25;URL=./../timetable/timetable.php">
    <title>天気</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="opp.css">

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

<body>
    <div class="cp_cont">
        <div class="cp_offcm01"><input type="checkbox" id="cp_toggle01"><label for="cp_toggle01"><span></span></label>
            <div class="cp_menu">
                <ul>
                    <li><a href="./../info/info.php">お知らせ</a></li>
                    <li><a href="./../weather/weather.php">天気</a></li>
                    <li><a href="./../timetable/timetable.php">時間割</a></li>
                    <li><a href="./../Horoscope/horoscopes_menu.php">占い</a></li>
                </ul>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <div>