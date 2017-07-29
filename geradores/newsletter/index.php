<?php 
header("Content-Type: text/html;charset=UTF-8");
?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador da Newsletter Serpro</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />

	<style type="text/css">
	body	{font:70%/1.2 helvetica,verdana,arial,sans-serif;color:#1f1f1f;}
	fieldset {background:#eee;margin:20px 0;width:500px;}
	legend {font-size:20px;font-weight:bold;color:#00569C;font-family:"arial black", impact, arial, sans-serif;}
	label	{margin-top:10px;font-size:1.1em;}
	input, select {}
	hr {}
	
	</style>
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
	</head>
	<body>
	<div id="wrapper">
		<h1>Gerador da Newsletter Externa</h1>
		<p>Preencha os dados abaixo para criar o código html da Newsletter a ser inserido no Expresso Mail</p>
		<form action="gerador-newsletter.php" method="post">
		<fieldset>
			<legend>Destaque</legend>
			<label for="titulo-destaque">Título do Destaque</label>
			<input type="text" name="titulo-destaque" size="50" />
			<br />
			<label for="sutia-destaque">Sutiã</label>
			<textarea name="sutia-destaque" cols="50" rows="15"></textarea>
			<br />
			<label for="content-destaque">Corpo da Notícia</label>
			<textarea name="content-destaque" cols="50" rows="15"></textarea>
			<br />
			<label for="olho-img">Link para Imagem do Olho</label>
			<input type="text" name="olho-img" />
			<br />
			<label for="olho-txt">Texto para o olho</label>
			<input type="text" name="olho-txt" size="50" />
			<br />
			<label for="olho-nome">Olho nome</label>
			<input type="text" name="olho-nome" size="50" />
			<br />
			<label for="olho-cargo">Olho cargo</label>
			<input type="text" name="olho-cargo" size="50" />
			<br />
			<label for="sabermais-img">Link da Imagem Saber Mais</label>
			<input type="text" name="sabermais-img" />
			<br />
			<label for="sabermais-link">Link para saber mais</label>
			<input type="text" name="sabermais-link" size="50" />
			<br />
			<label for="sabermais-alt">Alt text (sem imagem))</label>
			<input type="text" name="sabermais-alt" size="50" />
		</fieldset>	
		
		<fieldset>
			<legend>Bits #1</legend>
			<label for="titulo-bits1">Título</label>
			<input type="text" name="titulo-bits1" size="50" />
			<br />
			<label for="text-bits1">Texto</label>
			<textarea name="text-bits1" cols="50" rows="15" size="70"></textarea>
			<br />
			<label for="img-bits1">Imagem 135 x 120</label>
			<input type="text" name="img-bits1" />
			<br />
			<label for="link-bits1">Link para ler mais</label>
			<input type="text" name="link-bits1" size="50" />
			<br />
			<label for="hover-bits1">Texto Mouse over</label>
			<input type="text" name="hover-bits1" size="50"  value="Clique para saber mais sobre"/>
		</fieldset>	

		<fieldset>
			<legend>Segundo destaque</legend>
			<label for="titulo-destaque2">Título</label>
			<input type="text" name="titulo-destaque2" size="50" />
			<br />
			<label for="sutia-destaque2">Sutiã</label>
			<textarea name="sutia-destaque2" cols="50" rows="15"></textarea>
			<br />
			<label for="content-destaque2">Corpo da Notícia</label>
			<textarea name="content-destaque2" cols="50" rows="15"></textarea>
			<br />
			<label for="img1">Imagem 1</label>
			<input type="text" name="img1" />
			<br />
			<label for="img2">Imagem 2</label>
			<input type="text" name="img2" />
		</fieldset>	
		
		<fieldset>
			<legend>Bits #2</legend>
			<label for="titulo-bits2">Título</label>
			<input type="text" name="titulo-bits2" size="50" />
			<br />
			<label for="text-bits2">Texto</label>
			<textarea name="text-bits2" cols="50" rows="15" size="70"></textarea>
			<br />
			<label for="img-bits2">Imagem 135 x 120</label>
			<input type="text" name="img-bits2" />
			<br />
			<label for="link-bits2">Link para ler mais</label>
			<input type="text" name="link-bits2" size="50" />
			<br />
			<label for="hover-bits2">Texto Mouse over</label>
			<input type="text" name="hover-bits2" size="50"  value="Clique para saber mais sobre"/>
		</fieldset>	


			<input type="submit" value="Gerar Newsletter" />
			<input type="reset" value="Limpar" />
			</form>

		
		</div>
	</body>
</html>


