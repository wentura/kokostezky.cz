<?php
if (!isset($_SESSION['counter'])) {
	$_SESSION['counter'] = 1;
	$file_month_ext = date('y-m');
	$counter_mesic_file = "visits-" . $file_month_ext . "";
	if (!file_exists('./visits/' . $counter_mesic_file)) {
		$month_visit_file = fopen('./visits/' . $counter_mesic_file, 'x+');
		$new_counter = 1;
	} elseif (file_exists("./visits/" . $counter_mesic_file)) {
		$month_visit_file = fopen("./visits/" . $counter_mesic_file, "r+");
		$last_counter = fread($month_visit_file, filesize('./visits/' . $counter_mesic_file));
		$new_counter = $last_counter + 1;
	}
	fclose($month_visit_file);
	$month_visit_file_w = fopen('./visits/' . $counter_mesic_file, 'w');
	fwrite($month_visit_file_w, $new_counter);
	fclose($month_visit_file_w);
}
