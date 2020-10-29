<?php require 'Horoscope.php'; ?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" http-equiv="Refresh" content="25;URL=./../info/info.php">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="css/hover.css" rel="stylesheet" media="all">
        <link href="css/bg.css" rel="stylesheet">
        <link href="css/humburger.css" rel="stylesheet">
        <title>占いメニュー</title>

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
        <?php
        echo '<div class="iti">' . $myrankings1 . '</div>';

        echo '<div class="ni">' . $myrankings2 . '</div>';

        echo '<div class="san">' . $myrankings3 . '</div>';

        echo '<div class="si">' . $myrankings4 . '</div>';

        echo '<div class="go">' . $myrankings5 . '</div>';

        echo '<div class="roku">' . $myrankings6 . '</div>';

        echo '<div class="siti">' . $myrankings7 . '</div>';

        echo '<div class="hati">' . $myrankings8 . '</div>';

        echo '<div class="kyuu">' . $myrankings9 . '</div>';

        echo '<div class="juu">' . $myrankings10 . '</div>';

        echo '<div class="juuiti">' . $myrankings11 . '</div>';

        echo '<div class="juuni">' . $myrankings12 . '</div>';

        ?>

        <style>
                .iti {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 313px;
                        margin-top: 300px;
                        z-index: 100;
                }

                .ni {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 728px;
                        margin-top: 300px;
                        z-index: 100;
                }

                .san {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 1120px;
                        margin-top: 300px;
                        z-index: 100;
                }

                .si {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 1528px;
                        margin-top: 300px;
                        z-index: 100;
                }

                .go {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 313px;
                        margin-top: 610px;
                        z-index: 100;
                }

                .roku {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 737px;
                        margin-top: 612px;
                        z-index: 100;
                }

                .siti {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 1121px;
                        margin-top: 610px;
                        z-index: 100;
                }

                .hati {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 1520px;
                        margin-top: 610px;
                        z-index: 100;
                }

                .kyuu {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 307px;
                        margin-top: 920px;
                        z-index: 100;
                }

                .juu {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 715px;
                        margin-top: 920px;
                        z-index: 100;
                }

                .juuiti {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 1126px;
                        margin-top: 921px;
                        z-index: 100;
                }

                .juuni {
                        position: absolute;
                        color: #324569;
                        font-size: 30px;
                        margin-left: 1530px;
                        margin-top: 920px;
                        z-index: 100;
                }
        </style>

        <div class="layerImage">
                <div class="layerTransparent">
                        <div class="fontContents">
                                <h1 class="title_name">占いメニュー画面</h1>
                                <a href="Horoscope-1.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_1.png"></a>
                                <a href="Horoscope-2.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_2.png"></a>
                                <a href="Horoscope-3.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_3.png"></a>
                                <a href="Horoscope-4.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_4.png"></a>
                                <a href="Horoscope-5.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_5.png"></a>
                                <a href="Horoscope-6.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_6.png"></a>
                                <a href="Horoscope-7.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_7.png"></a>
                                <a href="Horoscope-8.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_8.png"></a>
                                <a href="Horoscope-9.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_9.png"></a>
                                <a href="Horoscope-10.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_10.png"></a>
                                <a href="Horoscope-11.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_11.png"></a>
                                <a href="Horoscope-12.php" class="button hvr-glow"><img class="horoscope" src="img_ranking/horoscope_12.png"></a>
                        </div>
                </div>
        </div>



        <div class="cp_cont">
                <div class="cp_offcm01">
                        <input type="checkbox" id="cp_toggle01">
                        <label for="cp_toggle01"><span></span></label>
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

</body>
</head>

</html>
<?php require 'footer.php'; ?>