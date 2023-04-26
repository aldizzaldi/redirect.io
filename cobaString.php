<?php 
$string = "www.dmlinktracker.com/applinks?utm_source=google%26utm_medium=cpc%26utm_campaign%3Dcampaign1%26utm_id%3Dcampaign_id_1%26utm_term%3Dcampaign_term_1%26utm_content%3Dcampaign_content_1";
$hasil = (explode("?", $string))[1];
// $kocak = $hasil[1];
echo $hasil;

?>