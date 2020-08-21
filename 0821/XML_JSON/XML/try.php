<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                     <sex>M</sex>
                   </employee>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                     <sex>M</sex>
                   </employee>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                     <sex>M</sex>
                   </employee>
                 </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);

$xpath = new DOMXPath($doc);
$entries1 = $xpath->query("/employees/employee/lastName");

$i = 0;
foreach ($entries1 as $entry){
  $i++;
  $entry->parentNode->setAttribute("id", $i);
  $entry->nodeValue="FFFF";
}

$entries2 = $xpath->query("/employees/employee/sex");
foreach($entries2 as $entry){
  $entry->parentNode->removeChild($entry);
}


// $root = $doc->documentElement;
// $root->setAttribute("id", "001");

header("Content-type: text/xml", true);
echo $doc->saveXML();
?>
