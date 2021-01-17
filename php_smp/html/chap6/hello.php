<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>挨拶</title>
</head>
<body>
    <?php $hour = date('H'); ?>

    <?php if (5 <= $hour && $hour < 10): ?>
    <p>おはようございます</p>
    <?php elseif (10 <= $hour && $hour < 18): ?>
    <p>こんにちは</p>
    <?php else: ?>
    <p>こんばんは</p>
    <?php endif; ?>
    <p>現在<?php echo $hour; ?>時です。</p>
</body>
</html>