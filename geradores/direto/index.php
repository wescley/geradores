<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador de Formulário do Direto</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />

	<style type="text/css">
	body	{font:70%/1.2 helvetica,verdana,arial,sans-serif;color:#1f1f1f;}
	fieldset {background:#eee;margin:20px 0;width:500px;}
	legend {font-size:20px;font-weight:bold;color:#00569C;font-family:"arial black", impact, arial, sans-serif;}
	label	{margin-top:10px;font-size:1.1em;}
	input, select {}
	hr {}
	
	</style>
<script type="text/javascript">
function apply()
{
// Coluna 1
  document.index.editoria1.disabled=true;
  if(document.index.not1.checked==true)
  {
    document.index.editoria1.disabled=false;
  }
  if(document.index.not1.checked==false)
  {
    document.index.editoria1.enabled=false;
  }

 document.index.editoria2.disabled=true;
  if(document.index.not2.checked==true)
  {
    document.index.editoria2.disabled=false;
  }
  if(document.index.not2.checked==false)
  {
    document.index.editoria2.enabled=false;
  }

 document.index.editoria3.disabled=true;
  if(document.index.not3.checked==true)
  {
    document.index.editoria3.disabled=false;
  }
  if(document.index.not3.checked==false)
  {
    document.index.editoria3.enabled=false;
  }

  document.index.editoria4.disabled=true;
  if(document.index.not4.checked==true)
  {
    document.index.editoria4.disabled=false;
  }
  if(document.index.not4.checked==false)
  {
    document.index.editoria4.enabled=false;
  }

document.index.editoria5.disabled=true;
  if(document.index.not5.checked==true)
  {
    document.index.editoria5.disabled=false;
  }
  if(document.index.not5.checked==false)
  {
    document.index.editoria5.enabled=false;
  }

}
</script>
	</head>
	<body>
	<div id="wrapper">
		<h1>Gerador do Informe Direto</h1>
		<p>Preencha os dados abaixo para criar o formulário de criação do Direto</p>
		<form action="forms.php" method="post" name="index">
		
		<fieldset>
		<ol>
			<li>
				<input type="checkbox" name="not1" value="1" onClick="apply()" />
				<select name="editoria1" disabled="true" >
					<option value="Pessoas">Pessoas</option>
					<option value="Logística">Logística</option>
					<option value="Planejamento">Planejamento</option>
					<option value="Gestão Empresarial">Gestão Empresarial</option>
				</select>
			</li>
			<li>
				<input type="checkbox" name="not2" value="2" onClick="apply()"  />
				<select name="editoria2" disabled="true" >
					<option value="Pessoas">Pessoas</option>
					<option value="Logística">Logística</option>
					<option value="Planejamento">Planejamento</option>
					<option value="Gestão Empresarial">Gestão Empresarial</option>
				</select>
			</li>
			<li>
				<input type="checkbox" name="not3" value="3" onClick="apply()"  />
				<select name="editoria3" disabled="true" >
					<option value="Pessoas">Pessoas</option>
					<option value="Logística">Logística</option>
					<option value="Planejamento">Planejamento</option>
					<option value="Gestão Empresarial">Gestão Empresarial</option>
				</select>
			</li>
			<li>
				<input type="checkbox" name="not4" value="4" onClick="apply()"  />
				<select name="editoria4" disabled="true" >
					<option value="Pessoas">Pessoas</option>
					<option value="Logística">Logística</option>
					<option value="Planejamento">Planejamento</option>
					<option value="Gestão Empresarial">Gestão Empresarial</option>
				</select>
			</li>
			<li>
				<input type="checkbox" name="not5" value="5" onClick="apply()"  />
				<select name="editoria5" disabled="true" >
					<option value="Pessoas">Pessoas</option>
					<option value="Logística">Logística</option>
					<option value="Planejamento">Planejamento</option>
					<option value="Gestão Empresarial">Gestão Empresarial</option>
				</select>
			</li>
		</ol>
		</fieldset>	
			<input type="submit" value="Gerar Formulário" />
			<input type="reset" value="Limpar" />
			</form>

		
		</div>
	</body>
</html>


