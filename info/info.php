<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" http-equiv="Refresh" content="25;URL=./../weather/weather.php">
    <title>デジタルサイネージ表示画面</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slide.css">
    <link rel="stylesheet" href="humburger.css">
    <link rel="stylesheet" href="twitter.css">

    <!-- 1時間おきに更新 -->
    <script type="text/javascript">
        var term = 60 * 60000;
        setTimeout('location.reload();', term - Date.now() % term);
    </script>

    <!-- slick.jsの詳細設定 -->
    <script>
        $(function() {
            // 一旦hide()で隠してフェードインさせる
            $('div').hide().fadeIn('slow');
        });

        function out() {
            $('div').fadeOut('slow');
        };

        setTimeout("out()", 25000);

        $(function() {
            $('.slidep').slick({
                autoplay: true, //自動切換えするかどうか
                autoplaySpeed: 5000, //自動切り替え時の間隔
                fade: true, //フェイド（ふんわり切り替え）するかどうか
                prevArrow: $('#arrows'), //前ボタンの要素変更（要素変更し表示させないようにしている）
                nextArrow: $('#arr') //次ボタンの要素変更（要素変更し表示させないようにしている）
            });

            $('.slidec').slick({
                autoplay: true,
                autoplaySpeed: 12000,
                fade: true,
                prevArrow: $('#arrows'),
                nextArrow: $('#arr')
            });

        });
    </script>


    <style>
        #all {}



        body {}




        .container {
            margin: 0 auto;


        }


        .gazo {
            float: right;
            pointer-events: none;
        }

        .twi {
            margin-left: 900px;
            size: 100px;
        }

        html {
            touch-action: none;
        }
    </style>

</head>

<body>
    <div id="all">

        <!--ポスター-->
        <div id="pos">
            <div class='container'>
                <div class="slidep">

                    <?php

                    $dir_path = "./poster/";
                    if (is_dir($dir_path)) {
                        if (is_readable($dir_path)) { // ? ファイルが読み込み可能かどうか
                            $ch_dir = dir($dir_path); //ディレクトリクラス
                            //ディレクトリ内の画像を一覧表示
                            while (false !== ($file_name = $ch_dir->read())) {
                                $ln_path = $ch_dir->path . "/" . $file_name;
                                if (@getimagesize($ln_path)) { //画像かどうか？
                                    echo "<a class=gazo href = \"imgview.php?d=" . urlencode(mb_convert_encoding($ln_path, "UTF-8")) . "\" target = \"_blank\" >";
                                    echo "<img src = \"" . $ln_path . "\" width=\"900\"height=\"1080\"></a> ";
                                }
                            }
                            $ch_dir->close();
                        } else {
                            echo "<p>" . htmlspecialchars($dir_path) . "　は読み込みが許可されていません。";
                        }
                    } else {
                        echo 'DIR 画像がないよ';
                    }



                    ?>
                </div>


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
    <div class="twi">
        <a class="twitter-timeline" href="https://twitter.com/is18pbl?ref_src=twsrc%5Etfw"></a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>







</body>

</html>
