<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

	<head>
		<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
		<link rel="shortcut icon" href="/image/favicon.ico" />
		<title>Gerador de código para Convites CECOM</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" lang="pt-br" content="" />
		<meta name="keywords" lang="pt-br" content="" />

	<!-- OF COURSE YOU NEED TO ADAPT NEXT LINE TO YOUR tiny_mce.js PATH -->
	<script type="text/javascript" src="../scripts/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

	<script type="text/javascript">
tinyMCE.init({
// General options
mode : "textareas",
theme : "advanced",
plugins : "table,inlinepopups,preview,visualchars,paste",

// Theme options
theme_advanced_buttons1 : "styleselect,forecolor,backcolor",
theme_advanced_buttons2 : ",bullist,numlist,|,blockquote,|,link,unlink,anchor,|,image,table,charmap",
theme_advanced_buttons3 : "newdocument,undo,redo,cleanup,removeformat,|,pastetext,pasteword,|,preview,code",
theme_advanced_buttons4 : "",
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
	body	{font:80%/1.2 helvetica,verdana,arial,sans-serif;color:#454545;}
	fieldset {background:#f9f9f9;margin:10px 0;width:500px;border:1px solid #dedede;}
	legend {font-size:20px;font-weight:bold;font-family:"arial black", impact, arial, sans-serif;}
	label	{margin:15px 0 3px 0;font-size:1.1em;display:block;font-weight:bold;color:#12355F;}

	h1 {margin:0;padding:0;font-family:"Trebuchet MS", verdana,arial,sans-serif;color:#00569C;font-size:1.7em;}
	p	{margin:5px;}
	#wrapper	{margin:0 auto;width;600px;}

	</style>
</head>

	</head>
	<body>
	<div id="wrapper">
		<h1>Gerador de Código HTML para Convites CECOM</h1>
		<p>Preencha os dados abaixo para criar o Convite</p>
		<form enctype="multipart/form-data" action="convite.php" method="post">

		<fieldset>
			<label for="image-header">Imagem Cabeçalho (Máscara)</label>
			<select name="image-header">
				<option value="serpro" selected="selected">Serpro</option>
				<option value="responsabilidade">Responsabilidade</option>
				<option value="tv">TV Serpro</option>
				<option value="cisl">CISL</option>
				<option value="expresso">Expresso</option>
				<option value="consignatarias">Gestão das Consignatárias</option>
				<option value="uniserpro">Uniserpro</option>
				<option value="apa">Apa</option>
				<option value="inclusao">Inclusão Digital</option>
				<option value="consegi">Consegi</option>
				<option value="conserpro">ConSerpro</option>
				<option value="diario-conserpro">Diário ConSerpro</option>
				<option value="aniversario-serpro">Aniversário Serpro</option>
				<option value="semitecnologicos">Seminários Tecnológicos</option>
				<option value="pas">PAS</option>
				<option value="planejamento-2016">Planejamento Estratégico 2016</option>
				<option value="planejamento-2017">Planejamento Estratégico 2017</option>
				<option value="demoiselle">Demoiselle</option>
				<option value="gdes">GDES</option>
				<option value="fisl">FISL</option>
				<option value="cipa">CIPA</option>
				<option value="qvt">QVT Serpro</option>
				<option value="psgis">PSGIS</option>
				<option value="pcsi">Política Corporativa de Segurança</option>
				<option value="painel">Painel de Indicadores Corporativos</option>
				<option value="indicadores">Indicadores Corporativos</option>
				<option value="agil">Metodologia Ágil</option>
				<option value="seminario-seguranca">Seminário de Segurança</option>
				<option value="semana-meio-ambiente">Semana Meio Ambiente</option>
				<option value="servico-inteligencia">Serviço de Inteligência</option>
				<option value="forum-de-governanca">Fórum de Governança</option>
				<option value="hackathon-serpro">Hackathon Serpro</option>
			</select>
			<label for="titulo">Título</label>
			<input type="text" name="titulo" size="50" />
			<br />
			<label for="content">Corpo do Convite</label>
			<textarea name="content" cols="50" rows="15"></textarea>
			<label for="image-rodape">Imagem Rodapé</label>
			<select name="image-rodape">
				<option value="normal" selected="selected">Serpro + Governo</option>
				<option value="eleicao">Período Eleitoral</option>
				<option value="assinatura-dp">Assinatura DP</option>
			</select>
			<br /><br />
			<input type="submit" value="Gerar Formulário" />
			<input type="reset" value="Limpar" />
		</fieldset>
			</form>
		</div>
	</body>
</html>
