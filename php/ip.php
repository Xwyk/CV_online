<?php
session_start();
    if(file_exists('txt/ip.txt')){
        $ip_f = fopen('txt/ip.txt', 'a+');
    }
    else{
        $ip_f = fopen('txt/ip.txt', 'a+');
    }
    if(!isset($_SESSION['recup_ip'])){
        $_SESSION['recup_ip'] = 'recup_ippip';
        fputs($ip_f, $compte);
        fputs($ip_f, " : ");
        fputs($ip_f, get_ip());
        fputs($ip_f, "\n");
    }
    fclose($ip_f);
/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
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