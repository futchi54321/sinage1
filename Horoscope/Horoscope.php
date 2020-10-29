<?php
$mysignday[0] = "3/21～4/19";
$mysignday[1] = "4/20～5/20";
$mysignday[2] = "5/21～6/21";
$mysignday[3] = "6/22～7/22";
$mysignday[4] = "7/23～8/22";
$mysignday[5] = "8/23～9/22";
$mysignday[6] = "9/23～10/23";
$mysignday[7] = "10/24～11/21";
$mysignday[8] = "11/22～12/21";
$mysignday[9] = "12/22～1/19";
$mysignday[10] = "1/20～2/18";
$mysignday[11] = "2/19～3/20";
$today = date("Y/m/d", strtotime("+12 hour"));
$tommorow = date("Y/m/d", strtotime("+36 hour"));

$json = file_get_contents("http://api.jugemkey.jp/api/horoscope/free/" . $today . "", "r");
$obj = json_decode($json);
$horos = $obj->horoscope->$today;
for ($ho = 0; $ho < 12; $ho++) {
    $mysign[$ho] = $horos[$ho]->sign; // 星座
    $mycontent[$ho] = $horos[$ho]->content; // 運勢
    $mymoney[$ho] = $horos[$ho]->money; // 金運
    $myjob[$ho] = $horos[$ho]->job; // 仕事運
    $mylove[$ho] = $horos[$ho]->love; // 愛情運
    $myitem[$ho] = $horos[$ho]->item; // ラッキーITEM
    $mycolor[$ho] = $horos[$ho]->color; // ラッキーカラー
    $mytotal[$ho] = $horos[$ho]->total; // 総合運
    $myrank[$ho] = $horos[$ho]->rank; // ランキング

    if ($myrank[$ho] == "1") {   //１位の処理
        $myrankings1 = " " . $mysign[$ho] . "";
        $myrankings1no = $ho;
        $mycontent1 = " " . $mycontent[$ho] . "";
        $mytotal1 = " " . $mytotal[$ho] . "";
        $mylove1 = " " . $mylove[$ho] . "";
        $myjob1 = " " . $myjob[$ho] . "";
        $mymoney1 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "2") {    //２位の処理
        $myrankings2 = " " . $mysign[$ho] . "";
        $myrankings2no = $ho;
        $mycontent2 = " " . $mycontent[$ho] . "";
        $mytotal2 = " " . $mytotal[$ho] . "";
        $mylove2 = " " . $mylove[$ho] . "";
        $myjob2 = " " . $myjob[$ho] . "";
        $mymoney2 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "3") {    //３位の処理
        $myrankings3 = " " . $mysign[$ho] . "";
        $myrankings3no = $ho;
        $mycontent3 = " " . $mycontent[$ho] . "";
        $mytotal3 = " " . $mytotal[$ho] . "";
        $mylove3 = " " . $mylove[$ho] . "";
        $myjob3 = " " . $myjob[$ho] . "";
        $mymoney3 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "4") {    //4位の処理
        $myrankings4 = " " . $mysign[$ho] . "";
        $myrankings4no = $ho;
        $mycontent4 = " " . $mycontent[$ho] . "";
        $mytotal4 = " " . $mytotal[$ho] . "";
        $mylove4 = " " . $mylove[$ho] . "";
        $myjob4 = " " . $myjob[$ho] . "";
        $mymoney4 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "5") {    //5位の処理
        $myrankings5 = " " . $mysign[$ho] . "";
        $myrankings5no = $ho;
        $mycontent5 = " " . $mycontent[$ho] . "";
        $mytotal5 = " " . $mytotal[$ho] . "";
        $mylove5 = " " . $mylove[$ho] . "";
        $myjob5 = " " . $myjob[$ho] . "";
        $mymoney5 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "6") {    //6位の処理
        $myrankings6 = " " . $mysign[$ho] . "";
        $myrankings6no = $ho;
        $mycontent6 = " " . $mycontent[$ho] . "";
        $mytotal6 = " " . $mytotal[$ho] . "";
        $mylove6 = " " . $mylove[$ho] . "";
        $myjob6 = " " . $myjob[$ho] . "";
        $mymoney6 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "7") {    //7位の処理
        $myrankings7 = " " . $mysign[$ho] . "";
        $myrankings7no = $ho;
        $mycontent7 = " " . $mycontent[$ho] . "";
        $mytotal7 = " " . $mytotal[$ho] . "";
        $mylove7 = " " . $mylove[$ho] . "";
        $myjob7 = " " . $myjob[$ho] . "";
        $mymoney7 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "8") {    //8位の処理
        $myrankings8 = " " . $mysign[$ho] . "";
        $myrankings8no = $ho;
        $mycontent8 = " " . $mycontent[$ho] . "";
        $mytotal8 = " " . $mytotal[$ho] . "";
        $mylove8 = " " . $mylove[$ho] . "";
        $myjob8 = " " . $myjob[$ho] . "";
        $mymoney8 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "9") {    //9位の処理
        $myrankings9 = " " . $mysign[$ho] . "";
        $myrankings9no = $ho;
        $mycontent9 = " " . $mycontent[$ho] . "";
        $mytotal9 = " " . $mytotal[$ho] . "";
        $mylove9 = " " . $mylove[$ho] . "";
        $myjob9 = " " . $myjob[$ho] . "";
        $mymoney9 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "10") {    //10位の処理
        $myrankings10 = " " . $mysign[$ho] . "";
        $myrankings10no = $ho;
        $mycontent10 = " " . $mycontent[$ho] . "";
        $mytotal10 = " " . $mytotal[$ho] . "";
        $mylove10 = " " . $mylove[$ho] . "";
        $myjob10 = " " . $myjob[$ho] . "";
        $mymoney10 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "11") {    //11位の処理
        $myrankings11 = " " . $mysign[$ho] . "";
        $myrankings11no = $ho;
        $mycontent11 = " " . $mycontent[$ho] . "";
        $mytotal11 = " " . $mytotal[$ho] . "";
        $mylove11 = " " . $mylove[$ho] . "";
        $myjob11 = " " . $myjob[$ho] . "";
        $mymoney11 = " " . $mymoney[$ho] . "";
    } elseif ($myrank[$ho] == "12") {    //12位の処理
        $myrankings12 = " " . $mysign[$ho] . "";
        $myrankings12no = $ho;
        $mycontent12 = " " . $mycontent[$ho] . "";
        $mytotal12 = " " . $mytotal[$ho] . "";
        $mylove12 = " " . $mylove[$ho] . "";
        $myjob12 = " " . $myjob[$ho] . "";
        $mymoney12 = " " . $mymoney[$ho] . "";
    }
}


$japseiza[0] = " 牡羊座";
$japseiza[1] = " 牡牛座";
$japseiza[2] = " 双子座";
$japseiza[3] = " 蟹座";
$japseiza[4] = " 獅子座";
$japseiza[5] = " 乙女座";
$japseiza[6] = " 天秤座";
$japseiza[7] = " 蠍座";
$japseiza[8] = " 射手座";
$japseiza[9] = " 山羊座";
$japseiza[10] = " 水瓶座";
$japseiza[11] = " 魚座";

$seiza[0] = "ohitsuji";
$seiza[1] = "oushi";
$seiza[2] = "futago";
$seiza[3] = "kani";
$seiza[4] = "shishi";
$seiza[5] = "otome";
$seiza[6] = "tenbin";
$seiza[7] = "sasori";
$seiza[8] = "ite";
$seiza[9] = "yagi";
$seiza[10] = "mizugame";
$seiza[11] = "uo";

for ($i = 0; $i < 12; $i++) {
    if ($myrankings1 == $japseiza[$i]) {
        $img1 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings2 == $japseiza[$i]) {
        $img2 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings3 == $japseiza[$i]) {
        $img3 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings4 == $japseiza[$i]) {
        $img4 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings5 == $japseiza[$i]) {
        $img5 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings6 == $japseiza[$i]) {
        $img6 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings7 == $japseiza[$i]) {
        $img7 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings8 == $japseiza[$i]) {
        $img8 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings9 == $japseiza[$i]) {
        $img9 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings10 == $japseiza[$i]) {
        $img10 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings11 == $japseiza[$i]) {
        $img11 = "./seiza/$seiza[$i].png";
    }
    if ($myrankings12 == $japseiza[$i]) {
        $img12 = "./seiza/$seiza[$i].png";
    }
}
