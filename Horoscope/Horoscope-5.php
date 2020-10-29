<?php require 'header.php'; ?>

<?php require 'HoroHeader.php'; ?>
<?php
include 'Horoscope.php';

echo '<div class="cp_cont">
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
        </div>';

echo '<div class="seiza">';
echo $myrankings5;
echo '</div>';
echo "<div class='seizagazo'><img src='$img5' width='300' height='300' alt='５位のイラスト'></div>";
echo '<div class="midasi"><p>今日の運勢</p>';
echo '<h1>5位</h1></div>';
echo '<br>';
echo '<div class="message">';
echo $mycontent5;
echo '</div>';
echo '<br>';

echo '<div class="luck">';
echo '総合運 ';
for ($i = 0; $i < $mytotal5; $i++) {
    echo "<img src='./luck/総合運.png' width='40' height='40' alt='５位のイラスト'> ";
}
echo '<br>';

echo '恋愛運 ';
for ($i = 0; $i < $mylove5; $i++) {
    echo "<img src='./luck/恋愛運.png' width='40' height='40' alt='５位のイラスト'> ";
}
echo '<br>';

echo '仕事運 ';
for ($i = 0; $i < $myjob5; $i++) {
    echo "<img src='./luck/仕事運.png' width='40' height='40' alt='５位のイラスト'> ";
}
echo '<br>';

echo '金　運 ';
for ($i = 0; $i < $mymoney5; $i++) {
    echo "<img src='./luck/金運.png' width='40' height='40' alt='５位のイラスト'> ";
}
echo '<br>';
echo '</div>';

?>
<?php require 'footer.php'; ?>
