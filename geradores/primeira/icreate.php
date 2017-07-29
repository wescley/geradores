<?php
session_start();


if(isset($_POST['publicidade'])){
	if(isset($_POST['imagem_publicidade'])){$imagem_publicidade = $_POST['imagem_publicidade'];}
	if(isset($_POST['link_publicidade'])){$link_publicidade = $_POST['link_publicidade'];}
}


if(isset($_SESSION['linha11'])){$col11 = $_SESSION['linha11'];}
if(isset($_SESSION['linha12'])){$col12 = $_SESSION['linha12'];}
if(isset($_SESSION['linha13'])){$col13 = $_SESSION['linha13'];}
if(isset($_SESSION['linha21'])){$col21 = $_SESSION['linha21'];}
if(isset($_SESSION['linha22'])){$col22 = $_SESSION['linha22'];}
if(isset($_SESSION['linha23'])){$col23 = $_SESSION['linha23'];}
if(isset($_SESSION['col31'])){$col31 = $_SESSION['col31'];}
if(isset($_SESSION['infopar_two_news'])){$infopar_two_news = $_SESSION['infopar_two_news'];}

//if(isset($_SESSION['blm'])){$blm = $_SESSION['blm'];}
//if(isset($_SESSION['blm_two_news'])){$blm_two_news = $_SESSION['blm_two_news'];}
//if(isset($_SESSION['bhe'])){$bhe = $_SESSION['bhe'];}
//if(isset($_SESSION['bhe_two_news'])){$bhe_two_news = $_SESSION['bhe_two_news'];}
//if(isset($_SESSION['bsa'])){$bsa = $_SESSION['bsa'];}
//if(isset($_SESSION['bsa_two_news'])){$bsa_two_news = $_SESSION['bsa_two_news'];}
//if(isset($_SESSION['cta'])){$cta = $_SESSION['cta'];}
//if(isset($_SESSION['cta_two_news'])){$cta_two_news = $_SESSION['cta_two_news'];}
//if(isset($_SESSION['fla'])){$fla = $_SESSION['fla'];}
//if(isset($_SESSION['fla_two_news'])){$fla_two_news = $_SESSION['fla_two_news'];}
//if(isset($_SESSION['fns'])){$fns = $_SESSION['fns'];}
//if(isset($_SESSION['fns_two_news'])){$fns_two_news = $_SESSION['fns_two_news'];}
//if(isset($_SESSION['pae'])){$pae = $_SESSION['pae'];}
//if(isset($_SESSION['pae_two_news'])){$pae_two_news = $_SESSION['pae_two_news'];}
//if(isset($_SESSION['rce'])){$rce = $_SESSION['rce'];}
//if(isset($_SESSION['rce_two_news'])){$rce_two_news = $_SESSION['rce_two_news'];}
//if(isset($_SESSION['rjo'])){$rjo = $_SESSION['rjo'];}
//if(isset($_SESSION['rjo_two_news'])){$rjo_two_news = $_SESSION['rjo_two_news'];}
//if(isset($_SESSION['sdr'])){$sdr = $_SESSION['sdr'];}
//if(isset($_SESSION['sdr_two_news'])){$sdr_two_news = $_SESSION['sdr_two_news'];}
//if(isset($_SESSION['spo'])){$spo = $_SESSION['spo'];}
//if(isset($_SESSION['spo_two_news'])){$spo_two_news = $_SESSION['spo_two_news'];}

//$checkblm = $_SESSION['checkblm'];
//$checkblm_two_news = $_SESSION['checkblm_two_news'];
//$checkbhe = $_SESSION['checkbhe'];
//$checkbhe_two_news = $_SESSION['checkbhe_two_news'];
//$checkbsa = $_SESSION['checkbsa'];
//$checkbsa_two_news = $_SESSION['checkbsa_two_news'];
//$checkcta = $_SESSION['checkcta'];
//$checkcta_two_news = $_SESSION['checkcta_two_news'];
//$checkfla = $_SESSION['checkfla'];
//$checkfla_two_news = $_SESSION['checkfla_two_news'];
//$checkfns = $_SESSION['checkfns'];
//$checkfns_two_news = $_SESSION['checkfns_two_news'];
//$checkpae = $_SESSION['checkpae'];
//$checkpae_two_news = $_SESSION['checkpae_two_news'];
//$checkrce = $_SESSION['checkrce'];
//$checkrce_two_news = $_SESSION['checkrce_two_news'];
//$checkrjo = $_SESSION['checkrjo'];
//$checkrjo_two_news = $_SESSION['checkrjo_two_news'];
//$checksdr = $_SESSION['checksdr'];
//$checksdr_two_news = $_SESSION['checksdr_two_news'];
//$checkspo = $_SESSION['checkspo'];
//$checkspo_two_news = $_SESSION['checkspo_two_news'];


$coluna12 = array ( "pessoas"  => array ( 'Pessoas',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-pessoas-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/pessoas/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-pessoas/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-pessoas-foot/',
					'#D498E3'
                                     ),
                   "educacao"  => array ( 'Educação',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-educacao-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/educacao/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-educacao/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-educacao-foot/',
					'#D25757'
                                     ),
                   "tecnologia"  => array ( 'Tecnologia',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-tecnologia-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/tecnologia/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-tecnologia/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-tecnologia-foot/',
					'#CCCCCC'
                                     ),
                   "logistica"  => array ( 'Logística',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-logistica-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/logistica/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-logistica/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-logistica-foot/',
					'#D3BC5F'
                                     ),
                   "rsc"  => array ( 'Responsabilidade Social e Cidadania',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-rsc-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/rsc/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-rsc/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-rsc-foot/',
					'#97D398'
                                     ),
                   "gestao"  => array ( 'Gestão',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-gestao-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/gestao.png/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-gestao/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-gestao-foot/',
					'#EB9D69'
                                     ),
		   "namidia"  => array ( 'Na mídia',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-namidia-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/namidia.png/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-namidia/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-namidia-foot/',
					'#EB9D69'
                                     ),
                   "consegi"  => array ( 'Consegi',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-consegi-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/consegi-1/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-consegi/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-consegi-foot/',
					'#92C131'
                                     )
);


//LINKS PARA IMAGENS POR SEÇÃO
$destaque= array ("Destaque",'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-destaque-top/','http://primeiraleitura.serpro.gov.br/img-newsletter/destaque/','http://primeiraleitura.serpro.gov.br/img-newsletter/bg-destaque/','http://primeiraleitura.serpro.gov.br/img-newsletter/bg-destaque-foot/','#F9F9F9');

$coluna3 = array ( "Informe Parlamentar"  => array ( 'Informe Parlamentar',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-info-parlamentar-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/info-parlamentar/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-info-parlamentar/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-info-parlamentar-foot/',
					'#4E6C3A'
                                     )
);

$region = array ( "blm"  => array ( 'Regional Belém',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-blm/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "bsa"  => array ( 'Regional Brasília',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-bsa.png/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "cta"  => array ( 'Regional Curitiba',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-cta/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "fla"  => array ( 'Regional Fortaleza',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-fla/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "bhe"  => array ( 'Regional Belo Horizonte',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-bhe/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "sdr"  => array ( 'Regional Salvador',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-sdr/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "rjo"  => array ( 'Regional Rio de Janeiro',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-rjo/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "spo"  => array ( 'Regional São Paulo',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-spo/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "rce"  => array ( 'Regional Recife',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-rce/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "fns"  => array ( 'Regional Florianópolis',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-fns/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     ),
                   "pae"  => array ( 'Regional Porto Alegre',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-pae/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/',
					'#E9F3FF'
                                     )
);

//MONTAR DESTAQUE
//function destaque($titulo, $content, $link, $imagem){ 
function destaque(){

global $destaque;
if(isset($_POST['titulo_destaque'])) {$titulo_destaque = $_POST['titulo_destaque'];}
if(isset($_POST['imagem_destaque'])) {$imagem_destaque = trim($_POST['imagem_destaque']);}
if(isset($_POST['link_destaque'])) {$link_destaque = trim($_POST['link_destaque']);}
if(isset($_POST['content_destaque'])) {$content_destaque = strip_tags($_POST['content_destaque']);}

echo <<<EOD
<table border="0" width="385" cellpadding="0" cellspacing="0" align="center" valign="top">
<tr><td colspan="2"><img src="{$destaque[1]}" style="vertical-align:bottom;" /></td></tr>
<tr><td colspan="2" background="{$destaque[3]}" style="background-color:{$destaque[5]};">
<div style="padding:10px 25px;">
<h2 style="margin:0;padding:0;"><img src="{$destaque[2]}" alt="{$destaque[0]}" /></h2>
<h3 style="font-family:Tahoma,arial,sans-serif;font-size:15px;padding:6px 0;margin:0;color:#4d4d4d;">$titulo_destaque</h3>
<table><tr><td valign="top"><img src="$imagem_destaque" alt="" height="90px" width="90px" style="padding-top:12px;padding-right:12px;" /></td>
<td valign="top" style="font:12px arial,helvetica,sans-serif;padding-top:12px;color:#4d4d4d;">$content_destaque
<p style="text-align:right;"><a href="$link_destaque" style="color:#f09347 !important;font-weight:bold;">mais+</a></p>
</td></tr></table></div>
</td></tr>
<tr><td valign="top" colspan="2"><img src="{$destaque[4]}" alt="" /></td></tr>
</table>
EOD;
}

// PUBLICIDADE
function publicidade(){
global $imagem_publicidade;
global $link_publicidade;
$imagem_publicidade = trim($imagem_publicidade);
$link_publicidade = trim($link_publicidade);
if (isset($_POST['publicidade']) )
	if(empty($_POST['link_publicidade'])){echo <<<EOD
<tr>
<td colspan="3">
<table border="0" width="600" height="100"cellpadding="0" cellspacing="0" align="center" valign="top""><tr><td><img style="border:none;" src="$imagem_publicidade" alt="" /></td></tr></table>
</td></tr>
EOD;
}
	else{echo <<<EOD
<tr>
<td colspan="3">
<table border="0" width="600" height="100"cellpadding="0" cellspacing="0" align="center" valign="top""><tr><td><a href="$link_publicidade"><img style="border:none;" src="$imagem_publicidade" alt="" /></a></td></tr></table>
</td></tr>
EOD;
	
	}

else{
echo <<<EOD
<tr style="display:none;">
<td colspan="3">
</td></tr>
EOD;
}
}

//MONTAR ARTIGOS DAS COLUNA 1
//function coluna11($col11){
function coluna11(){
global $col11;
//$check11 = $_SESSION['check11'];
global $coluna12;


if ($_SESSION['check11'] == true)
{
$content11 = strip_tags($_POST['content11']);
$link11 = trim($_POST['link11']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col11][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col11][3]}" valign="top" style="margin:0;padding:0;" style="background-color:{$coluna12[$col11][5]};">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col11][2]}" alt="{$coluna12[$col11][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo11']}</h3>
$content11
<p style="text-align:right;padding-top:10px;"><a href="$link11" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna12[$col11][4]}" alt="" width="183px" height="22px" /></td></tr>
</table>
EOD;
}
else {}
}

function coluna12(){
global $col12;
//$check12 = $_SESSION['check12'];
global $coluna12;


if ($_SESSION['check12'] == true){
$content12 = strip_tags($_POST['content12']);
$link12 = trim($_POST['link12']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col12][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col12][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col12][2]}" alt="{$coluna12[$col12][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo12']}</h3>
$content12
<p style="text-align:right;padding-top:10px;"><a href="$link12" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna12[$col12][4]}" alt="" width="183px" height="22px" /></td></tr>
</table>
EOD;
}
else {}
}

function coluna13(){
global $col13;
//$check13 = $_SESSION['check13'];
global $coluna12;

if ($_SESSION['check13'] == true)
{
$content13 = strip_tags($_POST['content13']);
$link13 = trim($_POST['link13']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col13][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col13][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col13][2]}" alt="{$coluna12[$col13][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo13']}</h3>
$content13
<p style="text-align:right;padding-top:10px;"><a href="$link13" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna12[$col13][4]}" alt="" width="183px" height="22px" /></td></tr>
</table>
EOD;
}
else {}
}


//MONTAR ARTIGOS DAS COLUNA 2
function coluna21(){
global $col21;
//$check21 = $_SESSION['check21'];
global $coluna12;


if ($_SESSION['check21'] == true)
{
$content21 = strip_tags($_POST['content21']);
$link21 = trim($_POST['link21']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col21][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col21][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col21][2]}" alt="{$coluna12[$col21][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo21']}</h3>
$content21
<p style="text-align:right;padding-top:10px;"><a href="$link21" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna12[$col21][4]}" alt="" width="183px" height="22px" /></td></tr>
</table>
EOD;
}
else {}
}

function coluna22(){
global $col22;
//$check22 = $_SESSION['check22'];
global $coluna12;


if ($_SESSION['check22'] == true)
{
$content22 = strip_tags($_POST['content22']);
$link22 = trim($_POST['link22']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col22][1]}" width="183px" height="18px" alt="" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col22][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col22][2]}" alt="{$coluna12[$col22][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo22']}</h3>
$content22
<p style="text-align:right;padding-top:10px;"><a href="$link22" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna12[$col22][4]}" alt="" width="183px" height="22px" /></td></tr>
</table>
EOD;
}
else {}
}

function coluna23(){
global $col23;
//$check23 = $_SESSION['check23'];
global $coluna12;


if ($_SESSION['check23'] == true)
{
$content23 = strip_tags($_POST['content23']);
$link23 = trim($_POST['link23']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col23][1]}" width="183px" height="18px alt="" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col23][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col23][2]}" alt="{$coluna12[$col23][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo23']}</h3>
$content23
<p style="text-align:right;padding-top:10px;"><a href="$link23" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna12[$col23][4]}" alt="" width="183px" height="22px" /></td></tr>
</table>
EOD;
}
else {}
}


// MONTAR ARTIGOS DA COLUNA 3
// INFORME PARLAMENTAR
function coluna31(){
global $col31;
//$check31 = $_SESSION['check31'];
global $coluna3;
//global $infopar_two_news;


if ($_SESSION['check31'] == true && $_SESSION['infopar_two_news'] == false){
$content31 = strip_tags($_POST['content31']);
$link31 = trim($_POST['link31']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna3[$col31][1]}" width="184px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna3[$col31][3]}" valign="top" style="margin:0;padding:0;color:#ffffff !important;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna3[$col31][2]}" alt="{$coluna3[$col31][0]}" /></h2>
<div style="padding:0 30px 0 50px;color:#ffffff;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo31']}</h3>
$content31
<p style="text-align:right;padding-top:10px;"><a href="$link31" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna3[$col31][4]}" alt="" width="184px" height="22px" /></td></tr>
</table>
EOD;
}
elseif ($_SESSION['check31'] == true && $_SESSION['infopar_two_news'] == true){
$content31 = strip_tags($_POST['content31']);
$link31 = trim($_POST['link31']);
$content312 = strip_tags($_POST['content312']);
$link312 = trim($_POST['link312']);
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna3[$col31][1]}" width="184px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna3[$col31][3]}" valign="top" style="margin:0;padding:0;color:#ffffff !important;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna3[$col31][2]}" alt="{$coluna3[$col31][0]}" /></h2>
<div style="padding:0 30px 0 50px;color:#ffffff;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo31']}</h3>
$content31
<p style="text-align:right;"><a style="color:#ffffff !important;font-weight:bold;" href="$link31">mais+</a></p>
</div>
<hr style="width:100px;" />
<div style="padding:0 30px 0 50px;color:#ffffff;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">{$_POST['titulo312']}</h3>
$content312
<p style="text-align:right;padding-top:10px;"><a href="$link312" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna3[$col31][4]}" alt="" width="184px" height="22px" /></td></tr>
</table>
EOD;
}
elseif ($_SESSION['check31'] == false && $_SESSION['infopar_two_news'] == false){}
}

// REGIONAIS
function regionais($name){
switch ($name) {
    case 'blm':
        output($name);
        break;
    case 'bhe':
        output($name);
        break;
    case 'bsa':
        output($name);
        break;
    case 'cta':
        output($name);
        break;
    case 'fla':
        output($name);
        break;
    case 'fns':
        output($name);
        break;
    case 'pae':
        output($name);
        break;
    case 'rce':
        output($name);
        break;
    case 'rjo':
        output($name);
        break;
    case 'sdr':
        output($name);
        break;
    case 'spo':
        output($name);
        break;
}
}

function output($name){

global $region;
//global $checkblm;
//global $checkbhe;
//global $checkbsa;
//global $checkcta;
//global $checkfla;
//global $checkfns;
//global $checkpae;
//global $checkrce;
//global $checkrjo;
//global $checksdr;
//global $checkspo;

//$checkblm = $_SESSION['checkblm'];
//$checkblm_two_news = $_SESSION['checkblm_two_news'];

if ($_SESSION['checkblm'] == true && $name == "blm"){
//	global $blm;
//	global $blm_two_news;

//	global $checkblm_two_news;
	//global $title_blm;
	
	$title_1 = strip_tags($_POST['title_blm']);
	//global $link_blm;
	$link_1 = trim($_POST['link_blm']);
	//global $content_blm;
	$content_blm = strip_tags($_POST['content_blm']);
	$content_1 = $content_blm;
	//global $content_blm2;
	if(isset($_POST['content_blm2'])){$content_blm2 = strip_tags($_POST['content_blm2']);
	$content_2 = $content_blm2;}else{$content_2="";}
	//global $title_blm2;
	if(isset($_POST['title_blm2'])){$title_2 = strip_tags($_POST['title_blm2']);}else{$title_2="";}
	//global $link_blm2;
	if(isset($_POST['link_blm2'])){$link_2 = trim($_POST['link_blm2']);}else{$link_2="";}

}
elseif($_SESSION['checkblm'] == false && $name == "blm"){}
else{}

if ($_SESSION['checkbhe'] == true && $name == "bhe"){
//	global $bhe;
//	global $bhe_two_news;

//	global $checkbhe_two_news;
//	global $title_bhe;
	$title_1 = strip_tags($_POST['title_bhe']);
//	global $link_bhe;
	$link_1 = trim($_POST['link_bhe']);
	//global $content_bhe;
	$content_bhe = strip_tags($_POST['content_bhe']);
	$content_1 = $content_bhe;
	//global $content_bhe2;
	if(isset($_POST['content_bhe2'])){$content_bhe2 = strip_tags($_POST['content_bhe2']);
	$content_2 = $content_bhe2;}else{$content_2="";}
	//global $title_bhe2;
	if(isset($_POST['title_bhe2'])){$title_2 = strip_tags($_POST['title_bhe2']);}else{$title_2="";}
	//global $link_bhe2;
	if(isset($_POST['link_bhe2'])){$link_2 = trim($_POST['link_bhe2']);}else{$link_2="";}
	
//	global $bhe;
//	echo $bhe;
}
elseif($_SESSION['checkbhe'] == false && $name == "bhe"){}
else{}


if ($_SESSION['checkbsa'] == true && $name == "bsa"){
//	global $bsa;
//	global $bsa_two_news;

//	global $checkbsa_two_news;
//	global $title_bsa;
	$title_1 = strip_tags($_POST['title_bsa']);
//	global $link_bsa;
	$link_1 = trim($_POST['link_bsa']);
//	global $content_bsa;
	$content_bsa = strip_tags($_POST['content_bsa']);
	$content_1 = $content_bsa;
//	global $content_bsa2;
	if(isset($_POST['content_bsa2'])){$content_bsa2 = strip_tags($_POST['content_bsa2']);
	$content_2 = $content_bsa2;}else{$content_2="";}
	//global $title_bsa2;
	if(isset($_POST['title_bsa2'])){$title_2 = strip_tags($_POST['title_bsa2']);}else{$title_2="";}
	//global $link_bsa2;
	if(isset($_POST['link_bsa2'])){$link_2 = trim($_POST['link_bsa2']);}else{$link_2="";}

//	global $bsa;
//	echo $bsa;
}
elseif($_SESSION['checkbsa'] == false && $name == "bsa"){}
else{}
if ($_SESSION['checkcta'] == true && $name == "cta"){
//	global $cta;
//	global $cta_two_news;

//	global $checkcta_two_news;
//	global $title_cta;
	$title_1 = strip_tags($_POST['title_cta']);
//	global $link_cta;
	$link_1 = trim($_POST['link_cta']);
//	global $content_cta;
	$content_cta = strip_tags($_POST['content_cta']);
	$content_1 = $content_cta;
//	global $content_cta2;
	if(isset($_POST['content_cta2'])){$content_cta2 = strip_tags($_POST['content_cta2']);
	$content_2 = $content_cta2;}else{$content_2="";}
	//global $title_cta2;
	if(isset($_POST['title_cta2'])){$title_2 = strip_tags($_POST['title_cta2']);}else{$title_2="";}
	//global $link_cta2;
	if(isset($_POST['link_cta2'])){$link_2 = trim($_POST['link_cta2']);}else{$link_2="";}
//	global $cta;
//	echo $cta;
}
elseif($_SESSION['checkcta'] == false && $name == "cta"){}
else{}
if ($_SESSION['checkfla'] == true && $name == "fla"){
//	global $fla;
//	global $fla_two_news;

//	global $checkfla_two_news;
//	global $title_fla;
	$title_1 = strip_tags($_POST['title_fla']);
//	global $link_fla;
	$link_1 = trim($_POST['link_fla']);
//	global $content_fla;
	$content_fla = strip_tags($_POST['content_fla']);
	$content_1 = $content_fla;
//	global $content_fla2;
		if(isset($_POST['content_fla2'])){$content_fla2 = strip_tags($_POST['content_fla2']);
	$content_2 = $content_fla2;}else{$content_2="";}
	//global $title_cta2;
	if(isset($_POST['title_fla2'])){$title_2 = strip_tags($_POST['title_fla2']);}else{$title_2="";}
	//global $link_fla2;
	if(isset($_POST['link_fla2'])){$link_2 = trim($_POST['link_fla2']);}else{$link_2="";}
//	global $fla;
//	echo $fla;
}
elseif($_SESSION['checkfla'] == false && $name == "fla"){}
else{}


if ($_SESSION['checkfns'] == true && $name == "fns"){
//	global $fns;
//	global $fns_two_news;

//	global $checkfns_two_news;
//	global $title_fns;
	$title_1 = strip_tags($_POST['title_fns']);
//	global $link_fns;
	$link_1 = trim($_POST['link_fns']);
//	global $content_fns;
	$content_fns = strip_tags($_POST['content_fns']);
	$content_1 = $content_fns;
//	global $content_fns2;
	if(isset($_POST['content_fns2'])){$content_fns2 = strip_tags($_POST['content_fns2']);
	$content_2 = $content_fns2;}else{$content_2="";}
//	global $title_fns2;
	if(isset($_POST['title_fns2'])){$title_2 = strip_tags($_POST['title_fns2']);}else{$title_2="";}
//	global $link_fns2;
	if(isset($_POST['link_fns2'])){$link_2 = trim($_POST['link_fns2']);}else{$link_2="";}
//	global $fnsa;
//	echo $fns;
}
elseif($_SESSION['checkfns'] == false && $name == "fns"){}
else{}

if ($_SESSION['checkpae'] == true && $name == "pae"){
//	global $pae;
//	global $pae_two_news;

//	global $checkpae_two_news;
//	global $title_pae;
	$title_1 = strip_tags($_POST['title_pae']);
//	global $link_pae;
	$link_1 = trim($_POST['link_pae']);
//	global $content_pae;
	$content_pae = strip_tags($_POST['content_pae']);
	$content_1 = $content_pae;
//	global $content_pae2;
	if(isset($_POST['content_pae2'])){$content_pae2 = strip_tags($_POST['content_pae2']);
	$content_2 = $content_pae2;}else{$content_2="";}
//	global $title_pae2;
	if(isset($_POST['title_pae2'])){$title_2 = strip_tags($_POST['title_pae2']);}else{$title_2="";}
//	global $link_pae2;
	if(isset($_POST['link_pae2'])){$link_2 = trim($_POST['link_pae2']);}else{$link_2="";}
//	global $pae;
//	echo $pae;
}
elseif($_SESSION['checkpae'] == false && $name == "pae"){}
else{}

// NEED TO UPDATE FROM DOWN HERE

if ($_SESSION['checkrce'] == true && $name == "rce"){
//	global $rce;
//	global $rce_two_news;

//	global $checkrce_two_news;
//	global $title_rce;
	$title_1 = strip_tags($_POST['title_rce']);
//	global $link_rce;
	$link_1 = trim($_POST['link_rce']);
//	global $content_rce;
	$content_rce = strip_tags($_POST['content_rce']);
	$content_1 = $content_rce;
//	global $content_rce2;
	if(isset($_POST['content_rce2'])){$content_rce2 = strip_tags($_POST['content_rce2']);
	$content_2 = $content_rce2;}else{$content_2="";}
//	global $title_rce2;
	if(isset($_POST['title_rce2'])){$title_2 = strip_tags($_POST['title_rce2']);}else{$title_2="";}
//	global $link_rce2;
	if(isset($_POST['link_rce2'])){$link_2 = trim($_POST['link_rce2']);}else{$link_2="";}
//	global $rce;
//	echo $rce;
}
elseif($_SESSION['checkrce'] == false && $name == "rce"){}
else{}

if ($_SESSION['checkrjo'] == true && $name == "rjo"){
//	global $rjo;
//	global $rjo_two_news;

//	global $checkrjo_two_news;
//	global $title_rjo;
	$title_1 = strip_tags($_POST['title_rjo']);
//	global $link_rjo;
	$link_1 = trim($_POST['link_rjo']);
//	global $content_rjo;
	$content_rjo = strip_tags($_POST['content_rjo']);
	$content_1 = $content_rjo;
//	global $content_rjo2;
	if(isset($_POST['content_rjo2'])){$content_rjo2 = strip_tags($_POST['content_rjo2']);
	$content_2 = $content_rjo2;}else{$content_2="";}
//	global $title_rjo2;
	if(isset($_POST['title_rjo2'])){$title_2 = strip_tags($_POST['title_rjo2']);}else{$title_2="";}
//	global $link_rjo2;
	if(isset($_POST['link_rjo2'])){$link_2 = trim($_POST['link_rjo2']);}else{$link_2="";}
//	global $rjo;
//	echo $rjo;
}
elseif($_SESSION['checkrjo'] == false && $name == "rjo"){}
else{}

if ($_SESSION['checksdr'] == true && $name == "sdr"){
//	global $sdr;
//	global $sdr_two_news;

//	global $checksdr_two_news;
//	global $title_sdr;
	$title_1 = strip_tags($_POST['title_sdr']);
//	global $link_sdr;
	$link_1 = trim($_POST['link_sdr']);
//	global $content_sdr;
	$content_sdr = strip_tags($_POST['content_sdr']);
	$content_1 = $content_sdr;
//	global $content_sdr2;
	if(isset($_POST['content_sdr2'])){$content_sdr2 = strip_tags($_POST['content_sdr2']);
	$content_2 = $content_sdr2;}else{$content_2="";}
//	global $title_sdr2;
	if(isset($_POST['title_sdr2'])){$title_2 = strip_tags($_POST['title_sdr2']);}else{$title_2="";}
//	global $link_sdr2;
	if(isset($_POST['link_sdr2'])){$link_2 = trim($_POST['link_sdr2']);}else{$link_2="";}
//	global $sdr;
//	echo $sdr;
}
elseif($_SESSION['checksdr'] == false && $name == "sdr"){}
else{}

if ($_SESSION['checkspo'] == true && $name == "spo"){
//	global $spo;
//	global $spo_two_news;

//	global $checkspo_two_news;
//	global $title_spo;
	$title_1 = strip_tags($_POST['title_spo']);
//	global $link_spo;
	$link_1 = trim($_POST['link_spo']);
//	global $content_spo;
	$content_spo = strip_tags($_POST['content_spo']);
	$content_1 = $content_spo;
//	global $content_spo2;
	if(isset($_POST['content_spo2'])){$content_spo2 = strip_tags($_POST['content_spo2']);
	$content_2 = $content_spo2;}else{$content_2="";}
//	global $title_spo2;
	if(isset($_POST['title_spo2'])){$title_2 = strip_tags($_POST['title_spo2']);}else{$title_2="";}
//	global $link_spo2;
	if(isset($_POST['link_spo2'])){$link_2 = trim($_POST['link_spo2']);}else{$link_2="";}
//	global $spo;
//	echo $spo;
}
elseif($_SESSION['checksdr'] == false && $name == "sdr"){}
else{}


$regional_1 = <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$region[$name][1]}" width="184px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$region[$name][3]}" valign="top" style="margin:0;padding:0;color:#4d4d4d !important;">
<h2 style="font-size:14px;margin:0;"><img src="{$region[$name][2]}" alt="{$region[$name][0]}" /></h2>
<div style="padding:0 30px 0 50px;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$title_1</h3>
$content_1
<p style="text-align:right;padding-top:10px;"><a href="$link_1" style="color:#37ABC8 !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$region[$name][4]}" alt="" width="184px" height="22px" /></td></tr>
</table>
EOD;

$regional_2 = <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$region[$name][1]}" width="184px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$region[$name][3]}" valign="top" style="margin:0;padding:0;color:#4d4d4d !important;">
<h2 style="font-size:14px;margin:0;"><img src="{$region[$name][2]}" alt="{$region[$name][0]}" /></h2>
<div style="padding:0 30px 0 50px;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$title_1</h3>
$content_1
<p style="text-align:right;padding-top:10px;"><a style="color:#37ABC8 !important;font-weight:bold;" href="$link_1">mais+</a></p>
</div>
<hr style="width:100px;" />
<div style="padding:0 30px 0 50px;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$title_2</h3>
$content_2
<p style="text-align:right;padding-top:10px;"><a style="color:#37ABC8 !important;font-weight:bold;" href="$link_2">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$region[$name][4]}" alt="" width="184px" height="22px" /></td></tr>
</table>
EOD;

//BLM CHECK
if($_SESSION['checkblm'] == true && $name == "blm"){

	if($_SESSION['checkblm'] == true && $_SESSION['checkblm_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkblm'] == true && $_SESSION['checkblm_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkblm'] == false && $name == "blm") {}
else{}// END BLM CHECK

//BHE CHECK
if($_SESSION['checkbhe'] == true && $name == "bhe"){

	if($_SESSION['checkbhe'] == true && $_SESSION['checkbhe_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkbhe'] == true && $_SESSION['checkbhe_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkbhe'] == false && $name == "bhe") {}
else{}// END BLM CHECK

//BSA CHECK
if($_SESSION['checkbsa'] == true && $name == "bsa"){

	if($_SESSION['checkbsa'] == true && $_SESSION['checkbsa_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkbsa'] == true && $_SESSION['checkbsa_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkbsa'] == false && $name == "bsa") {}
else{}// END BSA CHECK

//CTA CHECK
if($_SESSION['checkcta'] == true && $name == "cta"){

	if($_SESSION['checkcta'] == true && $_SESSION['checkcta_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkcta'] == true && $_SESSION['checkcta_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkcta'] == false && $name == "cta") {}
else{}// END CTA CHECK

//FLA CHECK
if($_SESSION['checkfla'] == true && $name == "fla"){

	if($_SESSION['checkfla'] == true && $_SESSION['checkfla_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkfla'] == true && $_SESSION['checkfla_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkfla'] == false && $name == "fla") {}
else{}// END FLA CHECK

//FNS CHECK
if($_SESSION['checkfns'] == true && $name == "fns"){

	if($_SESSION['checkfns'] == true && $_SESSION['checkfns_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkfns'] == true && $_SESSION['checkfns_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkfns'] == false && $name == "fns") {}
else{}// END FNS CHECK

//PAE CHECK
if($_SESSION['checkpae'] == true && $name == "pae"){

	if($_SESSION['checkpae'] == true && $_SESSION['checkpae_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkpae'] == true && $_SESSION['checkpae_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkpae'] == false && $name == "pae") {}
else{}// END PAE CHECK

//RCE CHECK
if($_SESSION['checkrce'] == true && $name == "rce"){

	if($_SESSION['checkrce'] == true && $_SESSION['checkrce_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkrce'] == true && $_SESSION['checkrce_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkrce'] == false && $name == "rce") {}
else{}// END RCE CHECK

//RJO CHECK
if($_SESSION['checkrjo'] == true && $name == "rjo"){

	if($_SESSION['checkrjo'] == true && $_SESSION['checkrjo_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkrjo'] == true && $_SESSION['checkrjo_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkrjo'] == false && $name == "rjo") {}
else{}// END RJO CHECK

//SDR CHECK
if($_SESSION['checksdr'] == true && $name == "sdr"){

	if($_SESSION['checksdr'] == true && $_SESSION['checksdr_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checksdr'] == true && $_SESSION['checksdr_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checksdr'] == false && $name == "sdr") {}
else{}// END SDR CHECK

//SPO CHECK
if($_SESSION['checkspo'] == true && $name == "spo"){

	if($_SESSION['checkspo'] == true && $_SESSION['checkspo_two_news'] == false){
	echo $regional_1;
}
	elseif($_SESSION['checkspo'] == true && $_SESSION['checkspo_two_news'] == true){
	echo $regional_2;
	}

}
elseif($_SESSION['checkspo'] == false && $name == "spo") {}
else{}// END SPO CHECK

}//end function output regionais

;?>
