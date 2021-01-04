<? 
/*
$url = "http://www.fao.org/employment/home/en/";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);
curl_close($ch);

# Create a DOM parser object
$dom = new DOMDocument();

# Parse the HTML from Google.
# The @ before the method call suppresses any warnings that
# loadHTML might throw because of invalid HTML in the page.
@$dom->loadHTML($html);
  //the table by its tag name  
  
  
$tables = $dom->getElementsByTagName('table');   



    //get all rows from the table  
$rows = $tables->item(0)->getElementsByTagName('tr');   
  // get each column by tag name  
$cols = $rows->item(0)->getElementsByTagName('th');   
$row_headers = NULL;
*/
/*
foreach ($cols as $node) {
    //print $node->nodeValue."\n";   
    $row_headers[] = $node->nodeValue;
}   

$table = array();
  //get all rows from the table  
$rows = $tables->item(0)->getElementsByTagName('tr'); 

  
foreach ($rows as $row)   
{   
   // get each column by tag name  
    $cols = $row->getElementsByTagName('td');   
    $row = array();
    $i=0;
    foreach ($cols as $node) {
		$nodeA = $node->getElementsByTagName('a')->item(0);
        //print $node->nodeValue."\n";   
        if($row_headers==NULL){
            $row[] = $node->nodeValue;
			 if(isset($nodeA))  $row[] = "http://www.fao.org/".($nodeA->getAttribute('href'));
		}
        else{
            $row[$row_headers[$i]] = $node->nodeValue;
            $row[] = $node->nodeValue;
			 if(isset($nodeA))  $row[] = "http://www.fao.org/".($nodeA->getAttribute('href'));			
		}
        $i++;
    }   
    $table[] = $row;
}   
*/

?>
<h3><?php ?></h3>
<table class="faojobtablecls">
	<thead>
		<tr>
			<th class="titlecls" >Title</th>
			<th class="typecls" >Type</th>
		<!--	<th class="gradecls">Grade</th> -->
			<th class="duty_stationcls" >Duty Station</th>
			<!--<th class="irc_numbercls" >IRC Number</th>-->
			<th class="detailscls" >Details</th>
			<th class="deadlinecls">Deadline</th>
		</tr>
	</thead>
	<tbody>
<?php
/*
	$tbodycontent = '';
	foreach($table as  $key=>$tab){
	  if($key > 0){
		$title = '<a class="titlecls" href="'.$tab[1].'" target="_blank"><span>'.$tab["Title"].'</span></a>'; 
		$type = $tab["Type"];
		$grade = $tab["Grade"];
		$duty_station = $tab["Duty Station"];
		$irc_number = $tab["IRC Number"];
		$deadline = date('d/m/Y', $tab["Deadline"]); //$d->format('Y-m-d'); //$tab["Deadline"];
		$tbodycontent .= '<tr>'
		.'<td class="title">'.$title.'</td>'
		.'<td class="type">'.$type.'</td>'
		.'<td class="duty_station">'.$duty_station.'</td>'
		.'<td class="details"><a href="'.$tab[1].'" download><img class="pdficon"  src="/sites/all/themes/evolve/assets/images/pdf_ic.png"/></a></td>'
		.'<td class="deadline">'.$deadline.'</td>'.
		'</tr>'; 
		}
	}
	echo $tbodycontent;
	*/
?>
	</tbody>
</table>



