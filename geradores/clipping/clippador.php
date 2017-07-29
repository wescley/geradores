<?php
session_start();
include 'classes/forms.class.php';
;?>


<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador do Clipping Serpro</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

  <script>
  $(function() {
    var availableTags = [
      "Folha de São Paulo",
      "O Globo",
      "Uol Tecnologia",
      "Estadão",
      "Portal G1",
      "Correio Braziliense",
      "Convergência Digital"
    ];
    $( ".veiculo" ).autocomplete({
      source: availableTags
    });
  });
  </script>
<script>
  $(function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'd/m/yy' });
  });
  </script>
		<style type="text/css">
		label {display:block;}
		</style>

	<!-- OF COURSE YOU NEED TO ADAPT NEXT LINE TO YOUR tiny_mce.js PATH -->
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
		<h1>Clipping Serpro</h1>
		<p class="step">Passo 2/3</p>
		<p>Preencha os formulários abaixo para criar o Resenha Eletrônica.</p>
		<form action="gerador-clipping.php" method="post">
		<?php
$um = new Forms();
$um->setForm( $_POST['um'], $_POST['not1'] );
echo $um->getForm();

$dois = new Forms();
$dois->setForm( $_POST['dois'], $_POST['not2'] );
echo $dois->getForm();

$tres = new Forms();
$tres->setForm( $_POST['tres'], $_POST['not3'] );
echo $tres->getForm();

$quatro = new Forms();
$quatro->setForm( $_POST['quatro'], $_POST['not4'] );
echo $quatro->getForm();

$cinco = new Forms();
$cinco->setForm( $_POST['cinco'], $_POST['not5'] );
echo $cinco->getForm();

$seis = new Forms();
$seis->setForm( $_POST['seis'], $_POST['not6']);
echo $seis->getForm();

$sete = new Forms();
$sete->setForm( $_POST['sete'], $_POST['not7']  );
echo $sete->getForm();

$oito = new Forms();
$oito->setForm( $_POST['oito'], $_POST['not8'] );
echo $oito->getForm();

$nove = new Forms();
$nove->setForm( $_POST['nove'], $_POST['not9'] );
echo $nove->getForm();

$dez = new Forms();
$dez->setForm( $_POST['dez'], $_POST['not10'] );
echo $dez->getForm();
;?><br />
			<input type="submit" value="Enviar" />
			<input type="reset" value="Limpar" />
			</form>

		</div>
	</body>
</html>
