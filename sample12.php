<?php 
$time = date('G');
$deteal_time = date('G:i:s');
?>

<?php if($time < 9  || $time >20): ?>
    <p>out of service<?php echo "(now:$deteal_time)" ?></p></p>
<?php else: ?>    
    <p>Welcome!<?php echo "(now:$deteal_time)" ?></p>
<?php endif; ?>