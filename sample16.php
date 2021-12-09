<?php
$news = file_get_contents('data/news.txt');
echo $news;

//追記
$news = $news."<br>さらにリニューアルをしました";
$succcess = file_put_contents('data/news.txt',$news);

?>
