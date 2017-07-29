<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador do Informe Direto</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />
	<style type="text/css">
	label {display:block;}
	</style>
	
	<!-- OF COURSE YOU NEED TO ADAPT NEXT LINE TO YOUR tiny_mce.js PATH -->
	<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

	<script type="text/javascript">
tinyMCE.init({
// General options
mode : "textareas",
theme : "advanced",
plugins : "table,inlinepopups,preview,visualchars,paste",
 
// Theme options
theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,blockquote",
theme_advanced_buttons2 : "link,unlink,|,table,charmap,|,newdocument,undo,redo,cleanup,removeformat,|,pastetext,pasteword",
theme_advanced_buttons3 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,

// Example content CSS (should be your site CSS)
content_css : "/js/tinymce/examples/css/content.css",
// Style formats
style_formats : [
{title : 'Bold text', inline : 'b'},
{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},

{title : 'Table styles'},
{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
],
formats : {
alignleft : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
aligncenter : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
alignright : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
alignfull : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'full'},
bold : {inline : 'span', 'classes' : 'bold'},
italic : {inline : 'span', 'classes' : 'italic'},
underline : {inline : 'span', 'classes' : 'underline', exact : true},
strikethrough : {inline : 'del'},
customformat : {inline : 'span', styles : {color : '#00ff00', fontSize : '20px'}, attributes : {title : 'My custom format'}}
}
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
		<form enctype="multipart/form-data" action="gerador-direto.php" method="post">
		<label for="data">Data do Informe</label>
		<input type="text" name="data" size="50" />
		<br />
		<fieldset>
			<legend>Destaque</legend>
			<label for="destaque">Título do Destaque</label>
			<input type="text" name="destaque" size="50" />
			<br />
			<label for="image">Enviar imagem</label>
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="image" />
			<br />
			<label for="leading">Texto para o Splash</label>
			<input type="text" name="leading" size="50" />
			<br />
			<label for="content">Corpo da Notícia</label>
			<textarea name="content" cols="50" rows="15"></textarea>
		</fieldset>	
		
		<fieldset>
			<legend>Pessoas</legend>
			
			<input type="checkbox" name="pes" value="1" />
			<label for="titulo-pessoas">Título da Notícia Pessoas</label>
			<input type="text" name="titulo-pessoas" size="50" />
			<br />
			<label for="image-pessoas">Enviar imagem</label>
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="image-pessoas" />
			<br />
			<label for="caption-pessoas">Texto para a Legenda</label>
			<input type="text" name="caption-pessoas" size="50" />
			<br />
			<label for="content-pessoas">Corpo da Notícia</label>
			<textarea name="content-pessoas" cols="50" rows="15"></textarea>
		</fieldset>
		
		<fieldset>
			<legend>Logística</legend>
			<input type="checkbox" name="log" value="2" />
			<label for="titulo-logistica">Título da Notícia Logística</label>
			<input type="text" name="titulo-logistica" size="50" />
			<br />
			<label for="image-logistica">Enviar imagem</label>
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="image-logistica" />
			<br />
			<label for="caption-pessoas">Texto para a Legenda</label>
			<input type="text" name="caption-logistica" size="50" />
			<br />
			<label for="content-logistica">Corpo da Notícia</label>
			<textarea name="content-logistica" cols="50" rows="15"></textarea>
		</fieldset>
		
		<fieldset>
			<legend>Planejamento</legend>
			<input type="checkbox" name="pla" value="3" />
			<label for="titulo-planejamento">Título da Notícia Planejamento</label>
			<input type="text" name="titulo-planejamento" size="50" />
			<br />
			<label for="image-planejamento">Enviar imagem</label>
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="image-planejamento" />
			<br />
			<label for="caption-planejamento">Texto para a Legenda</label>
			<input type="text" name="caption-planejamento" size="50" />
			<br />
			<label for="content-pessoas">Corpo da Notícia</label>
			<textarea name="content-planejamento" cols="50" rows="15"></textarea>
		</fieldset>
		
				<fieldset>
			<legend>Gestão Empresarial</legend>
			<input type="checkbox" name="ges" value="4" />
			<label for="titulo-gestao-empresarial">Título da Notícia Gestão Empresarial</label>
			<input type="text" name="titulo-gestao-empresarial" size="50" />
			<br />
			<label for="image-gestao-empresarial">Enviar imagem</label>
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="image-gestao-empresarial" />
			<br />
			<label for="caption-gestao-empresarial">Texto para a Legenda</label>
			<input type="text" name="caption-gestao-empresarial" size="50" />
			<br />
			<label for="content-gestao-empresarial">Corpo da Notícia</label>
			<textarea name="content-gestao-empresarial" cols="50" rows="15"></textarea>
		</fieldset>
		
	<br /><br />
			<input type="submit" value="Enviar" />
			<input type="reset" value="Limpar" />
			</form>
					<!-- 
		<fieldset>
			<legend>Adicionar outras Notícias</legend>
			<label for="outras">Selecionar tema</label>
			<select name="outras">
				<option value="pessoas">Pessoas</option>
				<option value="logistica">Logística</option>
				<option value="planejamento">Planejamento</option>
				<option value="gestao-empresarial">Gestão Empresarial</option>
			</select>
			<input type="submit" value="Adicionar" />
		</fieldset>	
		-->
		</div>
	</body>
</html>
