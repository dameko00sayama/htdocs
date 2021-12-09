<?php
$success = file_put_contents('data/news.txt','リニューアルのおしらせ');

if ($success !== false ){
    echo ('ファイルの作成が完了しました');
}else{
    echo ('ファイルの作成に失敗しました');
}

?>