<?php
    $row = 1;
    $tab= array();
    if (($handle = fopen("../txt/geoloc.txt", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        $tabtemp=array();
        for ($c=0; $c < $num; $c++) {
            array_push($tabtemp, $data[$c]);
        }
        array_push($tab, $tabtemp);
      }
      fclose($handle);
    }
	echo json_encode($tab);
?>