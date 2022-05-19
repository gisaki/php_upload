<?php
    $tmpfile = $_FILES['fname']['tmp_name'];
    $filepath = './' . $_FILES['fname']['name'];

    if (is_uploaded_file($tmpfile)) {
        // ok
    } else {
        echo "ファイルが選択されていません。";
        exit;
    }

    if (move_uploaded_file($tmpfile, $filepath)) {
        // ok
    } else {
        echo "ファイルをアップロードできません。";
        exit;
    }

    echo "ファイルをアップロードして" . $filepath . "に保存しました。";
?>
