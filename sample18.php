<?php
$file = file_get_contents('data/feed.json');
$json = json_decode($file);

foreach($json->items as $item):
?>

.<a href = "<?php echo $item->link; ?>"><?php echo $item->title ;?><br>

<?php
endforeach
?>
