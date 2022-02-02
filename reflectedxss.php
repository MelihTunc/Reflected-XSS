<?php
function stripbadchars($str_chain){
    $bad_chars = array("\\","\"","'","?","+","~","<", ">","|", ":");

for($i=0;$i<sizeof($bad_chars); $i++){
     $str_chain = str_replace($bad_chars[$i], "", $str_chain);
}
return $str_chain; 
}
echo "\n";
echo "<script>\n/*\n";
echo "*\n";
echo "*\n";
echo "*test\n";
echo "*\n";
echo "*\n";
echo "\nvar test=\"" . stripbadchars($_GET["user"]) . "\";console.log(test) </script>";
echo "\n";

?>
<form method="GET" action="reflectedxss.php">
<input type="text" name="user" value="">
<input type="submit" name="submit" value="submit">
</form>
