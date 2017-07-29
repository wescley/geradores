<?php
session_start();

class Forms{

	public function generateForms($pick){

switch($pick){
case "1":
if (isset($_POST['not1'])){
$check1 = 'true';
$_SESSION['check1'] = $check1;
$editoria =  $_POST['editoria1'];
$_SESSION['editoria1'] = $editoria;
echo <<<EOD
	<fieldset>
		<legend>$editoria</legend>
		<label for="titulo">Título</label>
		<input type="text" name="titulo" size="50" />
		<br />
		<label for="url">Link para Imagem</label>
		<input type="text" name="url" />
		<br />
		<label for="caption">Texto para a Legenda</label>
		<input type="text" name="caption" size="50" />
		<br />
		<label for="content">Corpo da Notícia</label>
		<textarea name="content" cols="50" rows="15"></textarea>
	</fieldset>
EOD;
}
else {$check1 = 'false';$_SESSION['check1'] = $check1;echo 'Formulário 1 não foi selecionado <br>';}
break;
case "2":
if (isset($_POST['not2'])){
$check2 = 'true';
$_SESSION['check2'] = $check2;
$editoria =  $_POST['editoria2'];
$_SESSION['editoria2'] = $editoria;
echo <<<EOD
	<fieldset>
		<legend>$editoria</legend>
		<label for="titulo2">Título</label>
		<input type="text" name="titulo2" size="50" />
		<br />
		<label for="url2">Link para Imagem</label>
		<input type="text" name="url2" />
		<br />
		<label for="caption2">Texto para a Legenda</label>
		<input type="text" name="caption2" size="50" />
		<br />
		<label for="content2">Corpo da Notícia</label>
		<textarea name="content2" cols="50" rows="15"></textarea>
	</fieldset>
EOD;
}
else {$check2 = 'false';$_SESSION['check2'] = $check2;echo 'Formulário 2 não foi selecionado <br>';}
break;
case "3":
if (isset($_POST['not3'])){
$check3 = 'true';
$_SESSION['check3'] = $check3;
$editoria =  $_POST['editoria3'];
$_SESSION['editoria3'] = $editoria;
echo <<<EOD
	<fieldset>
		<legend>$editoria</legend>
		<label for="titulo3">Título</label>
		<input type="text" name="titulo3" size="50" />
		<br />
		<label for="url3">Link para Imagem</label>
		<input type="text" name="url3" />
		<br />
		<label for="caption3">Texto para a Legenda</label>
		<input type="text" name="caption3" size="50" />
		<br />
		<label for="content3">Corpo da Notícia</label>
		<textarea name="content3" cols="50" rows="15"></textarea>
	</fieldset>
EOD;
}
else {$check3 = 'false';$_SESSION['check3'] = $check3;echo 'Formulário 3 não foi selecionado <br>';}
break;
case "4":
if (isset($_POST['not4'])){
$check4 = 'true';
$_SESSION['check4'] = $check4;
$editoria =  $_POST['editoria4'];
$_SESSION['editoria4'] = $editoria;
echo <<<EOD
	<fieldset>
		<legend>$editoria</legend>
		<label for="titulo4">Título</label>
		<input type="text" name="titulo4" size="50" />
		<br />
		<label for="url4">Link para Imagem</label>
		<input type="text" name="url4" />
		<br />
		<label for="caption4">Texto para a Legenda</label>
		<input type="text" name="caption4" size="50" />
		<br />
		<label for="content4">Corpo da Notícia</label>
		<textarea name="content4" cols="50" rows="15"></textarea>
	</fieldset>
EOD;
}
else {$check4 = 'false';$_SESSION['check4'] = $check4;echo 'Formulário 4 não foi selecionado <br>';}
break;
case "5":
if (isset($_POST['not5'])){
$check5 = 'true';
$_SESSION['check5'] = $check5;
$editoria =  $_POST['editoria5'];
$_SESSION['editoria5'] = $editoria;
echo <<<EOD
	<fieldset>
		<legend>$editoria</legend>
		<label for="titulo5">Título</label>
		<input type="text" name="titulo5" size="50" />
		<br />
		<label for="url5">Link para Imagem</label>
		<input type="text" name="url5" />
		<br />
		<label for="caption5">Texto para a Legenda</label>
		<input type="text" name="caption5" size="50" />
		<br />
		<label for="content5">Corpo da Notícia</label>
		<textarea name="content5" cols="50" rows="15"></textarea>
	</fieldset>
EOD;
}
else {$check5 = 'false';$_SESSION['check5'] = $check5;echo 'Formulário 5 não foi selecionado <br>';}
break;
}// END SWITCH
}// END FUNCTION GENERATEFORMS
}// END CLASS FORMS

class createNews extends Forms{

public function block1(){
$check1 = $_SESSION['check1'];
$editoria = $_SESSION['editoria1'];

// Primeira Noticia
if ($check1 == 'true'){

$titulo = $_POST['titulo'];
$titulo= stripslashes($titulo);
$url = $_POST['url'];
$caption = $_POST['caption'];
$content = $_POST['content'];
$content = stripslashes($content);

echo <<<EOD
<tr><td><img style="vertical-align:bottom;" src="http://www4.serpro.gov.br/direto/hr.png" /></td></tr><!-- Outros Artigos #1 --><tr>	<td><table width="750" bgcolor="#e7e7e7" style="padding:30px 0;" ><td width="75"></td><td width="180px" align="left" valign="top"><img src="$url" alt="" style="background-color:#ffffff; padding:6px" /><p class="caption" style="line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: monospace;padding-top: 5px;font-size: 10px">$caption</p></td><td width="20"></td><td width="400px" valign="top" style="color: #666"><h2 style="color:#246092;font:22px impact, serif;margin: 0;">$editoria</h2><h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666">$titulo</h3>$content</td><td width="75"></td></table></td></tr><!-- Fim Outros Artigos #1-->
EOD;
}
elseif ($check1 == 'false'){}

}// END FUNCTION BLOCK 1
public function block2(){
$check2 = $_SESSION['check2'];
$editoria = $_SESSION['editoria2'];
// Segunda Noticia
if ($check2 == 'true'){

$titulo2 = $_POST['titulo2'];
$titulo2 = stripslashes($titulo2);
$url2 = $_POST['url2'];
$caption2 = $_POST['caption2'];
$content2 = $_POST['content2'];
$content2 = stripslashes($content2);

echo <<<EOD
<tr><td><img src="http://www4.serpro.gov.br/direto/hr2.png" /></td></tr><!-- Outros Artigos #2 --><tr><td><table width="750" bgcolor="#f2f2f2" style="padding:30px 0;" ><td width="75"></td><td width="180px" align="left" valign="top"><img src="$url2" alt="" style="background-color:#ffffff; padding:6px" /><p class="caption" style="line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: monospace;padding-top: 5px;font-size: 10px">$caption2</p></td><td width="20"></td><td width="400px" valign="top" style="color: #666"><h2 style="color:#246092;font:22px impact, serif;margin: 0;">$editoria</h2><h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666">$titulo2</h3>$content2</td><td width="75"></td></table></td></tr><!-- Fim Outros Artigos #2-->
EOD;
}
elseif ($check2 == 'false'){}
}// END FUNCTION BLOCK 2

public function block3(){
$check3 = $_SESSION['check3'];
$editoria = $_SESSION['editoria3'];
// Terceira Noticia
if ($check3 == 'true'){
$titulo = $_POST['titulo3'];
$titulo = stripslashes($titulo);
$url = $_POST['url3'];
$caption = $_POST['caption3'];
$content = $_POST['content3'];
$content = stripslashes($content);

echo <<<EOD
<tr><td><img style="vertical-align:bottom;" src="http://www4.serpro.gov.br/direto/hr.png" /></td></tr><!-- Outros Artigos #3 --><tr><td><table width="750" bgcolor="#e7e7e7" style="padding:30px 0;" ><td width="75"></td><td width="180px" align="left" valign="top"><img src="$url" alt="" style="background-color:#ffffff; padding:6px" /><p class="caption" style="line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: monospace;padding-top: 5px;font-size: 10px">$caption</p></td><td width="20"></td><td width="400px" valign="top" style="color: #666"><h2 style="color:#246092;font:22px impact, serif;margin: 0;">$editoria</h2><h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666">$titulo</h3>$content</td><td width="75"></td></table></td></tr><!-- Fim Outros Artigos #3-->
EOD;
}
elseif ($check3 == 'false'){}
}// END FUNCTION BLOCK 3

public function block4(){
$check4 = $_SESSION['check4'];
$editoria = $_SESSION['editoria4'];
// Quarta Noticia
if ($check4 == 'true'){
$titulo = $_POST['titulo4'];
$titulo = stripslashes($titulo);
$url = $_POST['url4'];
$caption = $_POST['caption4'];
$content = $_POST['content4'];
$content = stripslashes($content);

echo <<<EOD
<tr><td><img src="http://www4.serpro.gov.br/direto/hr2.png" /></td></tr><!-- Outros Artigos #4 --><tr><td><table width="750" bgcolor="#f2f2f2" style="padding:30px 0;" ><td width="75"></td><td width="180px" align="left" valign="top"><img src="$url" alt="" style="background-color:#ffffff; padding:6px" /><p class="caption" style="line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: monospace;padding-top: 5px;font-size: 10px">$caption</p></td><td width="20"></td><td width="400px" valign="top" style="color: #666"><h2 style="color:#246092;font:22px impact, serif;margin: 0;">$editoria</h2><h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666">$titulo</h3>$content</td><td width="75"></td></table></td></tr><!-- Fim Outros Artigos #4-->
EOD;
}
elseif ($check3 == 'false'){}
}// END FUNCTION BLOCK 4

public function block5(){
$check5 = $_SESSION['check5'];
$editoria = $_SESSION['editoria5'];
// Terceira Noticia
if ($check5 == 'true'){
$titulo = $_POST['titulo5'];
$titulo = stripslashes($titulo);
$url = $_POST['url5'];
$caption = $_POST['caption5'];
$content = $_POST['content5'];
$content = stripslashes($content);

echo <<<EOD
<tr><td><img style="vertical-align:bottom;" src="http://www4.serpro.gov.br/direto/hr.png" /></td></tr><!-- Outros Artigos #5 --><tr><td><table width="750" bgcolor="#e7e7e7" style="padding:30px 0;" >	<td width="75"></td><td width="180px" align="left" valign="top"><img src="$url" alt="" style="background-color:#ffffff; padding:6px" /><p class="caption" style="line-height: 1.4;padding: 5px 0;margin: 0;color: #246092;font-family: monospace;padding-top: 5px;font-size: 10px">$caption</p></td><td width="20"></td><td width="400px" valign="top" style="color: #666"><h2 style="color:#246092;font:22px impact, serif;margin: 0;">$editoria</h2><h3 style="font-size: 16px;margin: 0;font-family: tahoma, arial, sans-serif;color: #666">$titulo</h3>$content</td><td width="75"></td></table></td></tr><!-- Fim Outros Artigos #5-->
EOD;
}
elseif ($check3 == 'false'){}
}// END FUNCTION BLOCK 5

}// END CLASS NEWS
?>
