<link rel="stylesheet" href="../styles/style.css">
<?php include("../layout/nav.html"); ?>
<?php $str = " --- No history --- "; ?>
<div>
<h2 class='title'>Search History</h2>
<a class="h-element" href="<?php echo $_COOKIE['history-1']; ?>"><button>1- <?php echo ($_COOKIE['history-1'] ?? $str); ?></button></a>
<a class="h-element" href="<?php echo $_COOKIE['history-2']; ?>"><button>2- <?php echo ($_COOKIE['history-2'] ?? $str); ?></button></a>
<a class="h-element" href="<?php echo $_COOKIE['history-3']; ?>"><button>3- <?php echo ($_COOKIE['history-3'] ?? $str); ?></button></a>
</div>