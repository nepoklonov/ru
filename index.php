<h1>nepoklonov.ru</h1>
<?php
function get_raz($i) {
	$raz = "раз";
	if (($i < 10 || $i > 20) && ($i % 10 == 2 || $i % 10 == 3 || $i % 10 == 4)) {
		$raz .= "а";
	}
	return $raz;
}

$counter_filename = "counter.dat";
$counter = (int) file_get_contents($counter_filename);
echo "На этот сайт зашли $counter " . get_raz($counter) . " за последнее тысячелетие.<br>";
echo "На этот сайт не зашли " . (PHP_INT_MAX - $counter) . " " . get_raz(PHP_INT_MAX - $counter) . " за последнее тысячелетие.";
$counter++;
$counter_write = fopen($counter_filename, 'w');
fwrite($counter_write, $counter);
fclose($counter_write);
?>