<?php require "colunas.php";?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Gerador do Informe Primeira Leitura</title>
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
theme_advanced_buttons1 : "styleselect",
theme_advanced_buttons2 : "newdocument,undo,redo,cleanup,removeformat,|,pastetext,pasteword",
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
<script type="text/javascript">
function apply()
{
// PUBLICIDADE
  document.gerar.imagem_publicidade.disabled=true;
  if(document.gerar.publicidade.checked==true)
  {
    document.gerar.imagem_publicidade.disabled=false;
  }
  if(document.gerar.publicidade.checked==false)
  {
    document.gerar.imagem_publicidade.enabled=false;
  }

  document.gerar.link_publicidade.disabled=true;
  if(document.gerar.publicidade.checked==true)
  {
    document.gerar.link_publicidade.disabled=false;
  }
  if(document.gerar.publicidade.checked==false)
  {
    document.gerar.link_publicidade.enabled=false;
  }

}
</script> 
	
	</head>
	<body id="gerar-formularios">
<div id="wrapper">
		<div id="content">
			<h1><img src="images/logo-primeira-leitura.png" alt="Primeira Leitura" /></h1>
			<p class="step">Passo 2/2</p>
			<p>Preencha os formulários abaixo para a criação do Primeira Leitura.</p>
<form action="primeira.php" method="post" name="gerar">
<fieldset>
	<legend>Destaque</legend>
	<label for="titulo_destaque">Título</label>
	<input type="text" name="titulo_destaque" size="50" />
	<br />
	<label for="imagem_destaque">URL da Imagem <span>(tamanho 90x90 px)</span></label>
	<input type="text" name="imagem_destaque"  size="50"  />
	<br />
	<label for="link_destaque">Link para a Notícia</label>
	<input type="text" name="link_destaque" size="50"  />
	<br />
	<label for="content_destaque">Chamada da Notícia</label>
	<textarea name="content_destaque" cols="50" rows="5" ></textarea>
</fieldset>
<fieldset>
	<legend>Publicidade</legend>
	<input type="checkbox" name="publicidade" value="10" onClick="apply()" /> Edição com publicidade (opcional).
	<label for="imagem_publicidade">URL da Imagem</label>
	<input type="text" name="imagem_publicidade"  size="50" disabled="true" />
	<br />
	<label for="link_publicidade">Link da Publicidade</label>
	<input type="text" name="link_publicidade" size="50" disabled="true" />
</fieldset>
<fieldset>
	<legend>Coluna 1</legend>
	<?php coluna1FORM();?>
</fieldset>
<fieldset>
	<legend>Coluna 2</legend>
	<?php coluna2FORM();?>
</fieldset>
<fieldset>
	<legend>Coluna 3</legend>
	<?php coluna3_parFORM();?>
	<?php regFORM("blm");regFORM("bhe");regFORM("bsa");regFORM("cta");regFORM("fla");regFORM("fns");regFORM("pae");regFORM("rce");regFORM("rjo");regFORM("sdr");regFORM("spo");?>
</fieldset>
	<input type="submit" value="Gerar Código" name="submit"/>
	<input type="reset" value="Limpar" />
</form>
		</div>
	</div>
</body>
</html>
