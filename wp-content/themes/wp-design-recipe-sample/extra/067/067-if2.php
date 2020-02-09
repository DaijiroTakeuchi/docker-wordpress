<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>067 if文パターン2</title>
</head>
<body>

<?php if(mt_rand(0, 99) >= 50): ?>
    <p>50以上です。</p>
<?php else: ?>
    <p>50未満です。</p>
<?php endif; ?>
    
</body>
</html>