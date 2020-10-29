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
echo $myrankings3;
echo '</div>';
echo "<div class='seizagazo'><img src='$img3' width='300' height='300' alt='３位のイラスト'></div>";
echo '<div class="midasi"><p>今日の運勢</p>';
echo '<h1>3位</h1></div>';
echo '<br>';
echo '<div class="message">';
echo $mycontent3;
echo '</div>';
echo '<br>';

echo '<div class="luck">';
echo '総合運 ';
for ($i = 0; $i < $mytotal3; $i++) {
    echo "<img src='./luck/総合運.png' width='40' height='40' alt='３位のイラスト'> ";
}
echo '<br>';

echo '恋愛運 ';
for ($i = 0; $i < $mylove3; $i++) {
    echo "<img src='./luck/恋愛運.png' width='40' height='40' alt='３位のイラスト'> ";
}
echo '<br>';

echo '仕事運 ';
for ($i = 0; $i < $myjob3; $i++) {
    echo "<img src='./luck/仕事運.png' width='40' height='40' alt='３位のイラスト'> ";
}
echo '<br>';

echo '金　運 ';
for ($i = 0; $i < $mymoney3; $i++) {
    echo "<img src='./luck/金運.png' width='40' height='40' alt='３位のイラスト'> ";
}
echo '<br>';
echo '</div>';

?>
<?php require 'footer.php'; ?>
