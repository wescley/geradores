<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<title>Gerador de código para Convites CECOM</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />
	<style type="text/css">
	body	{font:80%/1.2 helvetica,verdana,arial,sans-serif;color:#454545;}
	fieldset {background:#f9f9f9;margin:10px 0;width:500px;border:1px solid #dedede;}
	legend {font-size:20px;font-weight:bold;font-family:"arial black", impact, arial, sans-serif;}
	label	{margin:15px 0 3px 0;font-size:1.1em;display:block;font-weight:bold;color:#12355F;}

	h1 {margin:0;padding:0;font-family:"Trebuchet MS", verdana,arial,sans-serif;color:#00569C;font-size:1.7em;}
	p	{margin:5px;}
	#wrapper	{margin:0 auto;width;600px;}

	</style>
<script type="text/javascript">
function apply()
{
// Notícias
document.index.link.disabled=true;
  if(document.index.um.checked==true)
  {
    document.index.link.disabled=false;
  }
  if(document.index.um.checked==false)
  {
    document.index.link.enabled=false;
  }


}
</script>

	</head>
	<body>
	<div id="wrapper">
		<h1>Gerador de Código HTML para Email MKT CECOM</h1>
		<p>Preencha os dados abaixo para criar o Email MKT</p>
		<form enctype="multipart/form-data" action="email-mkt.php" method="post" name="index"> 
		<fieldset>
			<label for="image-url">Imagem URL</label>
			<input type="text" name="image-url" size="50" />
			<label for="link">Link URL</label>
			<input type="checkbox" name="um" value="1" onClick="apply()" />
			<input name="link" type="text" size="50" disabled="true" />
			<label for="alt-text">Texto contido na imagem (Caso a imagem não carregue)</label>
			<textarea name="alt-text" cols="50" rows="10"></textarea><br /><br /><br />
			<input type="submit" value="Gerar Código" />
			<input type="reset" value="Limpar" />
		</fieldset>
			</form>
		</div>
	</body>
</html>
