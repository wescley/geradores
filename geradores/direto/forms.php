<?php include 'class_direto.php';?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador do Informe Direto</title>
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
		<h1>Gerador do Informe Direto</h1>
		<p>Preencha os dados abaixo para criar o código html do Informe a ser inserido no Expresso Mail</p>
		<form action="gerador-direto.php" method="post">
		<fieldset>
			<legend>Destaque</legend>
			<label for="titulo-destaque">Título do Destaque</label>
			<input type="text" name="titulo-destaque" size="50" />
			<br />
			<label for="url_destaque">Link para Imagem</label>
			<input type="text" name="url_destaque" />
			<br />
			<label for="pullquote-destaque">Texto para o destaque</label>
			<input type="text" name="pullquote-destaque" size="50" />
			<br />
			<label for="content-destaque">Corpo da Notícia</label>
			<textarea name="content-destaque" cols="50" rows="15"></textarea>
		</fieldset>	
		
<?php
$form1 = new Forms();
$form1->generateForms(1);
$form2 = new Forms();
$form2->generateForms(2);
$form3 = new Forms();
$form3->generateForms(3);
$form4 = new Forms();
$form4->generateForms(4);
$form5 = new Forms();
$form5->generateForms(5);

?>
<br />
<br /><br />
			<input type="submit" value="Enviar" />
			<input type="reset" value="Limpar" />
			</form>

		</div>
	</body>
</html>
