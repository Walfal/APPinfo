<?php $target =  urldecode($_GET['target']); ?>
<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Image <?= basename($target); ?></title>
</head>
<body>
<img src="<?= basename($target); ?>" border=0 alt="<?= basename($target); ?>" align="left">
</body>
</html>
