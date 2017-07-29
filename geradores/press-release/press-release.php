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
				<tr><td valign="top" style="font-size:16px;background-color:#30a399;color:#ffffff;padding:8px;">Sugestão de pauta</td></tr>
				<tr><td valign="top" style="font-size:16px;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-top:15px;padding-bottom:20px;text-align:center;"><span style="font-size:21px;font-weight:bold;color:#206b64;font-family:'trebuchet ms',arial;line-height:150%;"><?php echo $_POST['titulo']; ?></span><br /><br />
<span style="font-size:14px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;line-height:120%;"><?php echo (stripslashes($_POST['sutia'])); ?></span><br /></td></tr>
				<tr><td valign="top" style="font-size:13px !important;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-bottom:10px">		<?php echo (stripslashes($_POST['content'])); ?>
<p><strong>Fonte para entrevista:</strong><br />
Diretor-presidente do Serpro, Marcos Mazoni</p>
				</td></tr>
				<tr><td valign="top"><hr /></td></tr><tr height="20"><td></td></tr><tr><td><table border="0" cellpadding="0" cellspacing="0" width="640px" align="center" valign="top"style="font-size:12px;font-weight:normal;color:#ffffff;font-family:arial,sans-serif;line-height:130%;padding:0 0 0 10px;background-color:#cbe4e3;"><tr><td style="color:#206b64;"><span style="font-size:12px;font-weight:normal;color:#206b64;font-family:trebuchet ms,arial,sans-serif;"><strong style="font-size:14px;color:#30a399;">CONSEGI 2013</strong><br /><br />Data: 13 a 15 de agosto <br />Local: Escola de Administração Fazendária (Esaf) <br />(Km 04, Estrada Brasília/Unaí (Lago Sul), Brasília/DF<br /><br /><strong>INSCRIÇÕES GRATUITAS</strong><br /><a href="http://www.consegi.gov.br/">www.consegi.gov.br/</a></span></td><td style="background-color:#206b64;color:#ffffff;padding:10px;"><strong style="line-height:200%;font-size:15px;">Informações para imprensa:</strong><br /><strong>&middot; Vanessa Borges</strong> (61) 2021-8331/ (61) 9396-1945<br /><strong>&middot; Lea Cunha</strong> (61) 2021-7964/ (61) 9558-2117<br /><strong>&middot; Mabel Gomes</strong> (61) 2021-7964/ (61) 9558-2117<br /><br />imprensa@serpro.gov.br<br /><a href="http://www.consegi.gov.br/imprensa/" style="color:#cbe4e3;">www.consegi.gov.br/imprensa/</a></td></tr></table>
</td></tr></table></td></tr></table></div>
		</div>
		<div id="code">
			<p>Código HTML</p>
			<p>Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea readonly>
<div style="margin:0 auto;width:100%;"><table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="640" style="font:75%/1.3 helvetica,verdana,arial,sans-serif;color:#1f1f1f;"><tr><td><table border="0" cellpadding="0" cellspacing="0" width="640px" align="center" valign="top"><tr><td valign="top" style="font-size:16px;background-color:#30a399;color:#ffffff;padding:8px;">Sugestão de pauta</td></tr><tr><td valign="top" style="font-size:16px;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-top:15px;padding-bottom:20px;text-align:center;"><span style="font-size:21px;font-weight:bold;color:#206b64;font-family:'trebuchet ms',arial;line-height:150%;"><?php echo $_POST['titulo']; ?></span><br /><br /><span style="font-size:14px;font-weight:normal;color:#666666;font-style:italic;font-family:arial;line-height:120%;"><?php echo (stripslashes($_POST['sutia'])); ?></span><br /></td></tr><tr><td valign="top" style="font-size:13px !important;color:#000000;line-height:140%;font-family:arial,sans-serif;padding-bottom:10px"><?php echo (stripslashes($_POST['content'])); ?><br /><p><strong>Fonte para entrevista:</strong><br />Diretor-presidente do Serpro, Marcos Mazoni</p></td></tr><tr><td valign="top"><hr /></td></tr><tr height="20"><td></td></tr><tr><td><table border="0" cellpadding="0" cellspacing="0" width="640px" align="center" valign="top"style="font-size:12px;font-weight:normal;color:#ffffff;font-family:arial,sans-serif;line-height:130%;padding:0 0 0 10px;background-color:#cbe4e3;"><tr><td style="color:#206b64;"><span style="font-size:12px;font-weight:normal;color:#206b64;font-family:trebuchet ms,arial,sans-serif;"><strong style="font-size:14px;color:#30a399;">CONSEGI 2013</strong><br /><br />Data: 13 a 15 de agosto <br />Local: Escola de Administração Fazendária (Esaf) <br />(Km 04, Estrada Brasília/Unaí (Lago Sul), Brasília/DF<br /><br /><strong>INSCRIÇÕES GRATUITAS</strong><br /><a href="http://www.consegi.gov.br/">www.consegi.gov.br/</a></span></td><td style="background-color:#206b64;color:#ffffff;padding:10px;"><strong style="line-height:200%;font-size:15px;">Informações para imprensa:</strong><br /><strong>&middot; Vanessa Borges</strong> (61) 2021-8331/ (61) 9396-1945<br /><strong>&middot; Lea Cunha</strong> (61) 2021-7964/ (61) 9558-2117<br /><strong>&middot; Mabel Gomes</strong> (61) 2021-7964/ (61) 9558-2117<br /><br />imprensa@serpro.gov.br<br /><a href="http://www.consegi.gov.br/imprensa/" style="color:#cbe4e3;">www.consegi.gov.br/imprensa/</a></td></tr></table>
</td></tr></table></td></tr></table></div>
</textarea>
		</div>
	</div>
	</body>
</html>
