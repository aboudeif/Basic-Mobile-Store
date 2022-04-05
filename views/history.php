<link rel="stylesheet" href="../styles/style.css">
<?php include("../layout/nav.html"); ?>
<?php $str = " --- No Search History--- "; ?>
<div>
<h2 class='title'>Search History</h2>
<a class="h-element" href="<?php echo $_COOKIE['search-link-1']; ?>"><button><?php echo($_COOKIE['search-1'] ?? $str); ?></button></a>
<a class="h-element" href="<?php echo $_COOKIE['search-link-2']; ?>"><button><?php echo($_COOKIE['search-2'] ?? $str); ?></button></a>
<a class="h-element" href="<?php echo $_COOKIE['search-link-3']; ?>"><button><?php echo($_COOKIE['search-3'] ?? $str); ?></button></a>
</div>