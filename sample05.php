<?php
$today = new Datetime();
$today->setTimezone(new DateTimeZone('Asia/tokyo'));
echo '現在 '. $today->format('G:i:s').' up!';

?>