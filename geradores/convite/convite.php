<?php
$mascara = $_POST['image-header'];

switch ($mascara)
{
case "serpro": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/serpro/';
$alt = 'Serpro Institucional';
break;
case "responsabilidade": $url = 'http://primeiraleitura.serpro.gov.br/imagens/responsabilize-se/';
$alt = 'Responsabilize-se';
break;
case "tv": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/tv-serpro/';
$alt = 'TV Serpro';
break;
case "cisl": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/cisl/';
$alt = 'Comitê de Implementação de Software Livre - CISL';
break;
case "expresso": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/expresso/';
$alt = 'Expresso';
break;
case "uniserpro": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/uniserpro/';
$alt = 'Uniserpro';
break;
case "apa": $url = 'http://primeiraleitura.serpro.gov.br/imagens/apa-2017/';
$alt = 'APA';
break;
case "inclusao": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/inclusao-digital-1/';
$alt = 'Inclusão Digital';
break;
case "consegi": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/convite-consegi/';
$alt = 'Consegi';
break;
case "conserpro": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/convite-conserpro/';
$alt = 'Conserpro';
break;
case "diario-conserpro": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/diario-conserpro/';
$alt = 'Diário Conserpro';
break;
case "aniversario-serpro": $url = 'http://primeiraleitura.serpro.gov.br/imagens/convite-52-anos-do-serpro/';
$alt = 'Aniversário Serpro';
break;
case "semitecnologicos": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/seminarios-tecnologicos/';
$alt = 'Seminários Tecnológicos';
break;			
case "pas": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/convite-pas/';
$alt = 'PAS Serpro';
break;
case "demoiselle": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/demoiselle/';
$alt = 'Demoiselle';
break;
case "planejamento-2016": $url = 'http://primeiraleitura.serpro.gov.br/imagens/topo-convite-planejamento-2016/';
$alt = 'Planejamento Estratégico';
break;
case "planejamento-2017": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/planejamento-estrategico/';
$alt = 'Planejamento Estratégico';
break;
case "fisl": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/fisl-14/';
$alt = 'FISL';
break;
case "cipa": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/cipa-prevencao-de-acidentes/';
$alt = 'CIPA _ Prevenção de Acidentes';
break;
case "qvt": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/qvt-serpro/';
$alt = 'QVT';
break;
case "gdes": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/gdes/';
$alt = 'GDES';
break;
case "psgis": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/psgis/';
$alt = 'PSGIS';
break;
case "pcsi": $url = 'http://primeiraleitura.serpro.gov.br/imagens/pcsi-1/';
$alt = 'PCSI';
break;
case "painel": $url = 'http://primeiraleitura.serpro.gov.br/imagens/painel/';
$alt = 'Painel de Indicadores';
break;
case "indicadores": $url = 'http://primeiraleitura.serpro.gov.br/imagens/indicadores/';
$alt = 'Indicadores';
break;
case "esp-gestao-publica": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/curso-de-especializacao-em-gestao-publica/';
$alt = 'Curso de Especialização de Gestão Pública';
break;
case "agil": $url = 'http://primeiraleitura.serpro.gov.br/publicidade/agil/';
$alt = 'Metodologia Ágil';
break;
case "consignatarias": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/informe_consignataria/';
$alt = 'Gestão das Consignatárias';
break;
case "espaco-saber": $url = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/curso-de-especializacao-em-gestao-publica/';
$alt = 'Espaço Saber Serpro';
break;
case "semana-meio-ambiente": $url = 'http://primeiraleitura.serpro.gov.br/imagens/topo-semana-meio-amabiente/';
$alt = 'Semana Meio Ambiente';
break;
case "servico-inteligencia": $url = 'http://primeiraleitura.serpro.gov.br/imagens/servico-de-inteligencia/';
$alt = 'Serviço de Inteligência';
break;
case "forum-de-governanca": $url = 'http://primeiraleitura.serpro.gov.br/imagens/top-convite-forum-de-governanca/';
$alt = 'Fórum de Governança';
break;
case "hackathon-serpro": $url = 'http://primeiraleitura.serpro.gov.br/imagens/hackton/';
$alt = 'Hackathon Serpro';
break;
}
$rodape = $_POST['image-rodape'];

switch ($rodape)
{

case "normal": $assinatura = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/rodape/';
$rodalt = 'Serpro - Ministério da Fazenda - Brasil';
break;
case "eleicao": $assinatura = 'http://primeiraleitura.serpro.gov.br/img-newsletter/convites/rodape-periodo-eleitoral/';
$rodalt = 'Serpro - Ministério da Fazenda';
break;
case "assinatura-dp": $assinatura = 'http://primeiraleitura.serpro.gov.br/img-newsletter/assinatura-gloria/';
$rodalt = 'Assinatura DP';


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
		<table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="470" style="font:75%/1.3 helvetica,verdana,arial,sans-serif;color:#1f1f1f;" >
		<tr><td>
			<table border="0" cellpadding="0" cellspacing="0" width="470px" align="center" valign="top">
				<tr><td valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/convites/url-serpro/" alt="http://www.serpro.gov.br" /></td></tr>
				<tr><td valign="top"><h1 style="margin:0;padding:0;"><img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="470" /></h1></td></tr>
				<tr><td valign="top"style="padding-bottom:10px;font-size:14px;"><h2 style="padding:10px 0;text-align:center;"><?php echo $_POST['titulo']; ?></h2>
						<?php echo (stripslashes($_POST['content'])); ?>
				</td></tr>
				<tr><td valign="top"><img src="<?php echo $assinatura; ?>" alt="<?php echo $rodalt; ?> /></td></tr>
			</table>
		</td></tr>
		</table>
		</div>
		<div id="code">
			<p>Código HTML</p>
			<p>Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea readonly>
<div style="margin:0 auto;width:100%;"><table align="center" valign="top" border="0" cellpadding="0" cellspacing="0" width="470" style="font:75%/1.3 helvetica,verdana,arial,sans-serif;color:#1f1f1f;" ><tr><td><table border="0" cellpadding="0" cellspacing="0" width="470px" align="center" valign="top"><tr><td valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/convites/url-serpro/" alt="http://www.serpro.gov.br" /></td></tr><tr><td valign="top"><h1 style="margin:0;padding:0;"><img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="470"/></h1></td></tr><tr><td valign="top" style="padding-bottom:10px;font-size:14px;"><h2 style="padding:10px 0;text-align:center;"><?php echo $_POST['titulo']; ?></h2><?php echo (stripslashes($_POST['content'])); ?></td></tr><tr><td valign="top"><img src="<?php echo $assinatura; ?>" alt="<?php echo $rodalt; ?>" /></td></tr></table></td></tr></table></div>
</textarea>
		</div>
	</div>
	</body>
</html>
