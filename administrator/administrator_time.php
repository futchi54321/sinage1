<?php require 'header.php'; ?>
<div class="box1">
    <ul>
        <!-- <li class="off" id="preview"><a href="###">表示時間設定</a></li> -->
        <li class="on" id="schedule"><a href="administrator_time.php">時間割設定</a></li>
        <li class="off" id="poster"><a href="./poster_administrator/poster_administrator.php">ポスター設定</a></li>
    </ul>
</div>
<div class="box2">
    <div class="po">
        <p>アップロードする時間割のファイル(pdf形式)を指定してください。</p>
        <form action="timetable_out.php" enctype="multipart/form-data" method="post">
            <input name="file_upload" type="file" />
            <input type="submit" value="アップロード" />
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>