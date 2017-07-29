<?php session_start();?>
<?php include 'gerar-resenha.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Resenha Eletrônica</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<style type="text/css">
	#wrapper	{margin:0 auto;width:1000px;}
	p		{font-size:11px;font-family:verdana,arial,sans-serif;line-height:1.4;padding:5px 0;margin:0;color:#666666;}
	h2		{font-size:22px, font-family:impact,serif;margin:0;}
	h3		{font-size:16px;margin:0;font-family:tahoma,arial, sans-serif;color:#666666;}
	blockquote	{color:#2c89a0;}
	.caption	{font-family:monospace;font-size:1.4em;color:#246092;padding-top:5px;font-size:10px;}
	#pullquote	{font-family:georgia,serif;color:#246092;font-size:15px;font-style:italic;padding-top:20px;}
	blockquote	{font:1.3em monospace;padding:20px 0 10px 10px;}
	ul		{padding:10px 0;font:11px/1.2 verdana,arial,sans-serif;color:#666666;}
	li		{list-style-type:disc !important;padding:5px 0;list-style-image:none !important;}
	#code		{float:left;margin-left:60px;}
	</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="preview">
				<p>Preview</p>
				<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;">
<tr><td valign="top" align="center"><table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;"> <tr><td valign="top" align="center"> <table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#f2f2f2" valign="top"> <tr> <td valign="top"> <span style="font-size:12px;font-weight:bold;color:#CC6600;font-family:trebuchet ms,arial;"> <img src="http://primeiraleitura.serpro.gov.br/img-newsletter/resenha-header/" alt="Resenha Eletrônica" /></span> </td> </tr> <tr> <td style="height:20px;" bgcolor="#7C909B"> <span style="font-size:12px;font-weight:normal;color:#ffffff;font-style:italic;font-family:arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notícias de <?php echo $_POST['data'] ;?></span> </td> </tr> </table> <table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#f2f2f2" valign="top"><tr><td colspan="3" height="20"></td></tr><tr><td width="20"></td><td><span style="font:italic 10px/120% arial,sans-serif;color:#999999;">O Clipping Serpro reúne as últimas notícias publicadas na imprensa em geral e especializada sobre a empresa, seus clientes e assuntos afins. O objetivo é dar ciência ao público estratégico da organização: diretores, assessores, superintendentes e outros ocupantes de função de confiança, sobre conteúdo relevante, positivo ou negativo, relacionado ao Serpro.</span></td><td width="20"></td><td width="20"></td></tr><tr><td colspan="3" height="20"></td></tr><tr><td width="50"></td> <td valign="top" width="550" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;"><?php primeiraNoticia() ;?><?php segundaNoticia() ;?><?php terceiraNoticia() ;?><?php quartaNoticia() ;?><?php quintaNoticia() ;?><?php sextaNoticia() ;?><?php setimaNoticia() ;?><?php oitavaNoticia() ;?><?php nonaNoticia() ;?><?php decimaNoticia() ;?><br /></td> <td width="50"></td> </tr> </table> <table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"> <tr><td width="550" style="height:5px;"bgcolor="#E5E5E5"></td></tr> <tr> <td valign="top" style="text-align:center;"> <span style="font-size:10px;font-weight:normal;color:#4d4d4d;font-family:verdana;line-height:150%"><br />Para ser retirado desta lista, basta enviar um e-mail para comunicacao.saopaulo@serpro.gov.br</span></td></tr><tr><td style="text-align:center;"><br /><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/assinatura/" alt="Serpro" style="padding-right:10px;"></td></tr></table></td></tr></table></td></tr></table>
			</div>

			<div id="code">
				<p>Código HTML</p>
				<p>Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea cols="100" rows="10" readonly>
<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;">
<tr><td valign="top" align="center"><table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;"><tr><td valign="top"><table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#f2f2f2" valign="top"> <tr> <td valign="top"> <span style="font-size:12px;font-weight:bold;color:#CC6600;font-family:trebuchet ms,arial;"> <img src="http://primeiraleitura.serpro.gov.br/img-newsletter/resenha-header/" alt="Resenha Eletrônica" /></span> </td> </tr> <tr> <td style="height:20px;" bgcolor="#7C909B"> <span style="font-size:12px;font-weight:normal;color:#ffffff;font-style:italic;font-family:arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notícias de <?php echo $_POST['data'] ;?></span> </td> </tr> </table> <table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#f2f2f2" valign="top"><tr><td colspan="3" height="20"></td></tr><tr><td width="20"></td><td><span style="font:italic 10px/120% arial,sans-serif;color:#999999;">O Clipping Serpro reúne as últimas notícias publicadas na imprensa em geral e especializada sobre a empresa, seus clientes e assuntos afins. O objetivo é dar ciência ao público estratégico da organização: diretores, assessores, superintendentes e outros ocupantes de função de confiança, sobre conteúdo relevante, positivo ou negativo, relacionado ao Serpro.</span></td><td width="20"></td><td width="20"></td></tr><tr><td colspan="3" height="20"></td></tr><tr><td width="50"></td> <td valign="top" width="550" style="font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;"><?php primeiraNoticia() ;?><?php segundaNoticia() ;?><?php terceiraNoticia() ;?><?php quartaNoticia() ;?><?php quintaNoticia() ;?><?php sextaNoticia() ;?><?php setimaNoticia() ;?><?php oitavaNoticia() ;?><?php nonaNoticia() ;?><?php decimaNoticia() ;?><br /> </td> <td width="50"></td> </tr> </table> <table border="0" width="803" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"> <tr><td width="550" style="height:5px;"bgcolor="#E5E5E5"></td></tr> <tr> <td valign="top" style="text-align:center;"> <span style="font-size:10px;font-weight:normal;color:#4d4d4d;font-family:verdana;line-height:150%"><br />Para ser retirado desta lista, basta enviar um e-mail para comunicacao.saopaulo@serpro.gov.br</span></td></tr><tr><td style="text-align:center;"><br /><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/assinatura/" alt="Serpro" style="padding-right:10px;"></td></tr></table></td></tr></table></td></tr></table>
</textarea>
			</div>
		</div>
	</body>
</html>
