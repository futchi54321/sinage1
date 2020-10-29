<?php require 'header.php'; ?>
<?php
//ファイルの保存先
$upload = '../timetable/pdf/' . $_FILES['file_upload']['name'];
//アップロードが正しく完了したかチェック
if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload)) {
    echo 'アップロード完了';
} else {
    echo 'アップロード失敗';
}
?>
<br><br>
<form action="administrator_time.php" method="post">
    <input type="submit" value="←戻る">
</form>


<?php require 'footer.php'; ?>