<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>067 while パターン1</title>
</head>
<body>

<?php
$i = 1;
while($i <= 5): ?>
    <p><?php echo $i; ?>回目の繰り返し</p>
<?php
$i += 1;
endwhile; ?>
    
</body>
</html>