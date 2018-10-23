<h3>Sekarang - 30 Belakang</h3><br>
<?php
//mendapatkan tgl kemarin
$tglskr = mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"));
$tglkemarin = date("Y-m-d", $tglskr);

//mendapatkan tgl 30 hari kemarin
$tgl_30_hari_lalu = mktime(0, 0, 0, date("m"), date("d") - 30, date("Y"));
$tgllalu = date("Y-m-d", $tgl_30_hari_lalu);

$tgl_skr = new DateTime($tglkemarin, new DateTimeZone("Asia/Jakarta"));
$tgl_lalu = new DateTime($tgllalu, new DateTimeZone("Asia/Jakarta"));

//looping 
do {
    echo $tgl_skr->format("Y-m-d");
    echo '<br>';
    $tgl_skr->modify("-1 day");
} while ($tgl_skr >= $tgl_lalu);
?>

<h3>Sekarang - 30 Depan</h3><br>
<?php
//mendapatkan tgl kemarin
$tglskr = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
$tglkemarin = date("Y-m-d", $tglskr);

//mendapatkan tgl 30 hari kemarin
$tgl_30_hari_lalu = mktime(0, 0, 0, date("m"), date("d") + 30, date("Y"));
$tgllalu = date("Y-m-d", $tgl_30_hari_lalu);

$tgl_skr = new DateTime($tglkemarin, new DateTimeZone("Asia/Jakarta"));
$tgl_lalu = new DateTime($tgllalu, new DateTimeZone("Asia/Jakarta"));

//looping 
do {
    echo $tgl_skr->format("Y-m-d");
    echo '<br>';
    $tgl_skr->modify("+1 day");
} while ($tgl_skr <= $tgl_lalu);
?>