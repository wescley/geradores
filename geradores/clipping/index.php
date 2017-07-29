<?php 
// SELECT BOX OPTION INDEX.PHP
$opcoes = <<<EOD
<option value="Serpro">Serpro</option>
<option value="Clientes">Clientes</option>
<option value="Política">Política</option>
<option value="Economia">Economia</option>
<option value="Sociedade">Sociedade</option>
<option value="Mundo">Mundo</option>
<option value="Tecnologia da Informação">Tecnologia da Informação</option>
<option value="Ministério da Fazenda">Ministério da Fazenda</option>
EOD;
;?>

<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Gerador Formulário | Clipping Serpro</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
function apply()
{
// Notícias
  document.index.not1.disabled=true;
  if(document.index.um.checked==true)
  {
    document.index.not1.disabled=false;
  }
  if(document.index.um.checked==false)
  {
    document.index.not1.enabled=false;
  }

  document.index.not2.disabled=true;
  if(document.index.dois.checked==true)
  {
    document.index.not2.disabled=false;
  }
  if(document.index.dois.checked==false)
  {
    document.index.not2.enabled=false;
  }

  document.index.not3.disabled=true;
  if(document.index.tres.checked==true)
  {
    document.index.not3.disabled=false;
  }
  if(document.index.tres.checked==false)
  {
    document.index.not3.enabled=false;
  }

  document.index.not4.disabled=true;
  if(document.index.quatro.checked==true)
  {
    document.index.not4.disabled=false;
  }
  if(document.index.quatro.checked==false)
  {
    document.index.not4.enabled=false;
  }

  document.index.not5.disabled=true;
  if(document.index.cinco.checked==true)
  {
    document.index.not5.disabled=false;
  }
  if(document.index.cinco.checked==false)
  {
    document.index.not5.enabled=false;
  }

  document.index.not6.disabled=true;
  if(document.index.seis.checked==true)
  {
    document.index.not6.disabled=false;
  }
  if(document.index.seis.checked==false)
  {
    document.index.not6.enabled=false;
  }

  document.index.not7.disabled=true;
  if(document.index.sete.checked==true)
  {
    document.index.not7.disabled=false;
  }
  if(document.index.sete.checked==false)
  {
    document.index.not7.enabled=false;
  }

  document.index.not8.disabled=true;
  if(document.index.oito.checked==true)
  {
    document.index.not8.disabled=false;
  }
  if(document.index.oito.checked==false)
  {
    document.index.not8.enabled=false;
  }

  document.index.not9.disabled=true;
  if(document.index.nove.checked==true)
  {
    document.index.not9.disabled=false;
  }
  if(document.index.nove.checked==false)
  {
    document.index.not9.enabled=false;
  }

  document.index.not10.disabled=true;
  if(document.index.dez.checked==true)
  {
    document.index.not10.disabled=false;
  }
  if(document.index.dez.checked==false)
  {
    document.index.not10.enabled=false;
  }



}
</script>
	</head>
	<body id="index">
	<div id="wrapper">
		<div id="content">
			<h1>Clipping Serpro</h1>
			<p class="step">Passo 1/3</p>
			<p>Selecione os campos abaixo para gerar o formulário de criação do Clipping Serpro.</p>
			<form action="clippador.php" method="post" name="index">
			<fieldset class="noticias">
				<legend>Notícias</legend>
				<ol>
					<li>
						<input type="checkbox" name="um" value="1" onClick="apply()" />
						<select name="not1" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="dois" value="2" onClick="apply()" />
						<select name="not2" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="tres" value="3" onClick="apply()" />
						<select name="not3" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="quatro" value="4" onClick="apply()" />
						<select name="not4" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="cinco" value="5" onClick="apply()" />
						<select name="not5" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="seis" value="6" onClick="apply()" />
						<select name="not6" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="sete" value="7" onClick="apply()" />
						<select name="not7" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="oito" value="8" onClick="apply()" />
						<select name="not8" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="nove" value="9" onClick="apply()" />
						<select name="not9" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>
					<li>
						<input type="checkbox" name="dez" value="10" onClick="apply()" />
						<select name="not10" disabled="true">
							<?php echo $opcoes;?>
						</select>
					</li>

				</ol>
			</fieldset>
			<div class="clear">
				<input type="submit" value="Gerar Formulário" name="submit" />
				<input type="reset" value="Limpar" />
			</div>
			</form>
		</div>
	</div>
	</body>
</html>
