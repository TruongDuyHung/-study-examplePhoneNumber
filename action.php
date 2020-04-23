<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $listphonenumber = explode(',', $_REQUEST['message']);
}
$viettel = [];
$mobiphone = [];
$vinaphone = [];
$unknown=[];
for ($i = 0; $i < count($listphonenumber); $i++) {
    if (strncmp($listphonenumber[$i], "096", 3)==0 ||
        strncmp($listphonenumber[$i], "097", 3)==0 ||
        strncmp($listphonenumber[$i], "098", 3)==0) {
        array_push($viettel,$listphonenumber[$i]);
    } elseif (strncmp($listphonenumber[$i], "091", 3)==0 ||
        strncmp($listphonenumber[$i], "094", 3)==0 ||
        strncmp($listphonenumber[$i], "088", 3)==0) {
        array_push($vinaphone,$listphonenumber[$i]);
    } elseif (strncmp($listphonenumber[$i], "090", 3)==0 ||
        strncmp($listphonenumber[$i], "093)==0", 3)==0 ||
        strncmp($listphonenumber[$i], "089", 3)==0) {
        array_push($mobiphone,$listphonenumber[$i]);
    } else {
            array_push($unknown,$listphonenumber[$i]);
    }
}
print_r($viettel);
echo "Viettel Phone : "."<br>" ;
print_r($vinaphone);
echo  "Vina Phone : "."<br>" ;
print_r($mobiphone);
echo "Mobi Phone : "."<br>" ;
print_r($unknown);
echo "Unknown Phone : "."<br>" ;

