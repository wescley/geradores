<?php

$new = <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;

// Primeira Noticia
function primeiraNoticia(){
global $new;
$check1 = $_SESSION['form1'];

if ($check1 == "true"){
$secao = $_SESSION['not1'];
$titulo = stripslashes($_POST['titulo1']);
$url = $_POST['url1'];
$url = trim($url);
$data = $_POST['data1'];
$veiculo = $_POST['veiculo1'];
$conteudo = stripslashes($_POST['conteudo1']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}


// Segunda Noticia
function segundaNoticia(){
global $new;
$check2 = $_SESSION['form2'];

if ($check2 == "true"){
$secao = $_SESSION['not2'];
$titulo = stripslashes($_POST['titulo2']);
$url = $_POST['url2'];
$url = trim($url);
$data = $_POST['data2'];
$veiculo = $_POST['veiculo2'];
$conteudo = stripslashes($_POST['conteudo2']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Terceira Noticia
function terceiraNoticia(){
global $new;
$check3 = $_SESSION['form3'];

if ($check3 == "true"){
$secao = $_SESSION['not3'];
$titulo = stripslashes($_POST['titulo3']);
$url = $_POST['url3'];
$url = trim($url);
$data = $_POST['data3'];
$veiculo = $_POST['veiculo3'];
$conteudo = stripslashes($_POST['conteudo3']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Quarta Noticia
function quartaNoticia(){
global $new;
$check4 = $_SESSION['form4'];

if ($check4 == "true"){
$secao = $_SESSION['not4'];
$titulo = stripslashes($_POST['titulo4']);
$url = $_POST['url4'];
$url = trim($url);
$data = $_POST['data4'];
$veiculo = $_POST['veiculo4'];
$conteudo = stripslashes($_POST['conteudo4']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Quinta Noticia
function quintaNoticia(){
$check5 = $_SESSION['form5'];

if ($check5 == "true"){
$secao = $_SESSION['not5'];
$titulo = stripslashes($_POST['titulo5']);
$url = $_POST['url5'];
$url = trim($url);
$data = $_POST['data5'];
$veiculo = $_POST['veiculo5'];
$conteudo = stripslashes($_POST['conteudo5']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Sexta Noticia
function sextaNoticia(){
$check6 = $_SESSION['form6'];

if ($check6 == "true"){
$secao = $_SESSION['not6'];
$titulo = stripslashes($_POST['titulo6']);
$url = $_POST['url6'];
$url = trim($url);
$data = $_POST['data6'];
$veiculo = $_POST['veiculo6'];
$conteudo = stripslashes($_POST['conteudo6']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Setima Noticia
function setimaNoticia(){
$check7 = $_SESSION['form7'];

if ($check7 == "true"){
$secao = $_SESSION['not7'];
$titulo = stripslashes($_POST['titulo7']);
$url = $_POST['url7'];
$url = trim($url);
$data = $_POST['data7'];
$veiculo = $_POST['veiculo7'];
$conteudo = stripslashes($_POST['conteudo7']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Oitava Noticia
function oitavaNoticia(){
$check8 = $_SESSION['form8'];

if ($check8 == "true"){
$secao = $_SESSION['not8'];
$titulo = stripslashes($_POST['titulo8']);
$url = $_POST['url8'];
$url = trim($url);
$data = $_POST['data8'];
$veiculo = $_POST['veiculo8'];
$conteudo = stripslashes($_POST['conteudo8']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Nona Noticia
function nonaNoticia(){
$check9 = $_SESSION['form9'];

if ($check9 == "true"){
$secao = $_SESSION['not9'];
$titulo = stripslashes($_POST['titulo9']);
$url = $_POST['url9'];
$url = trim($url);
$data = $_POST['data9'];
$veiculo = $_POST['veiculo9'];
$conteudo = stripslashes($_POST['conteudo9']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}
}

// Decima Noticia
function decimaNoticia(){
$check10 = $_SESSION['form10'];

if ($check10 == "true"){
$secao = $_SESSION['not10'];
$titulo = stripslashes($_POST['titulo10']);
$url = $_POST['url10'];
$url = trim($url);
$data = $_POST['data10'];
$veiculo = $_POST['veiculo10'];
$conteudo = stripslashes($_POST['conteudo10']);

echo <<<EOD
<!-- BEGIN FIRST NEW--><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="Clipping Serpro" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $secao - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END FIRST NEW--><tr><td colspan="4" height="40"></td></tr>
EOD;
}
else{}

}
;?>
