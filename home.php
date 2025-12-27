<center>
<font color="#ffffff" face="Consolas">
<?php
global $select;
global $value;
$select = NULL;
$value = NULL;
?>

<h2>Hey you!</h2> <!--&#128578;</h2>-->

<h1>&origof;</h1> 

<h2><a href="top.php"><img style="width: 20px;" src="pic/thumb_tr.png" border="0" alt="b"></img>Top 10 Albums</a></h2>
<h2><a target="_blank" href="/playlists/CD-Liste.xhtml"><img style="width: 20px;" src="pic/thumb_c.png" border="0" alt="b"></img>CD List</a></h2>
<h2><a href="index_p.php"><img style="width: 20px;" src="pic/thumb_ph.png" border="0" alt="b"></img>Photos</a></h2>
<h2><a href="txt/index.html"><img style="width: 20px;" src="pic/thumb_tx.png" border="0" alt="b"></img>Text</a></h2>
<h2><a href="index_l.php"><img style="width: 20px;" src="./pic/thumb_l.png" border="0" alt="b"></img>Links</a></h2>

<h1>&origof;</h1> 

<form method="post">
	<label><h4>Playlists:
		<select name="list">
			<option value="Q3-2020">Q3/2020</option>
			<option value="Q2-2020">Q2/2020</option>
			<option value="03-2020">03/2020</option>
			<option value="02-2020">02/2020</option>
			<option value="01-2020">01/2020</option>
			<option value="12-2019">12/2019</option>
			<option value="09-2019">09/2019</option>
			<option value="08-2019">08/2019</option>
			<option value="07-2019">07/2019</option>
			<option value="06-2019">06/2019</option>
			<option value="05-2019">05/2019</option>
			<option value="04-2019">04/2019</option>
			<option value="02-2019">02/2019</option>
			<option value="01-2019">01/2019</option>
			<option value="12-2018">12/2018</option>
			<option value="11-2018">11/2018</option>
			<option value="10-2018">10/2018</option>
			<option value="09-2018">09/2018</option>
			<option value="08-2018">08/2018</option>
			<option value="07-2018">07/2018</option>
			<option value="06-2018">06/2018</option>
			<option value="05-2018">05/2018</option>
			<option value="04-2018">04/2018</option>
			<option value="02-2018">02/2018</option>
			<option value="01-2018">01/2018</option>
			<option value="12-2017">12/2017</option>
			<option value="11-2017">11/2017</option>
			<option value="10-2017">10/2017</option>
			<option value="09-2017">09/2017</option>
			<option value="08-2017">08/2017</option>
			<option value="07-2017">07/2017</option>
			<option value="06-2017">06/2017</option>
			<option value="05-2017">05/2017</option>
			<option value="04-2017">04/2017</option>
			<option value="03-2017">03/2017</option>
			<option value="02-2017">02/2017</option>
			<option value="01-2017">01/2017</option>
			<option value="12-2016">12/2016</option>
			<option value="11-2016">11/2016</option>
			<option value="10-2016">10/2016</option>
			<option value="09-2016">09/2016</option>
			<option value="08-2016">08/2016</option>
			<option value="07-2016">07/2016</option>
			<option value="06-2016">06/2016</option>
			<option value="05-2016">05/2016</option>
			<option value="04-2016">04/2016</option>
			<option value="03-2016">03/2016</option>
			<option value="02-2016">02/2016</option>
			<option value="01-2016">01/2016</option>
			<option value="12-2015">12/2015</option>
			<option value="11-2015">11/2015</option>
			<option value="10-2015">10/2015</option>
			<option value="09-2015">09/2015</option>
			<option value="08-2015">08/2015</option>
			<option value="07-2015">07/2015</option>
			<option value="06-2015">06/2015</option>
			<option value="05-2015">05/2015</option>
			<option value="04-2015">04/2015</option>
			<option value="03-2015">03/2015</option>
			<option value="02-2015">02/2015</option>
			<option value="01-2015">01/2015</option>
			<option value="12-2014">12/2014</option>
			<option value="11-2014">11/2014</option>
			<option value="10-2014">10/2014</option>
			<option value="09-2014">09/2014</option>
			<option value="08-2014">08/2014</option>
			<option value="07-2014">07/2014</option>
			<option value="06-2014">06/2014</option>
			<option value="05-2014">05/2014</option>
			<option value="04-2014">04/2014</option>
			<option value="03-2014">03/2014</option>
			<option value="02-2014">02/2014</option>
		</select>
	</label>
<input type="submit" value="Go" /></h4>
</form>
</font>
</center>

<?php
$select = "playlists/";
$select .= $_POST['list'] .".txt";
include 'select.php';
?>
