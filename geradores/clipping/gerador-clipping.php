<?php session_start();?>
<?php include 'classes/news.class.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Clipping Serpro</title>
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

<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;"><tr><td valign="top" align="center"><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;"><tr><td valign="top"><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"><tr><td valign="top" style="height:75px;border-bottom:1px solid #c0d9ed;font:bold 28px arial,sans-serif;color:#00558d;" bgcolor="#dbe9f5"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/header-clipping/" alt="Clipping Serpro" style="display:block;" width="764" height="75" /></td></tr><tr><td style="height:59px;padding:5px 85px;" bgcolor="#f2f2f2"><span style="font:italic 10px/120% arial,sans-serif;color:#999999;">O Clipping Serpro reúne as últimas notícias publicadas na imprensa em geral e especializada sobre a empresa, seus clientes e assuntos afins. O objetivo é dar ciência ao público estratégico da organização: diretores, assessores, superintendentes e outros ocupantes de função de confiança, sobre conteúdo relevante, positivo ou negativo, relacionado ao Serpro.</span></td></tr></table><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"><tr><td colspan="4" height="35"></td></tr> <!--Noticias --><?php 
$blck1 = new News();
$blck1->setForm($_SESSION['form1'], $_POST['url1'], $_POST['veiculo1'], $_SESSION['not1'], $_POST['data1'], $_POST['titulo1'], $_POST['conteudo1']);
echo $blck1->getForm();

$blck2 = new News();
$blck2->setForm($_SESSION['form2'], $_POST['url2'], $_POST['veiculo2'], $_SESSION['not2'], $_POST['data2'], $_POST['titulo2'], $_POST['conteudo2']);
echo $blck2->getForm();

$blck3 = new News();
$blck3->setForm($_SESSION['form3'], $_POST['url3'], $_POST['veiculo3'], $_SESSION['not3'], $_POST['data3'], $_POST['titulo3'], $_POST['conteudo3']);
echo $blck3->getForm();

$blck4 = new News();
$blck4->setForm($_SESSION['form4'], $_POST['url4'], $_POST['veiculo4'], $_SESSION['not4'], $_POST['data4'], $_POST['titulo4'], $_POST['conteudo4']);
echo $blck4->getForm();

$blck5 = new News();
$blck5->setForm($_SESSION['form5'], $_POST['url5'], $_POST['veiculo5'], $_SESSION['not5'], $_POST['data5'], $_POST['titulo5'], $_POST['conteudo5']);
echo $blck5->getForm();

$blck6 = new News();
$blck6->setForm($_SESSION['form6'], $_POST['url6'], $_POST['veiculo6'], $_SESSION['not6'], $_POST['data6'], $_POST['titulo6'], $_POST['conteudo6']);
echo $blck6->getForm();

$blck7 = new News();
$blck7->setForm($_SESSION['form7'], $_POST['url7'], $_POST['veiculo7'], $_SESSION['not7'], $_POST['data7'], $_POST['titulo7'], $_POST['conteudo7']);
echo $blck7->getForm();

$blck8 = new News();
$blck8->setForm($_SESSION['form8'], $_POST['url8'], $_POST['veiculo8'], $_SESSION['not8'], $_POST['data8'], $_POST['titulo8'], $_POST['conteudo8']);
echo $blck8->getForm();

$blck9 = new News();
$blck9->setForm($_SESSION['form9'], $_POST['url9'], $_POST['veiculo9'], $_SESSION['not9'], $_POST['data9'], $_POST['titulo9'], $_POST['conteudo9']);
echo $blck9->getForm();

$blck10 = new News();
$blck10->setForm($_SESSION['form10'], $_POST['url10'], $_POST['veiculo10'], $_SESSION['not10'], $_POST['data10'], $_POST['titulo10'], $_POST['conteudo10']);
echo $blck10->getForm();
 ?> <!-- end noticias--><tr><td width="85"></td><td colspan="2" style="height:30px; border-top:1px dotted #b3b3b3;border-bottom:1px dotted #b3b3b3;color:#666666;text-align:center;font-family:georgia;line-height:30px;font-size:11px;">Gerado em <?php setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set( 'America/Sao_Paulo' ); echo strftime( '%d de %B de %Y', strtotime('today'));?></td><td width="85"></td></tr></table><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"><tr><td valign="top" style="text-align:center;"><span style="font-size:11px;font-weight:normal;color:#333333;font-family:arial;font-style:italic;line-height:150%"><br />Para ser retirado desta lista, basta enviar um e-mail para comunicacao.saopaulo@serpro.gov.br</span></td></tr><tr><td style="text-align:center;"><br /><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/logo-serpro/" alt="Serpro" style="padding-right:10px;" /></td></tr></table></td></tr></table></td></tr></table>
			</div>

			<div id="code">
				<p>Código HTML</p>
				<p>Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea cols="100" rows="10" readonly>
<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;"><tr><td valign="top" align="center"><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top" style="margin:0;"><tr><td valign="top"><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"><tr><td valign="top" style="height:75px;border-bottom:1px solid #c0d9ed;font:bold 28px arial,sans-serif;color:#00558d;" bgcolor="#dbe9f5"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/header-clipping/" alt="Clipping Serpro" style="display:block;" width="764" height="75" /></td></tr><tr><td style="height:59px;padding:5px 85px;" bgcolor="#f2f2f2"><span style="font:italic 10px/120% arial,sans-serif;color:#999999;">O Clipping Serpro reúne as últimas notícias publicadas na imprensa em geral e especializada sobre a empresa, seus clientes e assuntos afins. O objetivo é dar ciência ao público estratégico da organização: diretores, assessores, superintendentes e outros ocupantes de função de confiança, sobre conteúdo relevante, positivo ou negativo, relacionado ao Serpro.</span></td></tr></table><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"><tr><td colspan="4" height="35"></td></tr> <!--Noticias --><?php 
$blck1 = new News();
$blck1->setForm($_SESSION['form1'], $_POST['url1'], $_POST['veiculo1'], $_SESSION['not1'], $_POST['data1'], $_POST['titulo1'], $_POST['conteudo1']);
echo $blck1->getForm();

$blck2 = new News();
$blck2->setForm($_SESSION['form2'], $_POST['url2'], $_POST['veiculo2'], $_SESSION['not2'], $_POST['data2'], $_POST['titulo2'], $_POST['conteudo2']);
echo $blck2->getForm();

$blck3 = new News();
$blck3->setForm($_SESSION['form3'], $_POST['url3'], $_POST['veiculo3'], $_SESSION['not3'], $_POST['data3'], $_POST['titulo3'], $_POST['conteudo3']);
echo $blck3->getForm();

$blck4 = new News();
$blck4->setForm($_SESSION['form4'], $_POST['url4'], $_POST['veiculo4'], $_SESSION['not4'], $_POST['data4'], $_POST['titulo4'], $_POST['conteudo4']);
echo $blck4->getForm();

$blck5 = new News();
$blck5->setForm($_SESSION['form5'], $_POST['url5'], $_POST['veiculo5'], $_SESSION['not5'], $_POST['data5'], $_POST['titulo5'], $_POST['conteudo5']);
echo $blck5->getForm();

$blck6 = new News();
$blck6->setForm($_SESSION['form6'], $_POST['url6'], $_POST['veiculo6'], $_SESSION['not6'], $_POST['data6'], $_POST['titulo6'], $_POST['conteudo6']);
echo $blck6->getForm();

$blck7 = new News();
$blck7->setForm($_SESSION['form7'], $_POST['url7'], $_POST['veiculo7'], $_SESSION['not7'], $_POST['data7'], $_POST['titulo7'], $_POST['conteudo7']);
echo $blck7->getForm();

$blck8 = new News();
$blck8->setForm($_SESSION['form8'], $_POST['url8'], $_POST['veiculo8'], $_SESSION['not8'], $_POST['data8'], $_POST['titulo8'], $_POST['conteudo8']);
echo $blck8->getForm();

$blck9 = new News();
$blck9->setForm($_SESSION['form9'], $_POST['url9'], $_POST['veiculo9'], $_SESSION['not9'], $_POST['data9'], $_POST['titulo9'], $_POST['conteudo9']);
echo $blck9->getForm();

$blck10 = new News();
$blck10->setForm($_SESSION['form10'], $_POST['url10'], $_POST['veiculo10'], $_SESSION['not10'], $_POST['data10'], $_POST['titulo10'], $_POST['conteudo10']);
echo $blck10->getForm();
 ?> <!-- end noticias--><tr><td width="85"></td><td colspan="2" style="height:30px; border-top:1px dotted #b3b3b3;border-bottom:1px dotted #b3b3b3;color:#666666;text-align:center;font-family:georgia;line-height:30px;font-size:11px;">Gerado em <?php setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set( 'America/Sao_Paulo' ); echo strftime( '%d de %B de %Y', strtotime('today'));?></td><td width="85"></td></tr></table><table border="0" width="764" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" valign="top"><tr><td valign="top" style="text-align:center;"><span style="font-size:11px;font-weight:normal;color:#333333;font-family:arial;font-style:italic;line-height:150%"><br />Para ser retirado desta lista, basta enviar um e-mail para comunicacao.saopaulo@serpro.gov.br</span></td></tr><tr><td style="text-align:center;"><br /><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/logo-serpro/" alt="Serpro" style="padding-right:10px;" /></td></tr></table></td></tr></table></td></tr></table>
</textarea>
			</div>
		</div>
	</body>
</html>
<?php session_destroy(); ?>
