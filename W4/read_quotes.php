<?php
echo '<table width= 1000 cellspacing=5>
         <tr style="background-color: #bbbbbb;">
            <th>category</th>
            <th>quote</th>
            <th>author</th>
            <th>dob-dod</th>
            <th>image</th>
         </tr>' ;

$quotes = new DOMDocument();

$quotes->load('quotes_13+img.xml');

$quote = $quotes->getElementsByTagName("quote");

foreach ($quote as $q){
	
	
	echo "<tr>";
	echo '<td>'.$q->getElementsByTagName("text")->item(0)->getAttribute('category').'</td>';
	echo "</td>";
	
	echo "<td>";
	$sources = $q->getElementsByTagName("text");
	echo $source = $sources->item(0)->nodeValue;	
	echo "</td>";
	
	echo "<td>";
	//$wplinks = $q->getElementsByTagName("wplink");
	//echo $wplink = $wplinks->item(0)->nodeValue;
	echo "<a href=\"". $q->getElementsByTagName("wplink")->item(0)->nodeValue ."\">" .  $q->getElementsByTagName("source")->item(0)->nodeValue . "</a></td>";
	echo "</td>";
	
	echo "<td>";
	$dods = $q->getElementsByTagName("dob-dod");
	echo $dod = $dods->item(0)->nodeValue;	
	echo "</td>";
	
	echo "<td>";
	$wpimgs = $q->getElementsByTagName("wpimg");
	echo "<img width= '80' src=".$wpimg = $wpimgs->item(0)->nodeValue."></img>";	
	echo "</td>";
	
	#var_dump($q);
}
echo "</table>";
?>
