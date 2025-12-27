<div id="playlist">
<font color="#ffffff" face="Consolas" size="2">

<?php
if ($select == 'playlists/.txt') {
    
} else {
	$head = substr($select,-11,7);
	echo "<p align=center><b>$head</b></p>\n";
	// echo $select;

	$lines = file($select);
	# echo $lines;
	foreach ($lines as $line_num => $line) {
		echo $line ."<br>\n";
		//echo htmlspecialchars($line, ENT_COMPAT, '')
	}
}
?>
</font>
</div>
