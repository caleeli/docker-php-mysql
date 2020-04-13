<?php $config = parse_ini_file('../docker/.env'); ?>
<hr>
  <div><a target="_blank" href="/info.php">PHP INFO</a></div>
  <div><a target="_blank" href="//localhost:<?= $config['PM_PORT'] ?>">ProcessMaker</a></div>
  <div><a target="_blank" href="//localhost:<?= $config['PHP_MY_ADMIN_PORT'] ?>">PHP My Admin</a></div>
<hr>
<div>mysql port = <?= $config['MYSQL_PORT'] ?></div>
<div>mysql user = <?= $config['MYSQL_USER'] ?></div>
<div>mysql password = <?= $config['MYSQL_PASSWORD'] ?></div>
<div>mysql root password = <?= $config['MYSQL_PASSWORD'] ?></div>
