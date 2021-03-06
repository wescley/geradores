<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<title>Gerador do informe Em Tempo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
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
	body	{font:80%/1.2 helvetica,verdana,arial,sans-serif;color:#454545;}
	fieldset {background:#f9f9f9;margin:10px 0;width:500px;border:1px solid #dedede;}
	legend {font-size:20px;font-weight:bold;font-family:"arial black", impact, arial, sans-serif;}
	label	{margin:15px 0 3px 0;font-size:1.1em;display:block;font-weight:bold;color:#12355F;}

	h1 {margin:0;padding:0;font-family:"Trebuchet MS", verdana,arial,sans-serif;color:#00569C;font-size:1.7em;}
	p	{margin:5px;}
	#wrapper	{margin:0 auto;width:600px;}
	.alert	{color:#9F0909;margin:0 auto;}
	
	</style>
	</head>
	<body>
	<div id="wrapper">
		<h1>Gerador de Código HTML para o informe Em Tempo</h1>
		<p>Preencha os dados abaixo para criar o informe:</p>
		<form enctype="multipart/form-data" action="emtempo.php" method="post">
		
		<fieldset>
			<label for="titulo">Título</label>
			<input type="text" name="titulo" size="50" />
			<br />
			<label for="content">Corpo da Mensagem</label>
			<textarea name="content" cols="50" rows="15"></textarea>
			<br />
			<input type="submit" value="Gerar Informe" name="submit" />
			<input type="reset" value="Limpar" />
		</fieldset>	
			</form>	
		</div>
	</body>
</html>
