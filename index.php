<?php
// Mendapatkan skema (http atau https)
$skema = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

// Mendapatkan nama host
// $host = $_SERVER['HTTP_HOST'];

// Mendapatkan path atau URI
$path = $_SERVER['REQUEST_URI'];
$string = "www.dmlinktracker.com/applinks?utm_source=google%26utm_medium=cpc%26utm_campaign%3Dcampaign1%26utm_id%3Dcampaign_id_1%26utm_term%3Dcampaign_term_1%26utm_content%3Dcampaign_content_1";
$referrer = (explode("?", $path))[1];

// Menggabungkan skema, host, dan path menjadi URL lengkap
$playstore = "https://play.google.com/store/apps/details?id=com.iod.oprek&referer=";
$url = $playstore. $referrer;
header("Location: " . $url);

// Cetak URL lengkap ke layar
echo $url;
// <?php // URL tujuan yang akan di-redirect $tujuan = "https://www.website-tujuan.com/";  // Lakukan redirect ke URL tujuan header("Location: " . $tujuan); exit; ?>
?>