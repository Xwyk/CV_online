<?php
	session_start();
    if(file_exists('../txt/geoloc.txt')){
        $geo_f = fopen('../txt/geoloc.txt', 'a+');
    }
    else{
        $geo_f = fopen('../txt/geoloc.txt', 'a+');
    }
    if(!isset($_SESSION['recup_geo'])){
        $_SESSION['recup_geo'] = 'recup_geo';
        fputs($geo_f, date("Y-m-d.H:i:s"));
        fputs($geo_f, " , ");
        fputs($geo_f, $_POST['latitude']);
        fputs($geo_f, " , ");
        fputs($geo_f, $_POST['longitude']);
        fputs($geo_f, " , ");
    	fputs($geo_f, get_ip());
        fputs($geo_f, "\n");
    }
    fclose($geo_f);

	function get_ip() {
		// IP si internet partagé
		if (isset($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		// IP derrière un proxy
		elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		// Sinon : IP normale
		else {
			return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
		}
	}
?>