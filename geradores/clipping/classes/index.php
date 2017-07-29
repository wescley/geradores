<?php
include 'forms.class.php';
include 'news.class.php';

$_POST['um'] = "1";
$_POST['not1'] = "Ministério da Fazenda";
$_POST['dois'] = "2";
$_POST['not2'] = "Tecnologia da Informação";

echo "<h2>Formularios</h2>";
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


// conteudo da newsletter
$_SESSION['form1'] = "true";
echo "<h1>Output</h1>";
$assunto = "Assunto";
$titulo = "Titulo";
$url = "http://www.serpro.gov.br";
$url = trim($url);
$data = "5/9/2014";
$veiculo = "O Globo";
$conteudo = "Um conteúdo qualquer inserido às pressas meramente para constar.";

// $_SESSION['secao1']; $_POST['titulo1']; $_POST['url1']; $_POST['data1']; $_POST['veiculo1']; $_POST['conteudo1'];

$blck1 = new News();
$blck1->setForm($_SESSION['form1'], $url, $veiculo, $assunto, $data, $titulo, $conteudo);
echo $blck1->getForm();

$blck2 = new News();
$blck2->setForm($_SESSION['form2'], $url, $veiculo, $assunto, $data, $titulo, $conteudo);
echo $blck2->getForm();
?>
