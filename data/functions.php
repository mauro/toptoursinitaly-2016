<?php
function get_tours() {
		$filename = realpath(dirname(__FILE__)).'/tours.csv';
		$header = NULL;
		$delimiter = ',';
	    $data = array();
	    if (($handle = fopen($filename, 'r')) !== FALSE)
	    {
	        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
	        {
	            if(!$header) $header = $row;
	            else {
	            		if (!empty($row[2])) {
	            			$row[2] = str_replace(array("\r\n", "\r", "\n", ","), "", $row[2]); 
	            			//$row[2] = explode(', ', $row[3]);
	            		}
	            		$data[] = array_combine($header, $row);
	            }
	        }
	        fclose($handle);
	    }
	    return $data;
}
function get_tour($slug) {
	$tours = get_tours();
	foreach ($tours as $tour) {
		if ($tour['slug'] == $slug) {
			return $tour;
		}
	}
	return NULL;
}
function get_testimonials() {
	$filename = realpath(dirname(__FILE__)).'/testimonials.csv';
		$header = NULL;
		$delimiter = ',';
	    $data = array();
	    if (($handle = fopen($filename, 'r')) !== FALSE)
	    {
	        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
	        {
	            if(!$header) $header = $row;
	            else $data[] = array_combine($header, $row);
	        }
	        fclose($handle);
	    }
	    return $data;
}
function htmlize($text) {
	$text = nl2br($text, false);
	$text = '<p>' . preg_replace('#(<br>[\r\n]+){2}#', '</p><p>', $text) . '</p>';
	return $text;
}
function not_found() {
	header("HTTP/1.0 404 Not Found");
    echo "Not Found.\n";
    die();
}
?>