<?php
$dalTabletest_e = array();
$dalTabletest_e["NOM"] = array("type"=>200,"varname"=>"NOM", "name" => "NOM");
$dalTabletest_e["PRENOM"] = array("type"=>200,"varname"=>"PRENOM", "name" => "PRENOM");
$dalTabletest_e["NUMERO DE TELEPHONE"] = array("type"=>3,"varname"=>"NUMERO_DE_TELEPHONE", "name" => "NUMERO DE TELEPHONE");
$dalTabletest_e["ADRESSE MAIL"] = array("type"=>200,"varname"=>"ADRESSE_MAIL", "name" => "ADRESSE MAIL");
$dalTabletest_e["Heure d'enregistrement"] = array("type"=>135,"varname"=>"Heure_d_enregistrement", "name" => "Heure d'enregistrement");
$dalTabletest_e["Heure de modification"] = array("type"=>135,"varname"=>"Heure_de_modification", "name" => "Heure de modification");
	$dalTabletest_e["NUMERO DE TELEPHONE"]["key"]=true;
	$dalTabletest_e["ADRESSE MAIL"]["key"]=true;

$dal_info["test_at_localhost__test_e"] = &$dalTabletest_e;
?>