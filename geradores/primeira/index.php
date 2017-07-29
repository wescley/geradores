<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Gerador Formulário | Primeira Leitura</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
function apply()
{
// Coluna 1
  document.index.linha1_1.disabled=true;
  if(document.index.col1_1.checked==true)
  {
    document.index.linha1_1.disabled=false;
  }
  if(document.index.col1_1.checked==false)
  {
    document.index.linha1_1.enabled=false;
  }

 document.index.linha1_2.disabled=true;
  if(document.index.col1_2.checked==true)
  {
    document.index.linha1_2.disabled=false;
  }
  if(document.index.col1_2.checked==false)
  {
    document.index.linha1_2.enabled=false;
  }

 document.index.linha1_3.disabled=true;
  if(document.index.col1_3.checked==true)
  {
    document.index.linha1_3.disabled=false;
  }
  if(document.index.col1_3.checked==false)
  {
    document.index.linha1_3.enabled=false;
  }

// Coluna 2
  document.index.linha2_1.disabled=true;
  if(document.index.col2_1.checked==true)
  {
    document.index.linha2_1.disabled=false;
  }
  if(document.index.col2_1.checked==false)
  {
    document.index.linha2_1.enabled=false;
  }

 document.index.linha2_2.disabled=true;
  if(document.index.col2_2.checked==true)
  {
    document.index.linha2_2.disabled=false;
  }
  if(document.index.col2_2.checked==false)
  {
    document.index.linha2_2.enabled=false;
  }

 document.index.linha2_3.disabled=true;
  if(document.index.col2_3.checked==true)
  {
    document.index.linha2_3.disabled=false;
  }
  if(document.index.col2_3.checked==false)
  {
    document.index.linha2_3.enabled=false;
  }

// Coluna 3 - Informe Parlamentar

  document.index.infopar_two_news.disabled=true;
  if(document.index.col3_1.checked==true)
  {
    document.index.infopar_two_news.disabled=false;
  }
  if(document.index.col3_1.checked==false)
  {
    document.index.infopar_two_news.enabled=false;
  }

// Coluna 3 - Regionais

  document.index.blm_two_news.disabled=true;
  if(document.index.blm.checked==true)
  {
    document.index.blm_two_news.disabled=false;
  }
  if(document.index.blm.checked==false)
  {
    document.index.blm_two_news.enabled=false;
  }

  document.index.bhe_two_news.disabled=true;
  if(document.index.bhe.checked==true)
  {
    document.index.bhe_two_news.disabled=false;
  }
  if(document.index.bhe.checked==false)
  {
    document.index.bhe_two_news.enabled=false;
  }
  
  document.index.bsa_two_news.disabled=true;
  if(document.index.bsa.checked==true)
  {
    document.index.bsa_two_news.disabled=false;
  }
  if(document.index.bsa.checked==false)
  {
    document.index.bsa_two_news.enabled=false;
  }

  document.index.cta_two_news.disabled=true;
  if(document.index.cta.checked==true)
  {
    document.index.cta_two_news.disabled=false;
  }
  if(document.index.cta.checked==false)
  {
    document.index.cta_two_news.enabled=false;
  }
  
  document.index.fla_two_news.disabled=true;
  if(document.index.fla.checked==true)
  {
    document.index.fla_two_news.disabled=false;
  }
  if(document.index.fla.checked==false)
  {
    document.index.fla_two_news.enabled=false;
  }
  
  document.index.fns_two_news.disabled=true;
  if(document.index.fns.checked==true)
  {
    document.index.fns_two_news.disabled=false;
  }
  if(document.index.fns.checked==false)
  {
    document.index.fns_two_news.enabled=false;
  }
  
  document.index.pae_two_news.disabled=true;
  if(document.index.pae.checked==true)
  {
    document.index.pae_two_news.disabled=false;
  }
  if(document.index.pae.checked==false)
  {
    document.index.pae_two_news.enabled=false;
  }

  document.index.rce_two_news.disabled=true;
  if(document.index.rce.checked==true)
  {
    document.index.rce_two_news.disabled=false;
  }
  if(document.index.rce.checked==false)
  {
    document.index.rce_two_news.enabled=false;
  }

  document.index.rjo_two_news.disabled=true;
  if(document.index.rjo.checked==true)
  {
    document.index.rjo_two_news.disabled=false;
  }
  if(document.index.rjo.checked==false)
  {
    document.index.rjo_two_news.enabled=false;
  }

  document.index.sdr_two_news.disabled=true;
  if(document.index.sdr.checked==true)
  {
    document.index.sdr_two_news.disabled=false;
  }
  if(document.index.sdr.checked==false)
  {
    document.index.sdr_two_news.enabled=false;
  }
  
  document.index.spo_two_news.disabled=true;
  if(document.index.spo.checked==true)
  {
    document.index.spo_two_news.disabled=false;
  }
  if(document.index.spo.checked==false)
  {
    document.index.spo_two_news.enabled=false;
  }

}
</script>
	</head>
<?php 
$opcoes = <<<EOD
<option value="pessoas">Pessoas</option>
<option value="logistica">Logística</option>
<option value="tecnologia">Tecnologia</option>
<option value="rsc">Responsabilidade</option>
<option value="educacao">Educação</option>
<option value="gestao">Gestão</option>
<option value="consegi">Consegi</option>
<option value="namidia" >Na mídia</option>
EOD;
	?>
	<body id="index">
	<div id="wrapper">
		<div id="content">
			<h1><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/logo-primeira-leitura/" alt="Primeira Leitura" /></h1>
			<p class="step">Passo 1/2</p>
			<p>Selecione os campos abaixo para gerar o formulário de criação do Primeira Leitura.</p>
			<p>Em caso de dúvida, <a href="manual-primeira.pdf" title="Arquivo em PDF">veja o manual de identidade</a> para checar o posicionamento correto das notícias.</p>

			<form action="gerar-formularios.php" method="post" name="index">
			<fieldset class="coluna margin left">
			<legend>Coluna 1</legend>
			<ol>
				<li>
					<input type="checkbox" name="col1_1" value="1" onClick="apply()" />
					<select name="linha1_1" disabled="true">
						<?php echo $opcoes;?>
					</select>
				</li>
				<li>
					<input type="checkbox" name="col1_2" value="2" onClick="apply()" />
					<select name="linha1_2" disabled="true">
						<?php echo $opcoes;?>
					</select>
				</li>
				<li>
					<input type="checkbox" name="col1_3" value="3" onClick="apply()" />
					<select name="linha1_3" disabled="true">
						<?php echo $opcoes;?>
					</select>
				</li>
			</ol>
			</fieldset>
			<fieldset  class="coluna margin left">
			<legend>Coluna 2</legend>
			<ol>
				<li>
					<input type="checkbox" name="col2_1" value="4" onClick="apply()" />
					<select name="linha2_1" disabled="true">
						<?php echo $opcoes;?>
					</select>
				</li>
				<li>
					<input type="checkbox" name="col2_2" value="5" onClick="apply()" />
					<select name="linha2_2" disabled="true">
						<?php echo $opcoes;?>
					</select>
				</li>
				<li>
					<input type="checkbox" name="col2_3" value="6" onClick="apply()" />
					<select name="linha2_3" disabled="true">
						<?php echo $opcoes;?>
					</select>
				</li>
			</ol>
			</fieldset>
			<fieldset class="coluna3 left">
			<legend>Coluna 3</legend>
			<ol>
				<li>	<input type="checkbox" name="col3_1" value="Informe Parlamentar" onClick="apply()" /> INFORME PARLAMENTAR
					<input type="checkbox" name="infopar_two_news" value="infopar_two_news" disabled="true" onClick="apply()" /> 2 Notícias
				</li>
				<li>
					<input type="checkbox" name="blm" value="blm" onClick="apply()" /> BELÉM
					<input type="checkbox" name="blm_two_news" value="blm_two_news" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="bhe" value="bhe" onClick="apply()" /> BELO HORIZONTE
					<input type="checkbox" name="bhe_two_news" value="bhe_two_news" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="bsa" value="13" onClick="apply()" /> BRASÍLIA
					<input type="checkbox" name="bsa_two_news" value="14" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="cta" value="15" onClick="apply()" /> CURITIBA
					<input type="checkbox" name="cta_two_news" value="16" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="fla" value="19" onClick="apply()" /> FORTALEZA
					<input type="checkbox" name="fla_two_news" value="20" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="fns" value="17" onClick="apply()" /> FLORIANÓPOLIS
					<input type="checkbox" name="fns_two_news" value="18" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="pae" value="21" onClick="apply()" /> PORTO ALEGRE
					<input type="checkbox" name="pae_two_news" value="22" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="rce" value="23" onClick="apply()" /> RECIFE
					<input type="checkbox" name="rce_two_news" value="24" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="rjo" value="25" onClick="apply()" /> RIO DE JANEIRO
					<input type="checkbox" name="rjo_two_news" value="26" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="sdr" value="27" onClick="apply()" /> SALVADOR
					<input type="checkbox" name="sdr_two_news" value="28" disabled="true" onClick="apply()" /> 2 Notícias
					<hr />
					<input type="checkbox" name="spo" value="29" onClick="apply()" /> SÃO PAULO
					<input type="checkbox" name="spo_two_news" value="30" disabled="true" onClick="apply()" /> 2 Notícias
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
