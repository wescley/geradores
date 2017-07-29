<?php
session_start();

function coluna1FORM(){
// COLUMN 1 ROW 1
if (isset($_POST['col1_1']))
{
$col11 = $_POST['linha1_1'];
$_SESSION['linha11'] = $col11;
$_SESSION['check11'] = true;

echo <<<EOD
<h2>$col11</h2>
<label for="titulo11">Título</label>
<input type="text" name="titulo11" size="50" />
<br />
<label for="link11">Link para a Notícia</label>
<input type="text" name="link11" size="50" />
<br />
<label for="content11">Chamada da Notícia</label>
<textarea name="content11" cols="50" rows="5"></textarea>
EOD;
}
else {$_SESSION['check11'] = false;}

// COLUMN 1 ROW 2
if (isset($_POST['col1_2']) )
{
$col12 = $_POST['linha1_2'];
$_SESSION['linha12'] = $col12;
$_SESSION['check12'] = true;

echo <<<EOD
<h2>$col12</h2>
<label for="titulo12">Título</label>
<input type="text" name="titulo12" size="50" />
<br />
<label for="link12">Link para a Notícia</label>
<input type="text" name="link12" size="50" />
<br />
<label for="content12">Chamada da Notícia</label>
<textarea name="content12" cols="50" rows="5"></textarea>
EOD;
}
else {$_SESSION['check12'] = false;}

// COLUMN 1 ROW 3
if (isset($_POST['col1_3']) )
{
$col13 = $_POST['linha1_3'];
$_SESSION['linha13'] = $col13;
$_SESSION['check13'] = true;
echo <<<EOD
<h2>$col13</h2>
<label for="titulo13">Título</label>
<input type="text" name="titulo13" size="50" />
<br />
<label for="link13">Link para a Notícia</label>
<input type="text" name="link13" size="50" />
<br />
<label for="content13">Chamada da Notícia</label>
<textarea name="content13" cols="50" rows="5"></textarea>
EOD;
}
else {$_SESSION['check13'] = false;}
}

// COLUNA 2
function coluna2FORM(){
if (isset($_POST['col2_1']) )
{
$col21 = $_POST['linha2_1'];
$_SESSION['linha21'] = $col21;
$_SESSION['check21'] = true;

echo <<<EOD
<h2>$col21</h2>
<label for="titulo21">Título</label>
<input type="text" name="titulo21" size="50" />
<br />
<label for="link21">Link para a Notícia</label>
<input type="text" name="link21" size="50" />
<br />
<label for="content21">Chamada da Notícia</label>
<textarea name="content21" cols="50" rows="5"></textarea>
EOD;
}
else {$_SESSION['check21'] = false;}

if (isset($_POST['col2_2']) )
{
$col22 = $_POST['linha2_2'];
$_SESSION['linha22'] = $col22;
$_SESSION['check22'] = true;

echo <<<EOD
<h2>$col22</h2>
<label for="titulo22">Título</label>
<input type="text" name="titulo22" size="50" />
<br />
<label for="link22">Link para a Notícia</label>
<input type="text" name="link22" size="50" />
<br />
<label for="content22">Chamada da Notícia</label>
<textarea name="content22" cols="50" rows="5"></textarea>
EOD;
}
else {$_SESSION['check22'] = false;}

if (isset($_POST['col2_3']) )
{
$col23 = $_POST['linha2_3'];
$_SESSION['linha23'] = $col23;
$_SESSION['check23'] = true;
echo <<<EOD
<h2>$col23</h2>
<label for="titulo23">Título</label>
<input type="text" name="titulo23" size="50" />
<br />
<label for="link23">Link para a Notícia</label>
<input type="text" name="link23" size="50" />
<br />
<label for="content23">Chamada da Notícia</label>
<textarea name="content23" cols="50" rows="5"></textarea>
EOD;
}
else {$_SESSION['check23'] = false;}
}

// COLUNA 3
function coluna3_parFORM(){

	if (isset($_POST['col3_1']) && !isset($_POST['infopar_two_news'])){
	$col31 = $_POST['col3_1'];
	$_SESSION['col31'] = $col31;
	$_SESSION['check31'] = true;
	$_SESSION['infopar_two_news'] = false;

	echo <<<EOD
	<h2>$col31</h2>
	<label for="titulo31">Título</label>
	<input type="text" name="titulo31" size="50" />
	<br />
	<label for="link31">Link para a Notícia</label>
	<input type="text" name="link31" size="50" />
	<br />
	<label for="content31">Chamada da Notícia</label>
	<textarea name="content31" cols="50" rows="5"></textarea>
EOD;
	}
	elseif (isset($_POST['col3_1']) && isset($_POST['infopar_two_news'])){
	$col31 = $_POST['col3_1'];
	$_SESSION['col31'] = $col31;
	$_SESSION['check31'] = true;
	$_SESSION['infopar_two_news'] = true;
	echo <<<EOD
	<h2>$col31</h2>
	<label for="titulo31">Título</label>
	<input type="text" name="titulo31" size="50" />
	<br />
	<label for="link31">Link para a Notícia</label>
	<input type="text" name="link31" size="50" />
	<br />
	<label for="content31">Chamada da Notícia</label>
	<textarea name="content31" cols="50" rows="5"></textarea>
	<hr />
	<h2>$col31 #2</h2>
	<label for="titulo312">Título</label>
	<input type="text" name="titulo312" size="50" />
	<br />
	<label for="link312">Link para a Notícia</label>
	<input type="text" name="link312" size="50" />
	<br />
	<label for="content312">Chamada da Notícia</label>
	<textarea name="content312" cols="50" rows="5"></textarea>
EOD;
	}
elseif (!isset($_POST['col3_1']) && !isset($_POST['infopar_two_news'])){
$_SESSION['check31'] = false;
$_SESSION['infopar_two_news'] = false;}
}

// REGIONAIS
function regFORM($reg){
$form1 = <<<EOD
<h2>regional $reg</h2>
<label for="title_$reg">Título</label>
<input type="text" name="title_$reg" size="50" />
<br />
<label for="link_$reg">Link para a Notícia</label>
<input type="text" name="link_$reg" size="50" />
<br />
<label for="content_$reg">Chamada da Notícia</label>
<textarea name="content_$reg" cols="50" rows="5"></textarea>
EOD;
$form2 = <<<EOD
<h2>Regional $reg</h2>
<label for="title_$reg">Título</label>
<input type="text" name="title_$reg" size="50" />
<br />
<label for="link_$reg">Link para a Notícia</label>
<input type="text" name="link_$reg" size="50" />
<br />
<label for="content_$reg">Chamada da Notícia</label>
<textarea name="content_$reg" cols="50" rows="5"></textarea>
<hr />
<h2>Regional $reg #2</h2>
<label for="title_{$reg}2">Título</label>
<input type="text" name="title_{$reg}2" size="50" />
<br />
<label for="link_{$reg}2">Link para a Notícia</label>
<input type="text" name="link_{$reg}2" size="50" />
<br />
<label for="content_{$reg}2">Chamada da Notícia</label>
<textarea name="content_{$reg}2" cols="50" rows="5"></textarea>
EOD;

// BLM CHECK
if($reg == "blm" && isset($_POST['blm'])){
	if(isset($_POST['blm']) && !isset($_POST['blm_two_news'])){
	$_SESSION['checkblm'] = true;
	$_SESSION['checkblm_two_news'] = false;
//	$_SESSION['blm'] = $_POST['blm'];
	echo $form1;}
	elseif(isset($_POST['blm']) && isset($_POST['blm_two_news'])){
	$_SESSION['checkblm'] = true;
	$_SESSION['checkblm_two_news'] = true;
//	$_SESSION['blm'] = $_POST['blm'];
//	$_SESSION['blm_two_news'] = $_POST['blm_two_news'];
	echo $form2;}
	}
elseif($reg == "blm" && !isset($_POST['blm']) && !isset($_POST['blm_two_news'])){
	$_SESSION['checkblm'] = false;
	$_SESSION['checkblm_two_news'] = false;}
else{}// END BLM CHECK

// BHE CHECK
if($reg == "bhe" && isset($_POST['bhe'])){
	if(isset($_POST['bhe']) && !isset($_POST['bhe_two_news'])){
	$_SESSION['checkbhe'] = true;
	$_SESSION['checkbhe_two_news'] = false;
	//$_POST['bhe'] = $_SESSION['bhe'];
	echo $form1;}
	elseif(isset($_POST['bhe']) && isset($_POST['bhe_two_news'])){
	$_SESSION['checkbhe'] = true;
	$_SESSION['checkbhe_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "bhe" && !isset($_POST['bhe']) && !isset($_POST['bhe_two_news'])){
	$_SESSION['checkbhe'] = false;
	$_SESSION['checkbhe_two_news'] = false;}
else{}// END BHE CHECK



// BSA CHECK 
if($reg == "bsa" && isset($_POST['bsa'])){
	if(isset($_POST['bsa']) && !isset($_POST['bsa_two_news'])){
	$_SESSION['checkbsa'] = true;
	$_SESSION['checkbsa_two_news'] = false;
//	$_POST['bsa'] = $_SESSION['bsa'];
	echo $form1;}
	elseif(isset($_POST['bsa']) && isset($_POST['bsa_two_news'])){
	$_SESSION['checkbsa'] = true;
	$_SESSION['checkbsa_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "bsa" && !isset($_POST['bsa']) && !isset($_POST['bsa_two_news'])){
	$_SESSION['checkbsa'] = false;
	$_SESSION['checkbsa_two_news'] = false;}
else{}// END BSA CHECK



// CTA CHECK
if($reg == "cta" && isset($_POST['cta'])){
	if(isset($_POST['cta']) && !isset($_POST['cta_two_news'])){
	$_SESSION['checkcta'] = true;
	$_SESSION['checkcta_two_news'] = false;
//	$_POST['cta'] = $_SESSION['cta'];
	echo $form1;}
	elseif(isset($_POST['cta']) && isset($_POST['cta_two_news'])){
	$_SESSION['checkcta'] = true;
	$_SESSION['checkcta_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "cta" && !isset($_POST['cta']) && !isset($_POST['cta_two_news'])){
	$_SESSION['checkcta'] = false;
	$_SESSION['checkcta_two_news'] = false;}
else{}// END CTA CHECK

// FLA CHECK
if($reg == "fla" && isset($_POST['fla'])){
	if(isset($_POST['fla']) && !isset($_POST['fla_two_news'])){
	$_SESSION['checkfla'] = true;
	$_SESSION['checkfla_two_news'] = false;
//	$_POST['fla'] = $_SESSION['fla'];
	echo $form1;}
	elseif(isset($_POST['fla']) && isset($_POST['fla_two_news'])){
	$_SESSION['checkfla'] = true;
	$_SESSION['checkfla_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "fla" && !isset($_POST['fla']) && !isset($_POST['fla_two_news'])){
	$_SESSION['checkfla'] = false;
	$_SESSION['checkfla_two_news'] = false;}
else{}// END FLA CHECK

// FNS CHECK
if($reg == "fns" && isset($_POST['fns'])){
	if(isset($_POST['fns']) && !isset($_POST['fns_two_news'])){
	$_SESSION['checkfns'] = true;
	$_SESSION['checkfns_two_news'] = false;
//	$_POST['fns'] = $_SESSION['fns'];
	echo $form1;}
	elseif(isset($_POST['fns']) && isset($_POST['fns_two_news'])){
	$_SESSION['checkfns'] = true;
	$_SESSION['checkfns_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "fns" && !isset($_POST['fns']) && !isset($_POST['fns_two_news'])){
	$_SESSION['checkfns'] = false;
	$_SESSION['checkfns_two_news'] = false;}
else{}// END FNS CHECK

// PAE CHECK
if($reg == "pae" && isset($_POST['pae'])){
	if(isset($_POST['pae']) && !isset($_POST['pae_two_news'])){
	$_SESSION['checkpae'] = true;
	$_SESSION['checkpae_two_news'] = false;
//	$_POST['pae'] = $_SESSION['pae'];
	echo $form1;}
	elseif(isset($_POST['pae']) && isset($_POST['pae_two_news'])){
	$_SESSION['checkpae'] = true;
	$_SESSION['checkpae_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "pae" && !isset($_POST['pae']) && !isset($_POST['pae_two_news'])){
	$_SESSION['checkpae'] = false;
	$_SESSION['checkpae_two_news'] = false;}
else{}// END PAE CHECK

// RCE CHECK
if($reg == "rce" && isset($_POST['rce'])){
	if(isset($_POST['rce']) && !isset($_POST['rce_two_news'])){
	$_SESSION['checkrce'] = true;
	$_SESSION['checkrce_two_news'] = false;
//	$_POST['rce'] = $_SESSION['rce'];
	echo $form1;}
	elseif(isset($_POST['rce']) && isset($_POST['rce_two_news'])){
	$_SESSION['checkrce'] = true;
	$_SESSION['checkrce_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "rce" && !isset($_POST['rce']) && !isset($_POST['rce_two_news'])){
	$_SESSION['checkrce'] = false;
	$_SESSION['checkrce_two_news'] = false;}
else{}// END RCE CHECK

// RJO CHECK
if($reg == "rjo" && isset($_POST['rjo'])){
	if(isset($_POST['rjo']) && !isset($_POST['rjo_two_news'])){
	$_SESSION['checkrjo'] = true;
	$_SESSION['checkrjo_two_news'] = false;
//	$_POST['rjo'] = $_SESSION['rjo'];
	echo $form1;}
	elseif(isset($_POST['rjo']) && isset($_POST['rjo_two_news'])){
	$_SESSION['checkrjo'] = true;
	$_SESSION['checkrjo_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "rjo" && !isset($_POST['rjo']) && !isset($_POST['rjo_two_news'])){
	$_SESSION['checkrjo'] = false;
	$_SESSION['checkrjo_two_news'] = false;}
else{}// END RJO CHECK

// SDR CHECK
if($reg == "sdr" && isset($_POST['sdr'])){
	if(isset($_POST['sdr']) && !isset($_POST['sdr_two_news'])){
	$_SESSION['checksdr'] = true;
	$_SESSION['checksdr_two_news'] = false;
//	$_POST['sdr'] = $_SESSION['sdr'];
	echo $form1;}
	elseif(isset($_POST['sdr']) && isset($_POST['sdr_two_news'])){
	$_SESSION['checksdr'] = true;
	$_SESSION['checksdr_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "sdr" && !isset($_POST['sdr']) && !isset($_POST['sdr_two_news'])){
	$_SESSION['checksdr'] = false;
	$_SESSION['checksdr_two_news'] = false;}
else{}// END SDR CHECK

// SPO CHECK
if($reg == "spo" && isset($_POST['spo'])){
	if(isset($_POST['spo']) && !isset($_POST['spo_two_news'])){
	$_SESSION['checkspo'] = true;
	$_SESSION['checkspo_two_news'] = false;
//	$_POST['spo'] = $_SESSION['spo'];
	echo $form1;}
	elseif(isset($_POST['spo']) && isset($_POST['spo_two_news'])){
	$_SESSION['checkspo'] = true;
	$_SESSION['checkspo_two_news'] = true;
	echo $form2;}
	}
elseif($reg == "spo" && !isset($_POST['spo']) && !isset($_POST['spo_two_news'])){
	$_SESSION['checkspo'] = false;
	$_SESSION['checkspo_two_news'] = false;}
else{}// END SPO CHECK

}// END function regionais
?>
