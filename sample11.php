<?php
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];

?>

<dl>
    <?php foreach($fruits as $eng => $jpn): ?>
        <dt><?php echo $eng; ?></dt>
        <dd><?php echo $jpn; ?></dd>
    <?php endforeach; ?>
</dl>
