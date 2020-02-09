<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>067 if〜else パターン1</title>
</head>
<body>

<?php
$num = mt_rand(0, 99);
if($num >= 50) {
    echo '<p>Wifi電波強度：強 ' . $num . '</p>';
} elseif($num >= 30) {
     echo '<p>Wifi電波強度：弱 ' . $num . '</p>';
} else {
     echo '<p>Wifi電波強度：不良 ' . $num . '</p>';
}
?>

</body>
</html>