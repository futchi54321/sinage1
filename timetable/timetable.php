<?php require 'header.php'; ?>

<?php
$path = './pdf/';
$latest_mtime = 0;
if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            $fname = $path . $file;
            $mtime = filemtime($fname);
            if ($mtime > $latest_mtime) {
                $latest_mtime = $mtime;
            }
        }
    }
    closedir($handle);
}

echo '<img src="./img/gakubuchi.png" class="gaku">';

//echo $fname;

echo '<iframe src="' . $fname . '#page=1&view=Fit&viewrect=0,0,570,0&pagemode=none&scrollbar=0" height="1080" width="1600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="border:none;" class="scrolloff"></iframe>';

?>


<style>
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .gaku {
        position: absolute;
    }

    .scrolloff {
        pointer-events: none;
    }

    ol,
    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    body {
        overflow: hidden;
    }

    .cp_cont {
        height: 65vh;
    }

    .cp_offcm01 {
        position: absolute;
        top: 20px;
        right: 20px;
        display: inline-block;
    }

    /* menu */
    .cp_offcm01 .cp_menu {
        position: fixed;
        top: 0;
        right: -100vw;
        width: 250px;
        height: 100%;
        cursor: pointer;
        -webkit-transition: 0.53s transform;
        transition: 0.53s transform;
        -webkit-transition-timing-function: cubic-bezier(.38, .52, .23, .99);
        transition-timing-function: cubic-bezier(.38, .52, .23, .99);
        background-color: #607D8B;
        opacity: 0.8;
    }

    .cp_offcm01 .cp_menu ul {
        margin: 0;
        padding: 0;
    }

    .cp_offcm01 .cp_menu li {
        list-style: none;
    }

    .cp_offcm01 .cp_menu li a {
        display: block;
        padding: 20px;
        text-decoration: none;
        color: #ffffff;
        border-bottom: 1px solid #ffffff;
    }

    .cp_offcm01 #cp_toggle01 {
        position: absolute;
        display: none;
        opacity: 0;
    }

    .cp_offcm01 #cp_toggle01:checked~.cp_menu {
        -webkit-transform: translateX(-100vw);
        transform: translateX(-100vw);
    }

    /* menu toggle */
    .cp_offcm01 #cp_toggle01~label {
        display: block;
        padding: 0.5em;
        cursor: pointer;
        -webkit-transition: 0.5s transform;
        transition: 0.5s transform;
        -webkit-transition-timing-function: cubic-bezier(.61, -0.38, .37, 1.27);
        transition-timing-function: cubic-bezier(.61, -0.38, .37, 1.27);
        text-align: center;
        color: #333333;
    }

    .cp_offcm01 #cp_toggle01:checked~label {
        -webkit-transform: translateX(-250px);
        transform: translateX(-250px);
    }

    .cp_offcm01 #cp_toggle01~label::before {
        font-family: 'FontAwesome';
        content: url(img/open.png);
        font-size: 2em
    }

    .cp_offcm01 #cp_toggle01:checked~label::before {
        content: url(img/close.png);
    }

    html {
        touch-action: none;
    }
</style>

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
    <!-- <div class="cp_contents">
		<h1>contents</h1>
		</div> -->
</div>

<?php require 'footer.php'; ?>
