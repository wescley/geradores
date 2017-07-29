<?php
session_start();

?>
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
<div style="text-align:center;"><?php 
if (isset($_POST['um'])){
$_POST['link'] = trim($_POST['link']);
$_POST['image-url'] = trim($_POST['image-url']);
echo <<<EOD
<a href="{$_POST['link']}"><img src="{$_POST['image-url']}" /></a>
EOD;
}
else{
$_POST['image-url'] = trim($_POST['image-url']);
echo <<<EOD
<img src="{$_POST['image-url']}" alt="{$_POST['alt-text']}" />
EOD;
}
?>
</div>
		</div>
		
		<div id="code">
			<p>Código HTML</p>
			<p>Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea readonly>
<div style="text-align:center;"><?php 
if (isset($_POST['um'])){
$_POST['link'] = trim($_POST['link']);
$_POST['image-url'] = trim($_POST['image-url']);
echo <<<EOD
<a href="{$_POST['link']}"><img src="{$_POST['image-url']}" alt="{$_POST['alt-text']}" /></a>
EOD;
}
else{
$_POST['image-url'] = trim($_POST['image-url']);
echo <<<EOD
<img src="{$_POST['image-url']}" alt="{$_POST['alt-text']}" />
EOD;
}
?>
</div>
</textarea>
		</div>
	</div>
	</body>
</html>
