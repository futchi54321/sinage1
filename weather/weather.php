<?php require('header.php'); ?>
<?php

$url = 'https://api.darksky.net/forecast/8c568b762d50b895d1456d576530f54e/38.6242,140.1374?units=si&lang=ja&exclude=alerts,flags';
$weather = json_decode(file_get_contents($url), true);
echo '<div class="midasi"><p>今日の天気</p></div>';

$weatherShow = '<div class="genzai"><img src= "./tennki/%s.png" style="width:150px"></div>
<div class="g">%d℃<br>
%d％</div>
<div class="a">現在</div>';

$weatherShow1 = '<div class="iti"><img src= "./tennki/%s.png" style="width:100px"></div>
<div class="iti_p">%d℃<br>
%d％</div>
<div class="b">1時間後</div>';

$weatherShow2 = '<div class="ni"><img src= "./tennki/%s.png" style="width:100px"></div>
<div class="ni_p">%d℃<br>
%d％</div>
<div class="c">2時間後</div>';

$weatherShow3 = '<div class="san"><img src= "./tennki/%s.png" style="width:100px"></div>
<div class="san_p">%d℃<br>
%d％</div>
<div class="d">3時間後</div>';

$weatherShow4 = '<div class="si"><img src= "./tennki/%s.png" style="width:100px"></div>
<div class="si_p">%d℃<br>
%d％</div>
<div class="e">4時間後</div>';

$nextweatherShow1 = '<div><img src= "./tennki/%s.png" style="width:70px"></div>
<div><div class="aka">%d</div><div class="kuro">℃ / </div><div class="ao">%d</div><div class="kuro">℃</div></div><br>
<div>%d％</div>';

$nextweatherShow2 = '<div><img src= "./tennki/%s.png" style="width:70px"></div>
<div><div class="aka">%d</div><div class="kuro">℃ / </div><div class="ao">%d</div><div class="kuro">℃</div></div><br>
<div>%d％</div>';

$nextweatherShow3 = '<div><img src= "./tennki/%s.png" style="width:70px"></div>
<div><div class="aka">%d</div><div class="kuro">℃ / </div><div class="ao">%d</div><div class="kuro">℃</div></div><br>
<div>%d％</div>';

$nextweatherShow4 = '<div><img src= "./tennki/%s.png" style="width:70px"></div>
<div><div class="aka">%d</div><div class="kuro">℃ / </div><div class="ao">%d</div><div class="kuro">℃</div></div><br>
<div>%d％</div>';

$nextweatherShow5 = '<div><img src= "./tennki/%s.png" style="width:70px"></div>
<div><div class="aka">%d</div><div class="kuro">℃ / </div><div class="ao">%d</div><div class="kuro">℃</div></div><br>
<div>%d％</div>';




echo '<div class="GENZAI">';
echo sprintf($weatherShow, $weather['currently']['icon'], $weather['currently']['temperature'], $weather['currently']['precipProbability'] * 100);
echo '</div>';

echo '<div class="alert alert-warning" role="alert">';
echo '<div class="marquee">';
echo sprintf($weather['hourly']['summary']);
echo '</div></div>';

echo '<div class="itizikango">';
echo sprintf($weatherShow1, $weather['hourly']['data'][0]['icon'], $weather['hourly']['data'][0]['temperature'], $weather['hourly']['data'][0]['precipProbability'] * 100);
echo '</div>';

echo '<div class="nizikango">';
echo sprintf($weatherShow2, $weather['hourly']['data'][1]['icon'], $weather['hourly']['data'][1]['temperature'], $weather['hourly']['data'][1]['precipProbability'] * 100);
echo '</div>';

echo '<div class="sanziikango">';
echo sprintf($weatherShow3, $weather['hourly']['data'][2]['icon'], $weather['hourly']['data'][2]['temperature'], $weather['hourly']['data'][2]['precipProbability'] * 100);
echo '</div>';

echo '<div class="yozikango">';
echo sprintf($weatherShow4, $weather['hourly']['data'][3]['icon'], $weather['hourly']['data'][3]['temperature'], $weather['hourly']['data'][3]['precipProbability'] * 100);
echo '</div>';

echo '<div class="container">';

echo '<div class="ituka">';
echo '<div class="itukatenki"><h1>5日間の天気</h1></div>';

echo '<div class="center">';
echo '<div class="container">';
echo '<div class="itinitigoto">';
echo date("m/d", strtotime("1 day"));
echo sprintf($nextweatherShow1, $weather['daily']['data'][0]['icon'], $weather['daily']['data'][0]['temperatureHigh'], $weather['daily']['data'][0]['temperatureLow'], $weather['daily']['data'][0]['precipProbability'] * 100);
echo '</div>';
echo '</div>';

echo '<div class="container">';
echo '<div class="itinitigoto">';
echo date("m/d", strtotime("2 day"));
echo sprintf($nextweatherShow2, $weather['daily']['data'][1]['icon'], $weather['daily']['data'][1]['temperatureHigh'], $weather['daily']['data'][1]['temperatureLow'], $weather['daily']['data'][1]['precipProbability'] * 100);
echo '</div>';
echo '</div>';

echo '<div class="container">';
echo '<div class="itinitigoto">';
echo date("m/d", strtotime("3 day"));
echo sprintf($nextweatherShow3, $weather['daily']['data'][2]['icon'], $weather['daily']['data'][2]['temperatureHigh'], $weather['daily']['data'][2]['temperatureLow'], $weather['daily']['data'][2]['precipProbability'] * 100);
echo '</div>';
echo '</div>';

echo '<div class="container">';
echo '<div class="itinitigoto">';
echo date("m/d", strtotime("4 day"));
echo sprintf($nextweatherShow4, $weather['daily']['data'][3]['icon'], $weather['daily']['data'][3]['temperatureHigh'], $weather['daily']['data'][3]['temperatureLow'], $weather['daily']['data'][3]['precipProbability'] * 100);
echo '</div>';
echo '</div>';

echo '<div class="container">';
echo '<div class="itinitigoto">';
echo date("m/d", strtotime("5 day"));
echo sprintf($nextweatherShow5, $weather['daily']['data'][4]['icon'], $weather['daily']['data'][4]['temperatureHigh'], $weather['daily']['data'][4]['temperatureLow'], $weather['daily']['data'][4]['precipProbability'] * 100);
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

?>
<?php require('footer.php'); ?>
