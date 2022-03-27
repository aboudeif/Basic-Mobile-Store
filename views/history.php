<link rel="stylesheet" href="../styles/style.css">
<?php include("../layout/nav.html"); ?>
<div class='title-icon'>&#9203;</div><div  class='title'><h2>History</h2></div>
<?php $str = " --- No history --- "; ?>
<ul  class='body'><a class="h-element" href="<?php echo $_COOKIE['history-1']; ?>"><li>1- <?php echo ($_COOKIE['history-1'] ?? $str); ?></li></a>
<a class="h-element" href="<?php echo $_COOKIE['history-2']; ?>"><li>2- <?php echo ($_COOKIE['history-2'] ?? $str); ?></li></a>
<a class="h-element" href="<?php echo $_COOKIE['history-3']; ?>"><li>3- <?php echo ($_COOKIE['history-3'] ?? $str); ?></li></a></ul>