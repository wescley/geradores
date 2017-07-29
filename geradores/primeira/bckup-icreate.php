<?php
session_start();

$col11 = $_SESSION['linha11'];
$col12 = $_SESSION['linha12'];
$col13 = $_SESSION['linha13'];
$col21 = $_SESSION['linha21'];
$col22 = $_SESSION['linha22'];
$col23 = $_SESSION['linha23'];
$col31 = $_SESSION['col31'];
$infopar_two_news = $_SESSION['infopar_two_news'];

$blm = $_SESSION['blm'];
$blm_two_news = $_SESSION['blm_two_news'];
$bhe = $_SESSION['bhe'];
$bhe_two_news = $_SESSION['bhe_two_news'];
$bsa = $_SESSION['bsa'];
$bsa_two_news = $_SESSION['bsa_two_news'];
$cta = $_SESSION['cta'];
$cta_two_news = $_SESSION['cta_two_news'];
$fla = $_SESSION['fla'];
$fla_two_news = $_SESSION['fla_two_news'];
$fns = $_SESSION['fns'];
$fns_two_news = $_SESSION['fns_two_news'];
$pae = $_SESSION['pae'];
$pae_two_news = $_SESSION['pae_two_news'];
$rce = $_SESSION['rce'];
$rce_two_news = $_SESSION['rce_two_news'];
$rjo = $_SESSION['rjo'];
$rjo_two_news = $_SESSION['rjo_two_news'];
$sdr = $_SESSION['sdr'];
$sdr_two_news = $_SESSION['sdr_two_news'];
$spo = $_SESSION['spo'];
$spo_two_news = $_SESSION['spo_two_news'];

$checkblm = $_SESSION['checkblm'];
$checkblm_two_news = $_SESSION['checkblm_two_news'];
$checkbhe = $_SESSION['checkbhe'];
$checkbhe_two_news = $_SESSION['checkbhe_two_news'];
$checkbsa = $_SESSION['checkbsa'];
$checkbsa_two_news = $_SESSION['checkbsa_two_news'];
$checkcta = $_SESSION['checkcta'];
$checkcta_two_news = $_SESSION['checkcta_two_news'];
$checkfla = $_SESSION['checkfla'];
$checkfla_two_news = $_SESSION['checkfla_two_news'];
$checkfns = $_SESSION['checkfns'];
$checkfns_two_news = $_SESSION['checkfns_two_news'];
$checkpae = $_SESSION['checkpae'];
$checkpae_two_news = $_SESSION['checkpae_two_news'];
$checkrce = $_SESSION['checkrce'];
$checkrce_two_news = $_SESSION['checkrce_two_news'];
$checkrjo = $_SESSION['checkrjo'];
$checkrjo_two_news = $_SESSION['checkrjo_two_news'];
$checksdr = $_SESSION['checksdr'];
$checksdr_two_news = $_SESSION['checksdr_two_news'];
$checkspo = $_SESSION['checkspo'];
$checkspo_two_news = $_SESSION['checkspo_two_news'];


$coluna12 = array ( "pessoas"  => array ( 'Pessoas',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-pessoas-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/pessoas/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-pessoas/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-pessoas-foot/'
                                     ),
                   "educacao"  => array ( 'Educação',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-educacao-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/educacao/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-educacao/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-educacao-foot/'
                                     ),
                   "tecnologia"  => array ( 'Tecnologia',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-tecnologia-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/tecnologia/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-tecnologia/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-tecnologia-foot/'
                                     ),
                   "logistica"  => array ( 'Logística',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-logistica-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/logistica/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-logistica/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-logistica-foot/'
                                     ),
                   "rsc"  => array ( 'Responsabilidade Social e Cidadania',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-rsc-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/rsc/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-rsc/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-rsc-foot/'
                                     ),
                   "gestao"  => array ( 'Gestão',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-gestao-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/gestao.png/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-gestao/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-gestao-foot/'
                                     ),
                   "consegi"  => array ( 'Consegi',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-consegi-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/consegi-1/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-consegi/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-consegi-foot/'
                                     )
);


//LINKS PARA IMAGENS POR SEÇÃO
$destaque= array ("Destaque",'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-destaque-top/','http://primeiraleitura.serpro.gov.br/img-newsletter/destaque/','http://primeiraleitura.serpro.gov.br/img-newsletter/bg-destaque/','http://primeiraleitura.serpro.gov.br/img-newsletter/bg-destaque-foot/');

$coluna3 = array ( "Informe Parlamentar"  => array ( 'Informe Parlamentar',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-info-parlamentar-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/info-parlamentar/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-info-parlamentar/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-info-parlamentar-foot/'
                                     )
);

$region = array ( "blm"  => array ( 'Regional Belém',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-blm/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "bsa"  => array ( 'Regional Brasília',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-bsa.png/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "cta"  => array ( 'Regional Curitiba',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-cta/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "fla"  => array ( 'Regional Fortaleza',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-fla/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "bhe"  => array ( 'Regional Belo Horizonte',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-bhe/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "sdr"  => array ( 'Regional Salvador',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-sdr/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "rjo"  => array ( 'Regional Rio de Janeiro',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-rjo/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "spo"  => array ( 'Regional São Paulo',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-spo/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "rce"  => array ( 'Regional São Paulo',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-rce/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "fns"  => array ( 'Regional Florianópolis',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-fns/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     ),
                   "pae"  => array ( 'Regional Porto Alegre',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-top/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/regional-pae/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional/',
					'http://primeiraleitura.serpro.gov.br/img-newsletter/bg-regional-foot/'
                                     )
);

//MONTAR DESTAQUE
function destaque(){
global $destaque;
global $titulo_destaque;
global $content_destaque;
global $link_destaque;
global $imagem_destaque;
$imagem_destaque = trim($imagem_destaque);
$content_destaque = stripslashes($content_destaque);
$link_destaque = trim($link_destaque);

echo <<<EOD
<table border="0" width="385" cellpadding="0" cellspacing="0" align="center" valign="top">
<tr><td colspan="2"><img src="{$destaque[1]}" alt="" style="vertical-align:bottom;" /></td></tr>
<tr><td colspan="2" background="{$destaque[3]}">
<div style="padding:10px 25px;">
<h2 style="margin:0;padding:0;"><img src="{$destaque[2]}" alt="{$destaque[0]}" width="74px" height="20px" /></h2>
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
function coluna11($col11){
global $col11;
global $check11;
global $coluna12;
global $titulo11;
global $link11;
global $content11;
$content11 = stripslashes($content11);
$link11 = trim($link11);

if ($check11 == "true")
{
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col11][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col11][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col11][2]}" alt="{$coluna12[$col11][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo11</h3>
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

function coluna12($col12){
global $col12;
global $check12;
global $coluna12;
global $titulo12;
global $link12;
global $content12;
$content12 = stripslashes($content12);
$link12 = trim($link12);

if ($check12 == "true")
{
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col12][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col12][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col12][2]}" alt="{$coluna12[$col12][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo12</h3>
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

function coluna13($col13){
global $col13;
global $check13;
global $coluna12;
global $titulo13;
global $link13;
global $content13;
$content13 = stripslashes($content13);
$link13 = trim($link13);

if ($check13 == "true")
{
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col13][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col13][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col13][2]}" alt="{$coluna12[$col13][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo13</h3>
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
function coluna21($col21){
global $col21;
global $check21;
global $coluna12;
global $titulo21;
global $link21;
global $content21;
$content21 = stripslashes($content21);
$link21 = trim($link21);

if ($check21 == "true")
{
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col21][1]}" width="183px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col21][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col21][2]}" alt="{$coluna12[$col21][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo21</h3>
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

function coluna22($col22){
global $col22;
global $check22;
global $coluna12;
global $titulo22;
global $link22;
global $content22;
$content22 = stripslashes($content22);
$link22 = trim($link22);

if ($check22 == "true")
{
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col22][1]}" width="183px" height="18px" alt="" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col22][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col22][2]}" alt="{$coluna12[$col22][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo22</h3>
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

function coluna23($col23){
global $col23;
global $check23;
global $coluna12;
global $titulo23;
global $link23;
global $content23;
$content23 = stripslashes($content23);
$link23 = trim($link23);

if ($check23 == "true")
{
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna12[$col23][1]}" width="183px" height="18px alt="" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna12[$col23][3]}" valign="top" style="margin:0;padding:0;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna12[$col23][2]}" alt="{$coluna12[$col23][0]}" /></h2>
<div style="padding:0 40px 0 40px;color:#292929;">
<h3 style="margin-top:5px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo23</h3>
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
function coluna31($col31){
global $col31;
global $check31;
global $coluna3;
global $titulo31;
global $titulo312;
global $link31;
global $link312;
global $content31;
global $content312;
global $infopar_two_news;
$content31 = stripslashes($content31);
$link31 = trim($link31);
$content312 = stripslashes($content312);
$link312 = trim($link312);

if ($check31 == "true" && $infopar_two_news == "false"){
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna3[$col31][1]}" width="184px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna3[$col31][3]}" valign="top" style="margin:0;padding:0;color:#ffffff !important;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna3[$col31][2]}" alt="{$coluna3[$col31][0]}" /></h2>
<div style="padding:0 30px 0 50px;color:#ffffff;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo31</h3>
$content31
<p style="text-align:right;padding-top:10px;"><a href="$link31" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna3[$col31][4]}" alt="" width="184px" height="22px" /></td></tr>
</table>
EOD;
}
elseif ($check31 == "true" && $infopar_two_news == "true"){
echo <<<EOD
<table border="0" cellpadding="0" cellspacing="0" style="padding-top:40px;font-size:11px;">
<tr><td width="200px" height="18px"><img src="{$coluna3[$col31][1]}" width="184px" height="18px" style="vertical-align:bottom;" /></td></tr>
<tr><td background="{$coluna3[$col31][3]}" valign="top" style="margin:0;padding:0;color:#ffffff !important;">
<h2 style="font-size:14px;margin:0;"><img src="{$coluna3[$col31][2]}" alt="{$coluna3[$col31][0]}" /></h2>
<div style="padding:0 30px 0 50px;color:#ffffff;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo31</h3>
$content31
<p style="text-align:right;"><a style="color:#ffffff !important;font-weight:bold;" href="$link31">mais+</a></p>
</div>
<hr style="width:100px;" />
<div style="padding:0 30px 0 50px;color:#ffffff;">
<h3 style="margin-top:10px;font-size:13px;font-family:Tahoma,arial,sans-serif;">$titulo312</h3>
$content312
<p style="text-align:right;padding-top:10px;"><a href="$link312" style="color:#ffffff !important;font-weight:bold;">mais+</a></p>
</div>
</td></tr>
<tr><td width="200px" height="22px" style="margin:0;padding:0;"><img src="{$coluna3[$col31][4]}" alt="" width="184px" height="22px" /></td></tr>
</table>
EOD;
}
elseif ($check31 == "false" && $infopar_two_news == "false"){}
}

// REGIONAIS
function regionais($name){
switch ($name) {
    case blm:
        output($name);
        break;
    case bhe:
        output($name);
        break;
    case bsa:
        output($name);
        break;
    case cta:
        output($name);
        break;
    case fla:
        output($name);
        break;
    case fns:
        output($name);
        break;
    case pae:
        output($name);
        break;
    case rce:
        output($name);
        break;
    case rjo:
        output($name);
        break;
    case sdr:
        output($name);
        break;
    case spo:
        output($name);
        break;
}
}

function output($name){

global $region;
global $checkblm;
global $checkbhe;
global $checkbsa;
global $checkcta;
global $checkfla;
global $checkfns;
global $checkpae;
global $checkrce;
global $checkrjo;
global $checksdr;
global $checkspo;


if ($checkblm == "true" && $name == "blm"){
	global $blm;
	global $blm_two_news;

	global $checkblm_two_news;
	global $title_blm;
	$title_1 = $title_blm;
	global $link_blm;
	$link_1 = trim($link_blm);
	global $content_blm;
	$content_blm = stripslashes($content_blm);
	$content_1 = $content_blm;
	global $content_blm2;
	$content_blm2 = stripslashes($content_blm2);
	$content_2 = $content_blm2;
	global $title_blm2;
	$title_2 = $title_blm2;
	global $link_blm2;
	$link_2 = trim($link_blm2);
	$link_2 = $link_blm2;

}
elseif($checkblm == "false" && $name == "blm"){}
else{}

if ($checkbhe == "true" && $name == "bhe"){
	global $bhe;
	global $bhe_two_news;

	global $checkbhe_two_news;
	global $title_bhe;
	$title_1 = $title_bhe;
	global $link_bhe;
	$link_1 = trim($link_bhe);
	global $content_bhe;
	$content_bhe = stripslashes($content_bhe);
	$content_1 = $content_bhe;
	global $content_bhe2;
	$content_bhe2 = stripslashes($content_bhe2);
	$content_2 = $content_bhe2;
	global $title_bhe2;
	$title_2 = $title_bhe2;
	global $link_bhe2;
	$link_2 = trim($link_bhe2);
	global $bhe;
	echo $bhe;
}
else{}
if ($checkbsa == "true" && $name == "bsa"){
	global $bsa;
	global $bsa_two_news;

	global $checkbsa_two_news;
	global $title_bsa;
	$title_1 = $title_bsa;
	global $link_bsa;
	$link_1 = trim($link_bsa);
	global $content_bsa;
	$content_bsa = stripslashes($content_bsa);
	$content_1 = $content_bsa;
	global $content_bsa2;
	$content_bsa2 = stripslashes($content_bsa2);
	$content_2 = $content_bsa2;
	global $title_bsa2;
	$title_2 = $title_bsa2;
	global $link_bsa2;
	$link_2 = trim($link_bsa2);
	global $bsa;
	echo $bsa;
}
else{}
if ($checkcta == "true" && $name == "cta"){
	global $cta;
	global $cta_two_news;

	global $checkcta_two_news;
	global $title_cta;
	$title_1 = $title_cta;
	global $link_cta;
	$link_1 = trim($link_cta);
	global $content_cta;
	$content_cta = stripslashes($content_cta);
	$content_1 = $content_cta;
	global $content_cta2;
	$content_cta2 = stripslashes($content_cta2);
	$content_2 = $content_cta2;
	global $title_cta2;
	$title_2 = $title_cta2;
	global $link_cta2;
	$link_2 = trim($link_cta2);
	global $cta;
	echo $cta;
}
else{}
if ($checkfla == "true" && $name == "fla"){
	global $fla;
	global $fla_two_news;

	global $checkfla_two_news;
	global $title_fla;
	$title_1 = $title_fla;
	global $link_fla;
	$link_1 = trim($link_fla);
	global $content_fla;
	$content_fla = stripslashes($content_fla);
	$content_1 = $content_fla;
	global $content_fla2;
	$content_fla2 = stripslashes($content_fla2);
	$content_2 = $content_fla2;
	global $title_fla2;
	$title_2 = $title_fla2;
	global $link_fla2;
	$link_2 = trim($link_fla2);
	global $fla;
	echo $fla;
}
else{}
if ($checkfns == "true" && $name == "fns"){
	global $fns;
	global $fns_two_news;

	global $checkfns_two_news;
	global $title_fns;
	$title_1 = $title_fns;
	global $link_fns;
	$link_1 = trim($link_fns);
	global $content_fns;
	$content_fns = stripslashes($content_fns);
	$content_1 = $content_fns;
	global $content_fns2;
	$content_fns2 = stripslashes($content_fns2);
	$content_2 = $content_fns2;
	global $title_fns2;
	$title_2 = $title_fns2;
	global $link_fns2;
	$link_2 = trim($link_fns2);
	global $fnsa;
	echo $fns;
}
else{}
if ($checkpae == "true" && $name == "pae"){
	global $pae;
	global $pae_two_news;

	global $checkpae_two_news;
	global $title_pae;
	$title_1 = $title_pae;
	global $link_pae;
	$link_1 = trim($link_pae);
	global $content_pae;
	$content_pae = stripslashes($content_pae);
	$content_1 = $content_pae;
	global $content_pae2;
	$content_pae2 = stripslashes($content_pae2);
	$content_2 = $content_pae2;
	global $title_pae2;
	$title_2 = $title_pae2;
	global $link_pae2;
	$link_2 = trim($link_pae2);
	global $pae;
	echo $pae;
}
else{}

if ($checkrce == "true" && $name == "rce"){
	global $rce;
	global $rce_two_news;

	global $checkrce_two_news;
	global $title_rce;
	$title_1 = $title_rce;
	global $link_rce;
	$link_1 = trim($link_rce);
	global $content_rce;
	$content_rce = stripslashes($content_rce);
	$content_1 = $content_rce;
	global $content_rce2;
	$content_rce2 = stripslashes($content_rce2);
	$content_2 = $content_rce2;
	global $title_rce2;
	$title_2 = $title_rce2;
	global $link_rce2;
	$link_2 = trim($link_rce2);
	global $rce;
	echo $rce;
}
else{}

if ($checkrjo == "true" && $name == "rjo"){
	global $rjo;
	global $rjo_two_news;

	global $checkrjo_two_news;
	global $title_rjo;
	$title_1 = $title_rjo;
	global $link_rjo;
	$link_1 = trim($link_rjo);
	global $content_rjo;
	$content_rjo = stripslashes($content_rjo);
	$content_1 = $content_rjo;
	global $content_rjo2;
	$content_rjo2 = stripslashes($content_rjo2);
	$content_2 = $content_rjo2;
	global $title_rjo2;
	$title_2 = $title_rjo2;
	global $link_rjo2;
	$link_2 = trim($link_rjo2);
	global $rjo;
	echo $rjo;
}
else{}
if ($checksdr == "true" && $name == "sdr"){
	global $sdr;
	global $sdr_two_news;

	global $checksdr_two_news;
	global $title_sdr;
	$title_1 = $title_sdr;
	global $link_sdr;
	$link_1 = trim($link_sdr);
	global $content_sdr;
	$content_sdr = stripslashes($content_sdr);
	$content_1 = $content_sdr;
	global $content_sdr2;
	$content_sdr2 = stripslashes($content_sdr2);
	$content_2 = $content_sdr2;
	global $title_sdr2;
	$title_2 = $title_sdr2;
	global $link_sdr2;
	$link_2 = trim($link_sdr2);
	global $sdr;
	echo $sdr;
}
else{}
if ($checkspo == "true" && $name == "spo"){
	global $spo;
	global $spo_two_news;

	global $checkspo_two_news;
	global $title_spo;
	$title_1 = $title_spo;
	global $link_spo;
	$link_1 = trim($link_spo);
	global $content_spo;
	$content_spo = stripslashes($content_spo);
	$content_1 = $content_spo;
	global $content_spo2;
	$content_spo2 = stripslashes($content_spo2);
	$content_2 = $content_spo2;
	global $title_spo2;
	$title_2 = $title_spo2;
	global $link_spo2;
	$link_2 = trim($link_spo2);
	global $spo;
	echo $spo;
}
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
if($checkblm == "true" && $name == "blm"){

	if($checkblm == "true" && $checkblm_two_news == "false"){
	echo $regional_1;
}
	elseif($checkblm == "true" && $checkblm_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkblm == "false" && $name == "blm") {}
else{}// END BLM CHECK

//BHE CHECK
if($checkbhe == "true" && $name == "bhe"){

	if($checkbhe == "true" && $checkbhe_two_news == "false"){
	echo $regional_1;
}
	elseif($checkbhe == "true" && $checkbhe_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkbhe == "false" && $name == "bhe") {}
else{}// END BLM CHECK

//BSA CHECK
if($checkbsa == "true" && $name == "bsa"){

	if($checkbsa == "true" && $checkbsa_two_news == "false"){
	echo $regional_1;
}
	elseif($checkbsa == "true" && $checkbsa_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkbsa == "false" && $name == "bsa") {}
else{}// END BSA CHECK

//CTA CHECK
if($checkcta == "true" && $name == "cta"){

	if($checkcta == "true" && $checkcta_two_news == "false"){
	echo $regional_1;
}
	elseif($checkcta == "true" && $checkcta_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkcta == "false" && $name == "cta") {}
else{}// END CTA CHECK

//FLA CHECK
if($checkfla == "true" && $name == "fla"){

	if($checkfla == "true" && $checkfla_two_news == "false"){
	echo $regional_1;
}
	elseif($checkfla == "true" && $checkfla_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkfla == "false" && $name == "fla") {}
else{}// END FLA CHECK

//FNS CHECK
if($checkfns == "true" && $name == "fns"){

	if($checkfns == "true" && $checkfns_two_news == "false"){
	echo $regional_1;
}
	elseif($checkfns == "true" && $checkfns_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkfns == "false" && $name == "fns") {}
else{}// END FNS CHECK

//PAE CHECK
if($checkpae == "true" && $name == "pae"){

	if($checkpae == "true" && $checkpae_two_news == "false"){
	echo $regional_1;
}
	elseif($checkpae == "true" && $checkpae_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkpae == "false" && $name == "pae") {}
else{}// END PAE CHECK

//RCE CHECK
if($checkrce == "true" && $name == "rce"){

	if($checkrce == "true" && $checkrce_two_news == "false"){
	echo $regional_1;
}
	elseif($checkrce == "true" && $checkrce_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkrce == "false" && $name == "rce") {}
else{}// END RCE CHECK

//RJO CHECK
if($checkrjo == "true" && $name == "rjo"){

	if($checkrjo == "true" && $checkrjo_two_news == "false"){
	echo $regional_1;
}
	elseif($checkrjo == "true" && $checkrjo_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkrjo == "false" && $name == "rjo") {}
else{}// END RJO CHECK

//SDR CHECK
if($checksdr == "true" && $name == "sdr"){

	if($checksdr == "true" && $checksdr_two_news == "false"){
	echo $regional_1;
}
	elseif($checksdr == "true" && $checksdr_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checksdr == "false" && $name == "sdr") {}
else{}// END SDR CHECK

//SPO CHECK
if($checkspo == "true" && $name == "spo"){

	if($checkspo == "true" && $checkspo_two_news == "false"){
	echo $regional_1;
}
	elseif($checkspo == "true" && $checkspo_two_news == "true"){
	echo $regional_2;
	}

}
elseif($checkspo == "false" && $name == "spo") {}
else{}// END SPO CHECK

}//end function output regionais

;?>
