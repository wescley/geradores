<?php
session_start();

if (isset($_POST['titulo'])) {
$titulo = strip_tags($_POST['titulo']);
}

if (isset($_POST['fonte'])) {
$fonte = strip_tags($_POST['fonte']);
}

if (isset($_POST['content'])) {
$content = htmlspecialchars($_POST['content'], ENT_QUOTES);
$content_preview = stripslashes($_POST['content']);

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
	<head>
	<title>Em Tempo Output</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<style type="text/css">
#wrapper	{margin:0 auto;width:1000px;}
textarea	{border:1px solid #dedede;width:470px;min-height:500px;padding:20px;background:#fafafa;}
#code		{float:left;width:463px;padding-left:20px;}
#preview	{float:left;width:483px;}
.code		{font-size:11px;}
	</style>
	</head>
	<body>
<div id="wrapper">
<div id="preview">
<p class="code">Preview</p>
<div style="width:100%;height:100%;background-color:#e9e9e9;padding:20px;font-family:'Open Sans', sans-serif;">
	<div style="margin:0 auto;width:444px;background-color:#ffffff;border:1px solid #b3b3b3;border-radius: 0 0 15px 15px;">
		<div style="height:43px;border-bottom:1px solid #d4aa00;background-color:#ffdd55;background: linear-gradient(#ffdd55, #ffcc00);color:#4d4d4d;font-weight:400;font-size:9px;color:#4d4d4d;text-align:left;padding:13px 25px;">

<?php echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>'; ?> 

<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93.281715" height="43.407291" id="svg2" version="1.1" viewBox="0 0 93.281715 43.407291">
<desc>
<img src="http://andremenezes.info/cecom/em-tempo-logo.png" alt="Em Tempo" />
</desc>
<g id="layer1" transform="translate(-441.45437,-748.91247)">
<g style="display:inline" transform="translate(-146.40733,-16.705807)" id="g3966">
<g transform="matrix(0.58820739,0,0,0.58820739,19.912281,372.0806)" id="g3968" style="display:inline">
<g id="g3966-4" transform="matrix(1.6875584,0,0,1.6875584,-25.907096,-622.70799)" style="display:inline">
<g style="display:inline" id="g3968-3" transform="matrix(0.5925721,0,0,0.5925721,15.351805,368.99936)">
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';fill:#1a1a1a;fill-opacity:1;stroke:none" d="m 1010.1433,741.88794 -9.6181,0 0,-25.63271 -5.69093,0 0,-8.70101 21.00003,0 0,8.70101 -5.691,0 0,25.63271 m 7.7369,0 0,-34.33372 17.0493,0 0,8.32475 -7.4076,0 0,4.37403 6.6786,0 0,8.04255 -6.6786,0 0,4.72677 7.4076,0 0,8.86562 -17.0493,0 m 19.2128,0 2.4457,-34.33372 11.4288,0 2.9866,18.10751 2.9866,-18.10751 11.4054,0 2.4456,34.33372 -8.748,0 -0.729,-24.3158 -3.8096,24.3158 -7.1255,0 -3.8096,-24.3158 -0.7525,24.3158 -8.7245,0 m 46.1153,-27.02016 0,7.61926 c 1.4737,-0.0313 2.5554,-0.34489 3.2453,-0.94065 0.6898,-0.59572 1.0347,-1.53637 1.0347,-2.82195 0,-1.26985 -0.3293,-2.22618 -0.9877,-2.86898 -0.6585,-0.65843 -1.6305,-0.98766 -2.916,-0.98768 l -0.3763,0 m -9.5946,27.02016 0,-34.33372 10.206,0 c 4.3584,4e-5 7.5801,0.97204 9.6652,2.91602 2.1008,1.92836 3.1512,4.90708 3.1512,8.93617 0,3.41771 -1.0269,6.11424 -3.0806,8.08959 -2.0381,1.9597 -4.8366,2.93954 -8.3953,2.93953 l -1.9519,0 0,11.45241 -9.5946,0 m 33.981,-17.3785 c 0,3.57448 0.2351,6.02017 0.7055,7.33706 0.4703,1.30124 1.2933,1.95186 2.4692,1.95185 1.1601,10e-6 1.9675,-0.64277 2.4221,-1.92833 0.4703,-1.30122 0.7055,-3.75475 0.7055,-7.36058 0,-3.60581 -0.2352,-6.05933 -0.7055,-7.36059 -0.4546,-1.3012 -1.262,-1.95182 -2.4221,-1.95185 -1.1759,3e-5 -1.9989,0.65848 -2.4692,1.97537 -0.4704,1.31693 -0.7055,3.76262 -0.7055,7.33707 m -9.6887,0.23516 c 0,-5.67523 1.1209,-10.07277 3.3628,-13.19261 2.2576,-3.11979 5.4244,-4.6797 9.5006,-4.67974 4.0604,4e-5 7.2037,1.55995 9.43,4.67974 2.2418,3.10417 3.3628,7.5017 3.3628,13.19261 0,5.67526 -1.1131,10.06496 -3.3393,13.16909 -2.2262,3.10415 -5.3774,4.65622 -9.4535,4.65622 -4.0919,0 -7.2587,-1.55207 -9.5006,-4.65622 -2.2419,-3.11981 -3.3628,-7.5095 -3.3628,-13.16909" id="path3970" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';fill:#1a1a1a;fill-opacity:1;stroke:none" d="m 994.56243,703.67102 0,-34.33371 17.04927,0 0,8.32475 -7.4076,0 0,4.37402 6.6786,0 0,8.04255 -6.6786,0 0,4.72677 7.4076,0 0,8.86562 -17.04927,0 m 19.21277,0 2.4457,-34.33371 11.4289,0 2.9865,18.1075 2.9866,-18.1075 11.4054,0 2.4457,34.33371 -8.7481,0 -0.729,-24.3158 -3.8096,24.3158 -7.1254,0 -3.8097,-24.3158 -0.7525,24.3158 -8.7245,0" id="path3972" />
<path style="font-style:normal;font-weight:normal;font-size:94.77750397px;font-family:'Bitstream Vera Sans';fill:#d4aa00;fill-opacity:1;stroke:none" d="m 967.5322,669.33667 18.23356,0 -1.15695,45.49135 -15.91966,0 -1.15695,-45.49135 m -1.38834,62.0589 c -10e-6,-2.93093 1.01811,-5.41452 3.05435,-7.45077 2.03623,-2.03621 4.51982,-3.05433 7.45077,-3.05435 2.93093,2e-5 5.41452,1.01814 7.45077,3.05435 2.03621,2.03625 3.05433,4.51984 3.05436,7.45077 -3e-5,2.96181 -1.01815,5.46082 -3.05436,7.49705 -2.03625,2.03624 -4.51984,3.05435 -7.45077,3.05436 -2.93095,-1e-5 -5.41454,-1.01812 -7.45077,-3.05436 -2.03624,-2.03623 -3.05436,-4.53524 -3.05435,-7.49705" id="path3974" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1110.7762,706.85638 c -4.0761,5e-5 -7.2529,1.58165 -9.5104,4.7014 -2.242,3.11985 -3.3736,8.35479 -3.3736,14.02999 l 9.69,0.071 c 0,-3.57446 0.2472,-7.18538 0.7177,-8.50234 0.4702,-1.3169 1.3005,-1.97386 2.4763,-1.97387 1.1601,3e-5 1.95,0.67262 2.4046,1.97387 0.4702,1.30125 0.7176,3.7513 0.7178,7.35715 0,0.27386 0,0.85765 0,1.11822 l 9.6539,0.0302 c 0.01,-0.30236 10e-5,-0.62305 0,-0.9331 0,-5.6909 -1.0958,-10.06689 -3.3376,-13.1711 -2.2262,-3.11979 -5.3781,-4.70132 -9.4387,-4.7014 z" id="path3976" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';fill:#666;fill-opacity:1;stroke:none" d="m 1107.5946,724.50941 c 0,0.5084 0,0.99397 0.014,1.45671" id="path3978" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1073.5957,707.53826 0,18.01606 21.4254,0.14355 c 1.0766,-1.71845 1.615,-3.80589 1.615,-6.2805 0,-4.02909 -1.0572,-7.00788 -3.1582,-8.93624 -2.0851,-1.94399 -5.2958,-2.94277 -9.6541,-2.94287 l -10.2281,0 z m 9.6181,7.32127 0.3589,0 c 1.2855,2e-5 2.2844,0.34647 2.9428,1.00488 0.6586,0.6428 0.969,1.60126 0.9691,2.87108 0,1.28558 -0.3511,2.20355 -1.0408,2.79931 -0.6899,0.59576 -1.7563,0.93766 -3.23,0.96899 l 0,-7.64426 z" id="path3980" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1056.9434,707.53826 -2.9788,18.01606 6.1011,0 1.2561,-7.96726 0.2153,7.96726 8.0749,0 -1.2561,-18.01606 -11.4125,0 z m -2.9788,18.01606 -0.036,0 0.036,0.10766 0,-0.10766 z" id="path3982" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1039.5375,707.53826 -1.292,18.01606 8.0749,0 0.2512,-7.96726 1.2561,7.96726 6.101,0 -2.9788,-18.01606 -11.4124,0 z" id="path3984" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1017.8802,725.56412 0,-18.00995 17.0492,0 0,8.32474 -7.4075,0 0,4.37406 6.6785,0 0,5.31383" id="path3986" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1000.5252,725.55332 0,-9.29813 -5.69095,0 0,-8.70102 21.00005,0 0,8.70102 -5.6911,0 0,9.29813" id="path3988" />
<path id="path3990" d="m 1033.6102,669.31757 -2.9788,18.01606 6.1011,0 1.2561,-7.96726 0.2153,7.96726 8.0749,0 -1.2561,-18.01606 -11.4125,0 z m -2.9788,18.01606 -0.036,0 0.036,0.10766 0,-0.10766 z" style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" />
<path id="path3992" d="m 1016.2043,669.31757 -1.292,18.01606 8.0749,0 0.2512,-7.96726 1.2561,7.96726 6.101,0 -2.9788,-18.01606 -11.4124,0 z" style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" />
<path id="path3994" d="m 994.54697,687.34343 0,-18.00995 17.04923,0 0,8.32474 -7.4075,0 0,4.37406 6.6785,0 0,5.31383" style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" />
</g>
</g>
</g>
</g>
</g>
</svg><div style="font-size:10px;font-weight:400;color:#4d4d4d;float:right;"><?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%e de %B de %Y', strtotime('today')); ?></div></div>
		<div style="min-height:220px;margin:0 20px;">
<!--<div style="font-size:9px;font-weight:400;color:#4d4d4d;text-align:left;padding-top:10px;clear:right;">20 de outubro de 2015</div>-->
			<p style="font-size:16px;line-height:1.2;padding-top:22px;font-weight:600;"><?php echo $titulo;?></p>
			<span style="font-size:10px;text-transform:capitalize;font-weight:600;color:#aa8800;">fonte: <?php echo $fonte;?></span>
			<p style="font-size:13px;line-height:1.4;font-weight:300;padding-top:16px;"><?php echo strip_tags($content_preview);?></p>	
		</div>
<div style="text-align:center;margin:20px;padding-top:15px;border-top:1px solid #cccccc;">
<?php echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>'; ?> 
<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106.17291" height="29.968161" id="svg2" version="1.1" viewBox="0 0 106.17291 29.96816">
<desc>
<img src="http://andremenezes.info/cecom/logo-serpro.png" style="text-align:center" alt="Serpro" />
</desc>
<g id="layer1" transform="translate(-514.37385,-846.90188)">
<g style="display:inline" transform="matrix(0.06115951,0,0,0.06115951,538.34838,846.90188)" id="g4002">
<path style="fill:#00569c" d="m 82,428 26,-64 c 11,8 22,14 31,18 9,4 17,6 25,6 6,0 10,-1 13,-3 4,-3 5,-5 5,-9 0,-6 -8,-11 -24,-14 -5,-2 -9,-2 -12,-3 -17,-4 -30,-12 -39,-22 -9,-11 -13,-24 -13,-39 0,-25 9,-44 26,-60 18,-15 40,-23 69,-23 13,0 25,2 38,6 13,3 25,8 38,15 l -25,59 c -8,-6 -15,-10 -23,-13 -8,-3 -16,-5 -23,-5 -6,0 -10,1 -13,3 -4,2 -5,5 -5,8 0,7 11,12 34,17 3,1 6,2 8,2 16,3 28,11 37,21 9,11 13,24 13,40 0,25 -9,45 -27,61 -18,16 -41,24 -70,24 -15,0 -30,-2 -45,-6 -15,-5 -30,-11 -44,-19 z m 204,19 0,-226 151,0 0,61 -72,0 0,22 65,0 0,58 -65,0 0,24 74,0 0,61 -153,0 z m 253,-168 0,44 12,0 c 8,0 14,-2 18,-6 4,-3 6,-9 6,-16 0,-7 -2,-13 -6,-16 -4,-4 -10,-6 -18,-6 l -12,0 z m -80,168 0,-226 102,0 c 30,0 53,6 68,19 16,13 24,32 24,57 0,16 -4,29 -12,40 -8,10 -19,16 -32,18 l 60,92 -91,0 -39,-75 0,75 -80,0 z m 223,0 0,-226 97,0 c 34,0 59,6 75,19 16,14 24,34 24,63 0,27 -7,46 -21,59 -15,12 -37,18 -68,18 l -26,0 0,67 -81,0 z m 82,-164 0,38 12,0 c 8,0 14,-1 18,-5 4,-3 6,-8 6,-14 0,-6 -2,-10 -6,-14 -4,-3 -10,-5 -18,-5 l -12,0 z m 212,-4 0,44 13,0 c 7,0 13,-2 17,-6 5,-3 7,-9 7,-16 0,-7 -2,-13 -7,-16 -4,-4 -10,-6 -17,-6 l -13,0 z m -80,168 0,-226 103,0 c 29,0 52,6 68,19 15,13 23,32 23,57 0,16 -4,29 -12,40 -8,10 -18,16 -32,18 l 61,92 -91,0 -40,-75 0,75 -80,0 z m 327,-70 c 11,0 20,-4 27,-12 7,-8 11,-18 11,-31 0,-13 -4,-23 -11,-31 -7,-8 -16,-12 -27,-12 -12,0 -21,4 -28,12 -7,8 -10,18 -10,31 0,13 3,23 10,31 7,8 16,12 28,12 z m 121,-43 c 0,17 -3,32 -9,46 -6,15 -14,28 -26,39 -11,11 -24,19 -39,25 -15,6 -30,9 -47,9 -17,0 -33,-3 -48,-9 -14,-6 -27,-14 -39,-26 -11,-10 -20,-23 -25,-37 -6,-15 -9,-30 -9,-47 0,-17 3,-32 9,-47 5,-14 14,-26 25,-37 11,-11 24,-20 39,-26 15,-6 31,-9 48,-9 17,0 33,3 47,9 15,6 28,15 40,26 11,11 19,23 25,38 6,14 9,29 9,46 z" class="fil1" id="path4004" />
<g id="g4006">
<path style="fill:#ffffff" d="M -214,0 -392,490 -10,490 168,0 -214,0 Z" class="fil2" id="path4008" />
<path style="fill:#00569c" d="M -381,482 -16,482 157,7 -209,7 -381,482 Z" class="fil1" id="path4010" />
<path style="fill:#ffffff" d="m -54,309 c 0,-29 -13,-53 -29,-74 L 35,353 c -28,58 -87,100 -159,100 -65,0 -118,-33 -149,-82 19,33 59,49 101,53 63,3 118,-49 118,-115 z m -139,-69 c 0,29 14,55 30,74 L -281,196 c 29,-58 86,-99 158,-99 66,0 119,32 150,81 -19,-32 -59,-49 -101,-53 -63,-1 -119,49 -119,115 z" class="fil2" id="path4012" />
</g>
</g>
</g>
</svg></div>
	</div>
</div>

</div>
<div id="code">
<p class="code">Código HTML</p>
<p class="code">Copie e cole o código abaixo na mensagem dentro do Expresso Mail. Não esqueça de clicar antes em <strong>Ver código html</strong>.</p>
<textarea readonly style="border:1px solid #dedede;width:483px;min-height:500px;padding:20px;background:#fafafa;">
<div style="width:100%;height:100%;background-color:#e9e9e9;padding:20px;font-family:'Open Sans', sans-serif;">
	<div style="margin:0 auto;width:444px;background-color:#ffffff;border:1px solid #b3b3b3;border-radius: 0 0 15px 15px;">
		<div style="height:43px;border-bottom:1px solid #d4aa00;background-color:#ffdd55;background: linear-gradient(#ffdd55, #ffcc00);color:#4d4d4d;font-weight:400;font-size:9px;color:#4d4d4d;text-align:left;padding:13px 25px;">

<?php echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>'; ?> 
<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93.281715" height="43.407291" id="svg2" version="1.1" viewBox="0 0 93.281715 43.407291">
<desc>
<img src="http://andremenezes.info/cecom/em-tempo-logo.png" alt="Em Tempo" />
</desc>
<g id="layer1" transform="translate(-441.45437,-748.91247)">
<g style="display:inline" transform="translate(-146.40733,-16.705807)" id="g3966">
<g transform="matrix(0.58820739,0,0,0.58820739,19.912281,372.0806)" id="g3968" style="display:inline">
<g id="g3966-4" transform="matrix(1.6875584,0,0,1.6875584,-25.907096,-622.70799)" style="display:inline">
<g style="display:inline" id="g3968-3" transform="matrix(0.5925721,0,0,0.5925721,15.351805,368.99936)">
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';fill:#1a1a1a;fill-opacity:1;stroke:none" d="m 1010.1433,741.88794 -9.6181,0 0,-25.63271 -5.69093,0 0,-8.70101 21.00003,0 0,8.70101 -5.691,0 0,25.63271 m 7.7369,0 0,-34.33372 17.0493,0 0,8.32475 -7.4076,0 0,4.37403 6.6786,0 0,8.04255 -6.6786,0 0,4.72677 7.4076,0 0,8.86562 -17.0493,0 m 19.2128,0 2.4457,-34.33372 11.4288,0 2.9866,18.10751 2.9866,-18.10751 11.4054,0 2.4456,34.33372 -8.748,0 -0.729,-24.3158 -3.8096,24.3158 -7.1255,0 -3.8096,-24.3158 -0.7525,24.3158 -8.7245,0 m 46.1153,-27.02016 0,7.61926 c 1.4737,-0.0313 2.5554,-0.34489 3.2453,-0.94065 0.6898,-0.59572 1.0347,-1.53637 1.0347,-2.82195 0,-1.26985 -0.3293,-2.22618 -0.9877,-2.86898 -0.6585,-0.65843 -1.6305,-0.98766 -2.916,-0.98768 l -0.3763,0 m -9.5946,27.02016 0,-34.33372 10.206,0 c 4.3584,4e-5 7.5801,0.97204 9.6652,2.91602 2.1008,1.92836 3.1512,4.90708 3.1512,8.93617 0,3.41771 -1.0269,6.11424 -3.0806,8.08959 -2.0381,1.9597 -4.8366,2.93954 -8.3953,2.93953 l -1.9519,0 0,11.45241 -9.5946,0 m 33.981,-17.3785 c 0,3.57448 0.2351,6.02017 0.7055,7.33706 0.4703,1.30124 1.2933,1.95186 2.4692,1.95185 1.1601,10e-6 1.9675,-0.64277 2.4221,-1.92833 0.4703,-1.30122 0.7055,-3.75475 0.7055,-7.36058 0,-3.60581 -0.2352,-6.05933 -0.7055,-7.36059 -0.4546,-1.3012 -1.262,-1.95182 -2.4221,-1.95185 -1.1759,3e-5 -1.9989,0.65848 -2.4692,1.97537 -0.4704,1.31693 -0.7055,3.76262 -0.7055,7.33707 m -9.6887,0.23516 c 0,-5.67523 1.1209,-10.07277 3.3628,-13.19261 2.2576,-3.11979 5.4244,-4.6797 9.5006,-4.67974 4.0604,4e-5 7.2037,1.55995 9.43,4.67974 2.2418,3.10417 3.3628,7.5017 3.3628,13.19261 0,5.67526 -1.1131,10.06496 -3.3393,13.16909 -2.2262,3.10415 -5.3774,4.65622 -9.4535,4.65622 -4.0919,0 -7.2587,-1.55207 -9.5006,-4.65622 -2.2419,-3.11981 -3.3628,-7.5095 -3.3628,-13.16909" id="path3970" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';fill:#1a1a1a;fill-opacity:1;stroke:none" d="m 994.56243,703.67102 0,-34.33371 17.04927,0 0,8.32475 -7.4076,0 0,4.37402 6.6786,0 0,8.04255 -6.6786,0 0,4.72677 7.4076,0 0,8.86562 -17.04927,0 m 19.21277,0 2.4457,-34.33371 11.4289,0 2.9865,18.1075 2.9866,-18.1075 11.4054,0 2.4457,34.33371 -8.7481,0 -0.729,-24.3158 -3.8096,24.3158 -7.1254,0 -3.8097,-24.3158 -0.7525,24.3158 -8.7245,0" id="path3972" />
<path style="font-style:normal;font-weight:normal;font-size:94.77750397px;font-family:'Bitstream Vera Sans';fill:#d4aa00;fill-opacity:1;stroke:none" d="m 967.5322,669.33667 18.23356,0 -1.15695,45.49135 -15.91966,0 -1.15695,-45.49135 m -1.38834,62.0589 c -10e-6,-2.93093 1.01811,-5.41452 3.05435,-7.45077 2.03623,-2.03621 4.51982,-3.05433 7.45077,-3.05435 2.93093,2e-5 5.41452,1.01814 7.45077,3.05435 2.03621,2.03625 3.05433,4.51984 3.05436,7.45077 -3e-5,2.96181 -1.01815,5.46082 -3.05436,7.49705 -2.03625,2.03624 -4.51984,3.05435 -7.45077,3.05436 -2.93095,-1e-5 -5.41454,-1.01812 -7.45077,-3.05436 -2.03624,-2.03623 -3.05436,-4.53524 -3.05435,-7.49705" id="path3974" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1110.7762,706.85638 c -4.0761,5e-5 -7.2529,1.58165 -9.5104,4.7014 -2.242,3.11985 -3.3736,8.35479 -3.3736,14.02999 l 9.69,0.071 c 0,-3.57446 0.2472,-7.18538 0.7177,-8.50234 0.4702,-1.3169 1.3005,-1.97386 2.4763,-1.97387 1.1601,3e-5 1.95,0.67262 2.4046,1.97387 0.4702,1.30125 0.7176,3.7513 0.7178,7.35715 0,0.27386 0,0.85765 0,1.11822 l 9.6539,0.0302 c 0.01,-0.30236 10e-5,-0.62305 0,-0.9331 0,-5.6909 -1.0958,-10.06689 -3.3376,-13.1711 -2.2262,-3.11979 -5.3781,-4.70132 -9.4387,-4.7014 z" id="path3976" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';fill:#666;fill-opacity:1;stroke:none" d="m 1107.5946,724.50941 c 0,0.5084 0,0.99397 0.014,1.45671" id="path3978" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1073.5957,707.53826 0,18.01606 21.4254,0.14355 c 1.0766,-1.71845 1.615,-3.80589 1.615,-6.2805 0,-4.02909 -1.0572,-7.00788 -3.1582,-8.93624 -2.0851,-1.94399 -5.2958,-2.94277 -9.6541,-2.94287 l -10.2281,0 z m 9.6181,7.32127 0.3589,0 c 1.2855,2e-5 2.2844,0.34647 2.9428,1.00488 0.6586,0.6428 0.969,1.60126 0.9691,2.87108 0,1.28558 -0.3511,2.20355 -1.0408,2.79931 -0.6899,0.59576 -1.7563,0.93766 -3.23,0.96899 l 0,-7.64426 z" id="path3980" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1056.9434,707.53826 -2.9788,18.01606 6.1011,0 1.2561,-7.96726 0.2153,7.96726 8.0749,0 -1.2561,-18.01606 -11.4125,0 z m -2.9788,18.01606 -0.036,0 0.036,0.10766 0,-0.10766 z" id="path3982" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1039.5375,707.53826 -1.292,18.01606 8.0749,0 0.2512,-7.96726 1.2561,7.96726 6.101,0 -2.9788,-18.01606 -11.4124,0 z" id="path3984" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1017.8802,725.56412 0,-18.00995 17.0492,0 0,8.32474 -7.4075,0 0,4.37406 6.6785,0 0,5.31383" id="path3986" />
<path style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" d="m 1000.5252,725.55332 0,-9.29813 -5.69095,0 0,-8.70102 21.00005,0 0,8.70102 -5.6911,0 0,9.29813" id="path3988" />
<path id="path3990" d="m 1033.6102,669.31757 -2.9788,18.01606 6.1011,0 1.2561,-7.96726 0.2153,7.96726 8.0749,0 -1.2561,-18.01606 -11.4125,0 z m -2.9788,18.01606 -0.036,0 0.036,0.10766 0,-0.10766 z" style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" />
<path id="path3992" d="m 1016.2043,669.31757 -1.292,18.01606 8.0749,0 0.2512,-7.96726 1.2561,7.96726 6.101,0 -2.9788,-18.01606 -11.4124,0 z" style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" />
<path id="path3994" d="m 994.54697,687.34343 0,-18.00995 17.04923,0 0,8.32474 -7.4075,0 0,4.37406 6.6785,0 0,5.31383" style="font-style:normal;font-weight:normal;font-size:48.16126633px;font-family:'Bitstream Vera Sans';opacity:.40154437;fill:#808080;fill-opacity:1;stroke:none" />
</g>
</g>
</g>
</g>
</g>
</svg><div style="font-size:10px;font-weight:400;color:#4d4d4d;float:right;"><?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo strftime('%e de %B de %Y', strtotime('today')); ?></div></div>
		<div style="min-height:220px;margin:0 20px;">
<!--<div style="font-size:9px;font-weight:400;color:#4d4d4d;text-align:left;padding-top:10px;clear:right;">20 de outubro de 2015</div>-->
			<p style="font-size:16px;line-height:1.2;padding-top:22px;font-weight:600;"><?php echo $titulo;?></p>
			<span style="font-size:10px;text-transform:capitalize;font-weight:600;color:#aa8800;">fonte: <?php echo $fonte;?></span>
			<p style="font-size:13px;line-height:1.4;font-weight:300;padding-top:16px;"><?php echo strip_tags($content_preview);?></p>	
		</div>
<div style="text-align:center;margin:20px;padding-top:15px;border-top:1px solid #cccccc;">
<?php echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>'; ?> 
<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106.17291" height="29.968161" id="svg2" version="1.1" viewBox="0 0 106.17291 29.96816">
<desc>
<img src="http://andremenezes.info/cecom/logo-serpro.png" style="text-align:center" alt="Serpro" />
</desc>
<g id="layer1" transform="translate(-514.37385,-846.90188)">
<g style="display:inline" transform="matrix(0.06115951,0,0,0.06115951,538.34838,846.90188)" id="g4002">
<path style="fill:#00569c" d="m 82,428 26,-64 c 11,8 22,14 31,18 9,4 17,6 25,6 6,0 10,-1 13,-3 4,-3 5,-5 5,-9 0,-6 -8,-11 -24,-14 -5,-2 -9,-2 -12,-3 -17,-4 -30,-12 -39,-22 -9,-11 -13,-24 -13,-39 0,-25 9,-44 26,-60 18,-15 40,-23 69,-23 13,0 25,2 38,6 13,3 25,8 38,15 l -25,59 c -8,-6 -15,-10 -23,-13 -8,-3 -16,-5 -23,-5 -6,0 -10,1 -13,3 -4,2 -5,5 -5,8 0,7 11,12 34,17 3,1 6,2 8,2 16,3 28,11 37,21 9,11 13,24 13,40 0,25 -9,45 -27,61 -18,16 -41,24 -70,24 -15,0 -30,-2 -45,-6 -15,-5 -30,-11 -44,-19 z m 204,19 0,-226 151,0 0,61 -72,0 0,22 65,0 0,58 -65,0 0,24 74,0 0,61 -153,0 z m 253,-168 0,44 12,0 c 8,0 14,-2 18,-6 4,-3 6,-9 6,-16 0,-7 -2,-13 -6,-16 -4,-4 -10,-6 -18,-6 l -12,0 z m -80,168 0,-226 102,0 c 30,0 53,6 68,19 16,13 24,32 24,57 0,16 -4,29 -12,40 -8,10 -19,16 -32,18 l 60,92 -91,0 -39,-75 0,75 -80,0 z m 223,0 0,-226 97,0 c 34,0 59,6 75,19 16,14 24,34 24,63 0,27 -7,46 -21,59 -15,12 -37,18 -68,18 l -26,0 0,67 -81,0 z m 82,-164 0,38 12,0 c 8,0 14,-1 18,-5 4,-3 6,-8 6,-14 0,-6 -2,-10 -6,-14 -4,-3 -10,-5 -18,-5 l -12,0 z m 212,-4 0,44 13,0 c 7,0 13,-2 17,-6 5,-3 7,-9 7,-16 0,-7 -2,-13 -7,-16 -4,-4 -10,-6 -17,-6 l -13,0 z m -80,168 0,-226 103,0 c 29,0 52,6 68,19 15,13 23,32 23,57 0,16 -4,29 -12,40 -8,10 -18,16 -32,18 l 61,92 -91,0 -40,-75 0,75 -80,0 z m 327,-70 c 11,0 20,-4 27,-12 7,-8 11,-18 11,-31 0,-13 -4,-23 -11,-31 -7,-8 -16,-12 -27,-12 -12,0 -21,4 -28,12 -7,8 -10,18 -10,31 0,13 3,23 10,31 7,8 16,12 28,12 z m 121,-43 c 0,17 -3,32 -9,46 -6,15 -14,28 -26,39 -11,11 -24,19 -39,25 -15,6 -30,9 -47,9 -17,0 -33,-3 -48,-9 -14,-6 -27,-14 -39,-26 -11,-10 -20,-23 -25,-37 -6,-15 -9,-30 -9,-47 0,-17 3,-32 9,-47 5,-14 14,-26 25,-37 11,-11 24,-20 39,-26 15,-6 31,-9 48,-9 17,0 33,3 47,9 15,6 28,15 40,26 11,11 19,23 25,38 6,14 9,29 9,46 z" class="fil1" id="path4004" />
<g id="g4006">
<path style="fill:#ffffff" d="M -214,0 -392,490 -10,490 168,0 -214,0 Z" class="fil2" id="path4008" />
<path style="fill:#00569c" d="M -381,482 -16,482 157,7 -209,7 -381,482 Z" class="fil1" id="path4010" />
<path style="fill:#ffffff" d="m -54,309 c 0,-29 -13,-53 -29,-74 L 35,353 c -28,58 -87,100 -159,100 -65,0 -118,-33 -149,-82 19,33 59,49 101,53 63,3 118,-49 118,-115 z m -139,-69 c 0,29 14,55 30,74 L -281,196 c 29,-58 86,-99 158,-99 66,0 119,32 150,81 -19,-32 -59,-49 -101,-53 -63,-1 -119,49 -119,115 z" class="fil2" id="path4012" />
</g>
</g>
</g>
</svg></div>
	</div>
</div>
</textarea>
</div>
</div>
	</body>
</html>
<?php session_destroy();?>
