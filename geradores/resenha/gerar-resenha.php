<?php

// Primeira Noticia
function primeiraNoticia(){

$check1 = $_SESSION['form1'];

if ($check1 == "true"){
$secao = $_SESSION['secao1'];
$titulo = stripslashes($_POST['titulo']);
$url = $_POST['url'];
$conteudo = stripslashes($_POST['conteudo']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}


// Segunda Noticia
function segundaNoticia(){
$check2 = $_SESSION['form2'];

if ($check2 == "true"){
$secao = $_SESSION['secao2'];
$titulo = stripslashes($_POST['titulo2']);
$url = $_POST['url2'];
$conteudo = stripslashes($_POST['conteudo2']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Terceira Noticia
function terceiraNoticia(){
$check3 = $_SESSION['form3'];

if ($check3 == "true"){
$secao = $_SESSION['secao3'];
$titulo = stripslashes($_POST['titulo3']);
$url = $_POST['url3'];
$conteudo = stripslashes($_POST['conteudo3']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Quarta Noticia
function quartaNoticia(){
$check4 = $_SESSION['form4'];

if ($check4 == "true"){
$secao = $_SESSION['secao4'];
$titulo = stripslashes($_POST['titulo4']);
$url = $_POST['url4'];
$conteudo = stripslashes($_POST['conteudo4']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Quinta Noticia
function quintaNoticia(){
$check5 = $_SESSION['form5'];

if ($check5 == "true"){
$secao = $_SESSION['secao5'];
$titulo = stripslashes($_POST['titulo5']);
$url = $_POST['url5'];
$conteudo = stripslashes($_POST['conteudo5']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Sexta Noticia
function sextaNoticia(){
$check6 = $_SESSION['form6'];

if ($check6 == "true"){
$secao = $_SESSION['secao6'];
$titulo = stripslashes($_POST['titulo6']);
$url = $_POST['url6'];
$conteudo = stripslashes($_POST['conteudo6']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Setima Noticia
function setimaNoticia(){
$check7 = $_SESSION['form7'];

if ($check7 == "true"){
$secao = $_SESSION['secao7'];
$titulo = stripslashes($_POST['titulo7']);
$url = $_POST['url7'];
$conteudo = stripslashes($_POST['conteudo7']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Oitava Noticia
function oitavaNoticia(){
$check8 = $_SESSION['form8'];

if ($check8 == "true"){
$secao = $_SESSION['secao8'];
$titulo = stripslashes($_POST['titulo8']);
$url = $_POST['url8'];
$conteudo = stripslashes($_POST['conteudo8']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Nona Noticia
function nonaNoticia(){
$check9 = $_SESSION['form9'];

if ($check9 == "true"){
$secao = $_SESSION['secao9'];
$titulo = stripslashes($_POST['titulo9']);
$url = $_POST['url9'];
$conteudo = stripslashes($_POST['conteudo9']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}
}

// Decima Noticia
function decimaNoticia(){
$check10 = $_SESSION['form10'];

if ($check10 == "true"){
$secao = $_SESSION['secao10'];
$titulo = stripslashes($_POST['titulo10']);
$url = $_POST['url10'];
$conteudo = stripslashes($_POST['conteudo10']);

echo <<<EOD
<p><span style="font-size:18px;font-weight:bold;color:#666666;font-family:arial;line-height:110%;"><a href="$url" target="blank" style="color:#666666;text-decoration:none;">&#187; $titulo</a></span><br />
<span style="font-size:12px;font-weight:normal;color:#0070B8;font-style:italic;font-family:monospace;">&bull; $secao </span><br />
$conteudo</p><br />
EOD;
}
else{}

}
;?>
