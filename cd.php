<?php
global $select;
global $value;
$select = NULL;
$value = NULL;

echo $select;
echo $value;

echo <a href="cd.php?something=1">Test</a>;  
echo htmlspecialchars($_GET['something']);

echo $value;
?>


<!-- <div id="playlist">
<font color="#ffffff" face="Consolas" size="2">
/*
<?php
/*$lines = file("/users/flyingwalrus/www/playlists/CD-Liste.csv");
foreach ($lines as $line_num => $line) {
	echo htmlspecialchars($line, ENT_QUOTES, 'ISO-8859-1') ."<br>\n";
} */
?>

</font>
</div>
-->