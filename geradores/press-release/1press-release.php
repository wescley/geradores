<?php
$mascara = $_POST['image-header'];

switch ($mascara)
{
case "serpro": $url = 'http://andremenezes.info/cecom/press-release/img/press-release-header.png';
break;
case "consegi2011": $url = 'http://andremenezes.info/cecom/press-release/img/press-release-header.png';
break;
}

;?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Convite Output</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<style type="text/css">
#wrapper	{margin:0 auto;width:1000px;}
textarea	{border:1px solid #dedede;width:470px;min-height:500px;padding:20px;background:#fafafa;}
#code		{float:left;width:470px;margin-left:60px;}
#preview	{float:left;width:470px;}


	</style>
</head>
	</head>
	<body>
	<div id="wrapper">
<div id="preview">
		<p>Preview</p>
		<table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="640" style="font:75%/1.3 helvetica,verdana,arial,sans-serif;color:#1f1f1f;" >
		<tr><td>
			<table border="0" cellpadding="0" cellspacing="0" width="640px" align="center" valign="top">
				<tr><td valign="top"><img src="<?php echo $url; ?>" alt="Consegi 2011 - Dados Abertos Para a Democracia Digital"/></td></tr>
				<tr><td valign="top" style="font-size:18px;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-bottom:10px"><span style="font-size:22px;font-weight:bold;color:#CC6600;font-family:trebuchet ms,arial;line-height:250%;"><?php echo $_POST['titulo']; ?></span><br />
				<span style="font-size:16px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;line-height:120%;"><?php echo (stripslashes($_POST['subtitulo'])); ?></span><br /></td></tr>
				<tr><td valign="top" style="font-size:13px !important;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-bottom:10px">		<?php echo (stripslashes($_POST['content'])); ?>
				</td></tr>
				<td valign="top"><br /><span style="font-size:12px;font-weight:normal;color:#333333;font-family:trebuchet ms,arial,sans-serif;"><strong style="font-size:14px;">CONSEGI 2011</strong><br />Data: 11 a 13 de maio <br />Local: Escola de Administração Fazendária – ESAF <br />(Km 04, Estrada Brasília/Unaí (Lago Sul), Brasília/DF</span></td></tr><tr height="20"><td></td></tr><tr><td style="font-size:12px;font-weight:normal;color:#2E689B;font-family:arial,sans-serif;line-height:130%;border-top:1px dotted;"><strong style="line-height:200%;">Informações para Imprensa:</strong><br />Jornalista: Mabel Gomes <br /> Telefone: (21) 2117-3906<br /> email: imprensa@serpro.gov.br<br />http://www.consegi.gov.br/sala_imprensa </td></tr>
			</table>
		</td></tr>
		</table>
		</div>
		<div id="code">
			<p>Código HTML</p>
			<p>Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea readonly>
<div style="margin:0 auto;width:100%;"><table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="640" style="font:75%/1.3 helvetica,verdana,arial,sans-serif;color:#1f1f1f;" ><tr><td><table border="0" cellpadding="0" cellspacing="0" width="640px" align="center" valign="top"><tr><td valign="top"><img src="<?php echo $url; ?>" alt=""/></td></tr><tr><td valign="top" style="font-size:18px;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-bottom:10px"><span style="font-size:22px;font-weight:bold;color:#CC6600;font-family:trebuchet ms,arial;line-height:250%;"><?php echo $_POST['titulo']; ?></span><br /><span style="font-size:16px !important;font-weight:normal;color:#666666;font-style:italic;font-family:arial;line-height:120%;"><?php echo (stripslashes($_POST['subtitulo'])); ?></span><br /></td></tr><tr><td valign="top" style="font-size:13px;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-bottom:10px"><?php echo (stripslashes($_POST['content'])); ?></td></tr><td valign="top"><br /><span style="font-size:12px;font-weight:normal;color:#333333;font-family:trebuchet ms,arial,sans-serif;"><strong style="font-size:14px;">CONSEGI 2011</strong><br />Data: 11 a 13 de maio <br />Local: Escola de Administração Fazendária – ESAF <br />(Km 04, Estrada Brasília/Unaí (Lago Sul), Brasília/DF</span></td></tr><tr height="20"><td></td></tr><tr><td style="font-size:12px;font-weight:normal;color:#2E689B;font-family:arial,sans-serif;line-height:130%;border-top:1px dotted;"><strong style="line-height:200%;">Informações para Imprensa:</strong><br />Jornalista: Mabel Gomes <br /> Telefone: (21) 2117-3906<br /> email: imprensa@serpro.gov.br<br />http://www.consegi.gov.br/sala_imprensa </td></tr></table></td></tr></table></div>
</textarea>
		</div>
	</div>
	</body>
</html>
