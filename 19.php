HTML FILE
<html>
<form action=slip19.php method=get>
Enter a Sentence<input type=text name=t1><br>
Enter a word<input type=text name=t2><br>
Enter position<input type=text name=t3><br>
Enter number of characters to remove<input type=text name=t4><br>
<input type=submit value="Display Result">
</form>
</html>
PHP FILE
<?php
$st=$_GET['t1'];
$wd=$_GET['t2'];
$ps=$_GET['t3'];
$nr=$_GET['t4'];
$dup_st=$st;
$str=substr_replace($st,"",$ps,$nr);
echo "<br>$str<br>";
$str=substr_replace($st,$wd,$ps,0);
echo "<br>$str<br>";
$str=substr_replace($st,$wd,$ps,strlen($wd));
echo "<br>$str<br>";
?> 