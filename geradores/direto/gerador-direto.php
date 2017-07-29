<?php session_start();
include 'class_direto.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Direto - Informe Gerencial</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<style type="text/css">
	p		{font-size:11px;font-family:verdana,arial,sans-serif;line-height:1.4;padding:5px 0;margin:0;color:#666666;}
	h2		{font-size:22px, font-family:impact,serif;margin:0;}
	h3		{font-size:16px;margin:0;font-family:tahoma,arial, sans-serif;color:#666666;}
	blockquote	{color:#2c89a0;}
	.caption	{font-family:monospace;font-size:1.4em;color:#246092;padding-top:5px;font-size:10px;}
	#pullquote	{font-family:georgia,serif;color:#246092;font-size:15px;font-style:italic;padding-top:20px;}
	blockquote	{font:1.3em monospace;padding:20px 0 10px 10px;}
	ul		{padding:10px 0;font:11px/1.2 verdana,arial,sans-serif;color:#666666;}
	li		{list-style-type:disc !important;padding:5px 0;list-style-image:none !important;}
	</style>
	</head>
<body style="margin:0; padding:0;">
<table border="0" width="750" cellpadding="0" cellspacing="0" align="center" bgcolor="#f2f2f2" valign="top"><!-- header --><tr><td> <table border="0" width="750" cellpadding="0" cellspacing="0" height="190px" background="http://www4.serpro.gov.br/direto/bg-header.png"><tr><td width="75"></td> <td width="600" height="190px" valign="top"> <img src="http://www4.serpro.gov.br/direto/logo-direto.png" alt="Direto - Informe Gerencial" /></td> <td width="75"></td> </tr></table></td> </tr><tr><td><table border="0" width="750" cellpadding="0" cellspacing="0"><tr><td width="75"></td><td width="204"></td><td width="396" align="left" style="font-size:11px;color:#246092;"><?php $data = date("j/n/y"); echo $data; ?></td><td width="75"></td> </tr></table></td> </tr><tr><td> <table border="0" width="750" cellpadding="0" cellspacing="0" height="155px" style="padding-top:40px;"><tr><td width="75"></td> <td width="372" valign="top" style="color: #666"> <h2 style="color: #d40000;font:22px impact, serif;margin: 0;">Destaque</h2> <h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666"><?php echo $_POST['titulo-destaque']; ?></h3> <?php echo (stripslashes($_POST['content-destaque'])); ?><p style="padding-bottom: 40px;">&nbsp;</p></td> <td width="49"></td> <td width="159" bgcolor="#ffffff" style="padding:20px 10px;" align="center" valign="top"><img src="<?php echo $_POST['url_destaque'];?>" alt="" /><p id="cite" style="text-align: left;font: 11px/1.2 verdana, arial, sans-serif;line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: georgia, serif;font-size: 15px;font-style: italic;padding-top: 20px"><?php echo $_POST['pullquote-destaque']; ?></p></td> <td width="75"></td> </tr></table></td> </tr>
<?php
$block1 = new createNews();
$block1->block1();
$block2 = new createNews();
$block2->block2();
$block3 = new createNews();
$block3->block3();
$block4 = new createNews();
$block4->block4();
$block5 = new createNews();
$block5->block5();
;?>
<tr><td><img src="http://www4.serpro.gov.br/direto/bg-footer.png" /></td></tr><tr><td> <table width="750" bgcolor="#ffffff" style="padding:20px 0;"><td width="75"></td> <td align="center"><img src="http://www4.serpro.gov.br/direto/serpro.png" alt="Serpro - Serviço Federal de Processamento de Dados" /></td> <td width="75"></td></table></td> </tr></table>

<textarea readonly style="border:1px solid #dedede;width:470px;min-height:500px;padding:20px;background:#fafafa;">
<table border="0" width="750" cellpadding="0" cellspacing="0" align="center" bgcolor="#f2f2f2" valign="top"><!-- header --><tr><td> <table border="0" width="750" cellpadding="0" cellspacing="0" height="190px" background="http://www4.serpro.gov.br/direto/bg-header.png"><tr><td width="75"></td> <td width="600" height="190px" valign="top"> <img src="http://www4.serpro.gov.br/direto/logo-direto.png" alt="Direto - Informe Gerencial" /></td> <td width="75"></td> </tr></table></td> </tr><tr><td><table border="0" width="750" cellpadding="0" cellspacing="0"><tr><td width="75"></td><td width="204"></td><td width="396" align="left" style="font-size:11px;color:#246092;"><?php $data = date("j/n/y"); echo $data; ?></td><td width="75"></td> </tr></table></td> </tr><tr><td> <table border="0" width="750" cellpadding="0" cellspacing="0" height="155px" style="padding-top:40px;"><tr><td width="75"></td> <td width="372" valign="top" style="color: #666"> <h2 style="color: #d40000;font:22px impact, serif;margin: 0;">Destaque</h2> <h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666"><?php echo $_POST['titulo-destaque']; ?></h3> <?php echo (stripslashes($_POST['content-destaque'])); ?><p style="padding-bottom: 40px;">&nbsp;</p></td> <td width="49"></td> <td width="159" bgcolor="#ffffff" style="padding:20px 10px;" align="center" valign="top"><img src="<?php echo $_POST['url_destaque'];?>" alt="" /><p id="cite" style="text-align: left;font: 11px/1.2 verdana, arial, sans-serif;line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: georgia, serif;font-size: 15px;font-style: italic;padding-top: 20px"><?php echo $_POST['pullquote-destaque']; ?></p></td> <td width="75"></td></tr></table></td> </tr>
<?php
$block1 = new createNews();
$block1->block1();
$block2 = new createNews();
$block2->block2();
$block3 = new createNews();
$block3->block3();
$block4 = new createNews();
$block4->block4();
$block5 = new createNews();
$block5->block5();
;?>
<tr><td><img src="http://www4.serpro.gov.br/direto/bg-footer.png" /></td></tr><tr><td> <table width="750" bgcolor="#ffffff" style="padding:20px 0;"><td width="75"></td> <td align="center"><img src="http://www4.serpro.gov.br/direto/serpro.png" alt="Serpro - Serviço Federal de Processamento de Dados" /></td> <td width="75"></td></table></td> </tr></table>
</textarea>
</body>
</html>
