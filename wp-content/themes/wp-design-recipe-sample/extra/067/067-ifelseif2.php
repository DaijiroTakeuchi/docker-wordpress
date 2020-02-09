<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>067 if〜else パターン2</title>
</head>
<body>

<?php
$num = mt_rand(0, 99);
if($num >= 50): ?>
    <p>Wifi電波強度：強 <?php echo $num ?></p>
<?php elseif($num >= 30): ?>
    <p>Wifi電波強度：弱 <?php echo $num ?></p>
<?php else: ?>
    <p>Wifi電波強度：不良 <?php echo $num ?></p>
<?php endif; ?>

</body>
</html>