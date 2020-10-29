<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ポスター画面</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="posterstyle.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <h1>サイネージ管理画面</h1>
</head>

<body>
    <div class="box1">
        <ul>
            <li class="off" id="table"><a href="./../administrator_time.php">時間割設定</a></li>
            <li class="on" id="poster"><a href="poster_administrator.php">ポスター設定</a></li>
        </ul>
    </div>
    <div class="box2">
        <div class="po">
            <form method="post" enctype="multipart/form-data">
                <!-- <input type="file" name="image" />
    <input type="hidden" name="action" value="upload"><br/><br/>
    <input type="submit" value="保存"/>  -->

                <input style="display: none" name="image" id="image" type="file" onchange="$('#filename').val($(this).val())" accept="image/jpeg,image/png,image/gif">

                <!-- ファイル名表示テキスト-->
                <input type="text" id="filename" name="filename" size="50" readonly="readonly" />
                <input name="Button" id="Button" type="button" onclick="$('#image').click();" value="参照">

                <!-- 保存ボタン-->
                <input type="hidden" name="action" value="upload"><br /><br />
                <input name="save" id="save" type="submit" value="保存">
            </form>
        </div>

        <Div Align="center">
            <form method="post">
                <table class="type08" width="10%">
                    <thead>
                        <tr>
                            <th scope="cols" width="20%"></th>
                            <th scope="cols" width="30%">ファイル名</th>
                            <!--          <th scope="cols">画像</th>-->
                        </tr>　　
                    </thead>
                    <tbody>
                        <?php

                        $filelist = scandir("./../../info/poster/");
                        foreach ($filelist as $file) :
                            if (!is_dir($file)) :
                                ?>
                                <tr>

                                    <div class="chkbox">
                                        <td style="width:-30%;">

                                            <input type="checkbox" id="deletefile[]" name="deletefile[]" style="width:32px; height:32px;" value="<?php echo $file; ?>" />
                                        </td>
                                    </div>

                                    <td>
                                        <?php echo $file; ?>
                                    </td>
                                    <td>
                                        <?php echo "<img src='./../../info/poster/" . $file . "' width='50px' />"; ?>
                                    </td>
                                </tr>
                        <?php endif;
                        endforeach; ?>
                    </tbody>
                </table>
                <p>
                    <input type="hidden" name="action" value="delete">
                    <input type="submit" value="削除" />
                </p>

            </form>

            <!---->

        </Div>
        <?php


        //header('Content-Type: text/html; charset=UTF-8');

        //画像を保存するディレクトリー
        //$dir="D:";
        $dir = "./../../info/poster/";
        //日本語を省くための正規表現
        $pattern = "/^[a-z0-9A-Z\-_]+\.[a-zA-Z]{3}$/";


        //リクエストがPOSTかどうかチェック
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

            //フォームボタンのvalueを取得する
            $action = $_POST["action"];

            /*-------------------------------------------------------
	   アップロードする処理
	--------------------------------------------------------*/
            if ($action == "upload") {

                //アップロードされたファイルを取得
                $upfile = $_FILES["image"]["name"];
                if (!empty($upfile)) {
                    if (!preg_match($pattern, $upfile)) {
                        $er["jp"] = "ファイル名に日本語を使わないでください";
                    }
                    //アップされた画像の拡張子を抜き出し、チェックする
                    $ext = substr($upfile, -3);
                    if ($ext != "jpg" && $ext != "png" && $ext != "gif") {
                        $er["image"] = "拡張子がjpgとpngとgifのみアップできます";
                    } else {
                        //ファイル重複チェックするためにディレクトリー内のファイルを取得する

                        $filelist = scandir($dir);
                        foreach ($filelist as $file) {
                            //echo $file;
                            if (!is_dir($file)) {
                                if ($upfile == $file) {
                                    $er["double"] = "重複してるのでアップできません。";
                                }
                            }
                        }
                    }
                    if (empty($er)) {
                        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $upfile)) {
                                header("location: poster_administrator.php");
                            } else {
                                echo 'アップロードできません';
                            }
                        } else {
                            echo 'ファイルが選択されていません';
                        }
                    } else {
                        print_r($er);
                    }
                }

                /*-------------------------------------------------------
	   削除する処理
	--------------------------------------------------------*/

                //削除ボタンが押された場合
            } elseif ($action == "delete") {

                //チェックされたファイル名を取得
                $deletefiles = $_POST["deletefile"];
                //ファイルがアップロードされたかチェックする
                if (!empty($deletefiles)) {
                    //チェックされた画像の数繰り返す
                    //ファイルが実際に存在していた場合にunlink関数で画像ファイルを削除する
                    foreach ($deletefiles as $dfile) {
                        if (file_exists($dir . $dfile)) {
                            unlink($dir . $dfile);
                            header("location: poster_administrator.php");
                            // echo '削除しました';
                        }
                    }
                }
            }
        }

        ?>
    </div>

</body>

</html>
