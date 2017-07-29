
<?php 
function belem(){
//global $checkblm;
$data = date("j/n/Y");

	if ($_SESSION['checkblm'] == true){
ob_start();
regionais("blm");
$box_belem = ob_get_contents();
ob_end_clean();

	echo <<<EOD
	{$box_belem}
EOD;
	}
else{}
}

function belzonte(){
//global $checkbhe;
$data = date("j/n/Y");

	if ($_SESSION['checkbhe'] == true){
ob_start();
regionais("bhe");
$box_belzonte = ob_get_contents();
ob_end_clean();

	echo <<<EOD
	{$box_belzonte}
EOD;
	}
else{}
}

function brasilia(){
//global $checkbsa;

$data = date("j/n/Y");

	if ($_SESSION['checkbsa'] == true){
ob_start();
regionais("bsa");
$box_brasilia = ob_get_contents();
ob_end_clean();

	echo <<<EOD
	{$box_brasilia}
EOD;
	}
else{}
}


function curitiba(){
//global $checkcta;
$data = date("j/n/Y");

	if ($_SESSION['checkcta'] == true){
ob_start();
regionais("cta");
$box_curitiba = ob_get_contents();
ob_end_clean();
	echo <<<EOD
	{$box_curitiba}
EOD;
	}
else{}
}

function fortaleza(){
//global $checkfla;
//global $col31;
$data = date("j/n/Y");

	if ($_SESSION['checkfla'] == true){
ob_start();
regionais("fla");
$box_fortaleza = ob_get_contents();
ob_end_clean();



	echo <<<EOD
	{$box_fortaleza}
EOD;
	}
else{}
}

function floripa(){
//global $checkfns;
$data = date("j/n/Y");

	if ($_SESSION['checkfns'] == true){
ob_start();
regionais("fns");
$box_floripa = ob_get_contents();
ob_end_clean();


	echo <<<EOD
	{$box_floripa}
EOD;
	}
else{}
}

function portoalegre(){
//global $checkpae;
$data = date("j/n/Y");

	if ($_SESSION['checkpae'] == true){
ob_start();
regionais("pae");
$box_portoalegre = ob_get_contents();
ob_end_clean();


	echo <<<EOD
	{$box_portoalegre}
EOD;
	}
else{}
}

function salvador(){
//global $checksdr;
$data = date("j/n/Y");

	if ($_SESSION['checksdr'] == true){
ob_start();
regionais("sdr");
$box_salvador = ob_get_contents();
ob_end_clean();


	echo <<<EOD
	{$box_salvador}
EOD;
	}
else{}
}

function rio(){
//global $checkrjo;
$data = date("j/n/Y");

	if ($_SESSION['checkrjo'] == true){
ob_start();
regionais("rjo");
$box_rio = ob_get_contents();
ob_end_clean();

	echo <<<EOD
	{$box_rio}
EOD;
	}
else{}
}

function recife(){
//global $checkrce;
$data = date("j/n/Y");

	if ($_SESSION['checkrce'] == true){
ob_start();
regionais("rce");
$box_recife = ob_get_contents();
ob_end_clean();


	echo <<<EOD
	{$box_recife}
EOD;
	}
else{}
}

function sampa(){
//global $checkspo;
$data = date("j/n/Y");

	if ($_SESSION['checkspo'] == true){
ob_start();
regionais("spo");
$box_sampa = ob_get_contents();
ob_end_clean();

	echo <<<EOD
	{$box_sampa}
EOD;
	}
else{}
}

;?>
