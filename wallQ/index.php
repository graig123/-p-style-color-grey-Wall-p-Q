<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/wallboard.css">
<body>
<div class="background2-pic"></div>
<div class="headerpic-box"><div class="headerpic"></div></div>
<div class="triangle-topright"><div class="pagents"></div></div>
<div class="triangle-topleft"></div>
<div class="formbox">
<form name="wachtrij_form" id="myform" action="wallQ.php" method="get">

<?php
include('namen.php');

echo '<div id="formchild"><h2>Main Queue</h2><br>';
echo '<input type="radio" name="queue" value="1" checked="checked">',$namen[1],'<br>';
echo '<input type="radio" name="queue" value="2">',$namen[2],'<br>';
echo '<input type="radio" name="queue" value="3">',$namen[3],'<br>';
echo '<input type="radio" name="queue" value="4">',$namen[4],'<br>';
echo '<input type="radio" name="queue" value="5">',$namen[5],'<br>';
echo '<input type="radio" name="queue" value="6">',$namen[6],'<br>';
echo '<input type="radio" name="queue" value="7">',$namen[7],'<br>';
echo '<input type="radio" name="queue" value="8">',$namen[8],'<br></div>';

echo '<div id="formchild"><h2>Queue 2</h2><br>';
echo '<input type="radio" name="sub1" value="none" checked="checked">none<br>';
echo '<input type="radio" name="sub1" value="111">Agent status<br>';
echo '<input type="radio" name="sub1" value="101">',$namen[1],'<br>';
echo '<input type="radio" name="sub1" value="102">',$namen[2],'<br>';
echo '<input type="radio" name="sub1" value="103">',$namen[3],'<br>';
echo '<input type="radio" name="sub1" value="104">',$namen[4],'<br>';
echo '<input type="radio" name="sub1" value="105">',$namen[5],'<br>';
echo '<input type="radio" name="sub1" value="106">',$namen[6],'<br>';
echo '<input type="radio" name="sub1" value="107">',$namen[7],'<br>';
echo '<input type="radio" name="sub1" value="108">',$namen[8],'<br></div>';

echo '<div id="formchild"><h2>Queue 3</h2><br>';
echo '<input type="radio" name="sub2" value="none" checked="checked">none<br>';
echo '<input type="radio" name="sub2" value="101">',$namen[1],'<br>';
echo '<input type="radio" name="sub2" value="102">',$namen[2],'<br>';
echo '<input type="radio" name="sub2" value="103">',$namen[3],'<br>';
echo '<input type="radio" name="sub2" value="104">',$namen[4],'<br>';
echo '<input type="radio" name="sub2" value="105">',$namen[5],'<br>';
echo '<input type="radio" name="sub2" value="106">',$namen[6],'<br>';
echo '<input type="radio" name="sub2" value="107">',$namen[7],'<br>';
echo '<input type="radio" name="sub2" value="108">',$namen[8],'<br></div>';

echo '<div id="formchild"><h2>Queue 4</h2><br>';
echo '<input type="radio" name="sub3" value="none" checked="checked">none<br>';
echo '<input type="radio" name="sub3" value="101">',$namen[1],'<br>';
echo '<input type="radio" name="sub3" value="102">',$namen[2],'<br>';
echo '<input type="radio" name="sub3" value="103">',$namen[3],'<br>';
echo '<input type="radio" name="sub3" value="104">',$namen[4],'<br>';
echo '<input type="radio" name="sub3" value="105">',$namen[5],'<br>';
echo '<input type="radio" name="sub3" value="106">',$namen[6],'<br>';
echo '<input type="radio" name="sub3" value="107">',$namen[7],'<br>';
echo '<input type="radio" name="sub3" value="108">',$namen[8],'<br></div>';

echo '<div id="formchild"><h2>Alert Limit</h2><br>';
echo '<input type="radio" name="limit" value="3" checked="checked">3<br>';
echo '<input type="radio" name="limit" value="4">4<br>';
echo '<input type="radio" name="limit" value="5">5<br>';
echo '<input type="radio" name="limit" value="6">6<br>';
echo '<input type="radio" name="limit" value="7">7<br>';
echo '<input type="radio" name="limit" value="10">10<br>';
echo '<input type="radio" name="limit" value="15">15<br>';
echo '<input type="radio" name="limit" value="30">30<br></div>';

echo '<div id="formchild"><h2>Style</h2><br>';
echo '<input type="radio" name="style" value="none" checked="checked">Plus<br>';
echo '<input type="radio" name="style" value="1">Basic<br></div>';
 
echo '<div id="formchild"><h2>Language</h2><br>';
echo '<input type="radio" name="lang" value="EN" checked="checked">English<br>';
echo '<input type="radio" name="lang" value="NL">Nederlands<br></div>';
?>
</div>
<br><br>
<center><input type="submit" value="submit"></center>
</form>

</body>
</html>