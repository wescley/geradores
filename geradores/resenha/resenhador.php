<?php
session_start();
function geraFORMS(){

// FORM 1
if(isset($_POST['um'])){
$_SESSION['form1'] = "true";
$not1 = $_POST['not1'];
$secao1 = $not1;
$_SESSION['secao1'] = $not1;
echo <<<EOD
	<fieldset>
		<legend>$secao1</legend>
		<label for="titulo">Título</label>
		<input type="text" name="titulo" size="50" />
		<br />
		<label for="url">Link para Notícia</label>
		<input type="text" name="url" />
		<br />
		<label for="conteudo">Corpo da Notícia</label>
		<textarea name="conteudo" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form1'] = "false";
echo "Formulário 1 não foi selecionado!";
}

// FORM 2
if(isset($_POST['dois'])){
$_SESSION['form2'] = "true";
$not2 = $_POST['not2'];
$secao2 = $not2;
$_SESSION['secao2'] = $not2;
echo <<<EOD
	<fieldset>
		<legend>$secao2</legend>
		<label for="titulo2">Título</label>
		<input type="text" name="titulo2" size="50" />
		<br />
		<label for="url2">Link para Notícia</label>
		<input type="text" name="url2" />
		<br />
		<label for="conteudo2">Corpo da Notícia</label>
		<textarea name="conteudo2" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form2'] = "false";
echo "Formulário 2 não foi selecionado!";
}

// FORM 3
if(isset($_POST['tres'])){
$_SESSION['form3'] = "true";
$not3 = $_POST['not3'];
$secao3 = $not3;
$_SESSION['secao3'] = $not3;
echo <<<EOD
	<fieldset>
		<legend>$secao3</legend>
		<label for="titulo3">Título</label>
		<input type="text" name="titulo3" size="50" />
		<br />
		<label for="url3">Link para Notícia</label>
		<input type="text" name="url3" />
		<br />
		<label for="conteudo3">Corpo da Notícia</label>
		<textarea name="conteudo3" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form3'] = "false";
echo "Formulário 3 não foi selecionado!";
}

// FORM 4
if(isset($_POST['quatro'])){
$_SESSION['form4'] = "true";
$not4 = $_POST['not4'];
$secao4 = $not4;
$_SESSION['secao4'] = $not4;
echo <<<EOD
	<fieldset>
		<legend>$secao4</legend>
		<label for="titulo4">Título</label>
		<input type="text" name="titulo4" size="50" />
		<br />
		<label for="url4">Link para Notícia</label>
		<input type="text" name="url4" />
		<br />
		<label for="conteudo4">Corpo da Notícia</label>
		<textarea name="conteudo4" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form4'] = "false";
echo "Formulário 4 não foi selecionado!";
}

// FORM 5
if(isset($_POST['cinco'])){
$_SESSION['form5'] = "true";
$not5 = $_POST['not5'];
$secao5 = $not5;
$_SESSION['secao5'] = $not5;
echo <<<EOD
	<fieldset>
		<legend>$secao5</legend>
		<label for="titulo5">Título</label>
		<input type="text" name="titulo5" size="50" />
		<br />
		<label for="url5">Link para Notícia</label>
		<input type="text" name="url5" />
		<br />
		<label for="conteudo5">Corpo da Notícia</label>
		<textarea name="conteudo5" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form5'] = "false";
echo "Formulário 5 não foi selecionado!";
}

// FORM 6
if(isset($_POST['seis'])){
$_SESSION['form6'] = "true";
$not6 = $_POST['not6'];
$secao6 = $not6;
$_SESSION['secao6'] = $not6;
echo <<<EOD
	<fieldset>
		<legend>$secao6</legend>
		<label for="titulo6">Título</label>
		<input type="text" name="titulo6" size="50" />
		<br />
		<label for="url6">Link para Notícia</label>
		<input type="text" name="url6" />
		<br />
		<label for="conteudo6">Corpo da Notícia</label>
		<textarea name="conteudo6" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form6'] = "false";
echo "Formulário 6 não foi selecionado!";
}

// FORM 7
if(isset($_POST['sete'])){
$_SESSION['form7'] = "true";
$not7 = $_POST['not7'];
$secao7 = $not7;
$_SESSION['secao7'] = $not7;
echo <<<EOD
	<fieldset>
		<legend>$secao7</legend>
		<label for="titulo7">Título</label>
		<input type="text" name="titulo7" size="50" />
		<br />
		<label for="url7">Link para Notícia</label>
		<input type="text" name="url7" />
		<br />
		<label for="conteudo7">Corpo da Notícia</label>
		<textarea name="conteudo7" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form7'] = "false";
echo "Formulário 7 não foi selecionado!";
}

// FORM 8
if(isset($_POST['oito'])){
$_SESSION['form8'] = "true";
$not8 = $_POST['not8'];
$secao8 = $not8;
$_SESSION['secao8'] = $not8;
echo <<<EOD
	<fieldset>
		<legend>$secao8</legend>
		<label for="titulo8">Título</label>
		<input type="text" name="titulo8" size="50" />
		<br />
		<label for="url8">Link para Notícia</label>
		<input type="text" name="url8" />
		<br />
		<label for="conteudo8">Corpo da Notícia</label>
		<textarea name="conteudo8" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form8'] = "false";
echo "Formulário 8 não foi selecionado!";
}

// FORM 9
if(isset($_POST['nove'])){
$_SESSION['form9'] = "true";
$not9 = $_POST['not9'];
$secao9 = $not9;
$_SESSION['secao9'] = $not9;
echo <<<EOD
	<fieldset>
		<legend>$secao9</legend>
		<label for="titulo9">Título</label>
		<input type="text" name="titulo9" size="50" />
		<br />
		<label for="url9">Link para Notícia</label>
		<input type="text" name="url9" />
		<br />
		<label for="conteudo9">Corpo da Notícia</label>
		<textarea name="conteudo9" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form9'] = "false";
echo "Formulário 9 não foi selecionado!";
}

// FORM 10
if(isset($_POST['dez'])){
$_SESSION['form10'] = "true";
$not10 = $_POST['not10'];
$secao10 = $not10;
$_SESSION['secao10'] = $not10;
echo <<<EOD
	<fieldset>
		<legend>$secao10</legend>
		<label for="titulo10">Título</label>
		<input type="text" name="titulo10" size="50" />
		<br />
		<label for="url10">Link para Notícia</label>
		<input type="text" name="url10" />
		<br />
		<label for="conteudo10">Corpo da Notícia</label>
		<textarea name="conteudo10" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
}
else{
$_SESSION['form10'] = "false";
echo "Formulário 10 não foi selecionado!";
}

}
;?>


<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador do Resenha Eletrônica</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />
		<style type="text/css">
		label {display:block;}
		</style>

	<!-- OF COURSE YOU NEED TO ADAPT NEXT LINE TO YOUR tiny_mce.js PATH -->
	<script type="text/javascript" src="../scripts/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

	<script type="text/javascript">
tinyMCE.init({
// General options
mode : "textareas",
theme : "advanced",
plugins : "table,inlinepopups,preview,visualchars,paste",

// Theme options
theme_advanced_buttons1 : "styleselect,|,bullist,numlist,|,blockquote",
theme_advanced_buttons2 : "link,unlink,|,table,charmap,|,newdocument,undo,redo,cleanup,removeformat,|,pastetext,pasteword",
theme_advanced_buttons3 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,

// Style formats
style_formats : [
{title : 'Bold text', inline : 'strong'},
{title : 'Strikethrough', inline : 'del'},
{title : 'Italic', inline : 'span', styles : {fontStyle : 'italic'}},
{title : 'Underline', inline : 'span', styles : {textDecoration : 'underline'}},
{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}}
]
});
	</script>
		<style type="text/css">
	body	{font:70%/1.2 helvetica,verdana,arial,sans-serif;color:#1f1f1f;}
	fieldset {background:#eee;margin:40px 0;width:500px;}
	legend {font-size:20px;font-weight:bold;color:#00569C;font-family:"arial black", impact, arial, sans-serif;}
	label	{margin-top:10px;font-size:1.1em;}
	</style>
</head>

	</head>
	<body>
	<div id="wrapper">
		<h1>Resenha Eletrônica</h1>
		<p class="step">Passo 2/3</p>
		<p>Preencha os formulários abaixo para criar o Resenha Eletrônica.</p>
		<form action="gerador-resenha.php" method="post">
		<label for="data">Data do Informe</label>
		<input type="text" name="data" size="50" />
<?php geraFORMS() ;?><br />
			<input type="submit" value="Enviar" />
			<input type="reset" value="Limpar" />
			</form>

		</div>
	</body>
</html>
