<?php
session_start();

if (isset($_POST['titulo'])) {
$titulo = strip_tags($_POST['titulo']);
}

if (isset($_POST['content'])) {
$content = htmlspecialchars($_POST['content'], ENT_QUOTES);
$content_preview = stripslashes($_POST['content']);

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Em Tempo Output</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<style type="text/css">
#wrapper	{margin:0 auto;width:1000px;}
textarea	{border:1px solid #dedede;width:470px;min-height:500px;padding:20px;background:#fafafa;}
#code		{float:left;width:463px;padding-left:20px;}
#preview	{float:left;width:483px;}
.code		{font-size:11px;}
	</style>
	</head>
	<body>
<div id="wrapper">
<div id="preview">
<p class="code">Preview</p>
<div style="margin:0 auto;width:100%;padding-top:20px;"><table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="483" style="font-family:arial,verdana,sans-serif !important;color:#333333;"><tr><td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="483px" align="center" valign="top"><tr><td valign="bottom" height="24px"><img style="vertical-align:bottom;" src="http://primeiraleitura.serpro.gov.br/img-newsletter/bg-top-emtempo/" alt="" /></td></tr><tr><td><table valign="top" border="0" cellpadding="0" cellspacing="0" width="483" height="286px" background="http://primeiraleitura.serpro.gov.br/img-newsletter/bg-content-emtempo/" style="font:75%/1.5;"><tr><td width="26px"  valign="top"></td><td colspan="3" style="font-size:13px;" valign="top"><h1 style="font-size:15px;"><?php echo $titulo; ?></h1><p id="data" style="font-size:10px;margin-bottom:10px;"><?php echo date("j/n/y"); ?></p><?php echo strip_tags($content_preview); ?></td><td width="26px" valign="top"></td></tr><tr height="66px"><td width="26px"></td><td width="136px"valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/logo-emtempo/" alt="Em Tempo" width="136px" height="66px" /></td><td width="237px"valign="top"></td><td width="110px"valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/logo-serpro-emtempo/" alt="Serpro" width="110px" height="66px" /></td><td width="26px"></td></tr></table></td></tr><tr><td valign="top" height="24px"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/bg-foot-emtempo/" alt="" /></td></tr></table></td></tr></table></div>
</div>
<div id="code">
<p class="code">Código HTML</p>
<p class="code">Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea readonly style="border:1px solid #dedede;width:483px;min-height:500px;padding:20px;background:#fafafa;">
<div style="margin:0 auto;width:100%;padding-top:20px;"><table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="483" style="font-family:arial,verdana,sans-serif !important;color:#333333;"><tr><td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="483px" align="center" valign="top"><tr><td valign="top" height="24px"><img style="vertical-align:bottom;" src="http://primeiraleitura.serpro.gov.br/img-newsletter/bg-top-emtempo/" alt="" /></td></tr><tr><td><table valign="top" border="0" cellpadding="0" cellspacing="0" width="483" height="286px" background="http://primeiraleitura.serpro.gov.br/img-newsletter/bg-content-emtempo/" style="font:75%/1.5;"><tr><td width="26px"  valign="top"></td><td colspan="3"  style="font-size:13px;"  valign="top"><h1 style="font-size:15px;"><?php echo $titulo; ?></h1><p id="data" style="font-size:10px;margin-bottom:10px;"><?php echo date("j/n/y"); ?></p><?php echo (stripslashes($content)); ?></td><td width="26px" valign="top"></td></tr><tr height="66px"><td width="26px"></td><td width="136px"valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/logo-emtempo/" alt="Em Tempo" width="136px" height="66px" /></td><td width="237px"valign="top"></td><td width="110px"valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/logo-serpro-emtempo/" alt="Serpro" width="110px" height="66px" /></td><td width="26px"></td></tr></table></td></tr><tr><td valign="top" height="24px"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/bg-foot-emtempo/" alt="" /></td></tr></table></td></tr></table></div>
</div>
</textarea>
</div>
</div>
	</body>
</html>
<?php session_destroy();?>
