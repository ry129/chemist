<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('title2');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {

        if ($hint=="") {
$hint="<div id='dam_return'><h6 href='#' class='test' onclick=\"document.getElementById('dam').value='".$y->item(0)->childNodes->item(0)->nodeValue."'\">" .
          $y->item(0)->childNodes->item(0)->nodeValue .
           "</h6></div>";
        } else {/*
          $hint=$hint . "<br /><h6 onclick = 'change();' >" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";*/
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="not in database";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>