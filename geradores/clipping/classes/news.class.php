<?php 
class News{
	public $news_block;
	public $url;
	public $veiculo;
	public $assunto;
	public $data;
	public $titulo;
	public $conteudo;
	public $check;

	public function setForm($check, $url, $veiculo, $assunto, $data, $titulo, $conteudo){
	$this->check = $check;
	$titulo = stripslashes($titulo);
	$conteudo = stripslashes($conteudo);
	$url = trim($url);
	$this->news_block = <<<EOD
	<!-- BEGIN NEW --><tr><td width="85"></td><td width="42" valign="top"><img src="http://primeiraleitura.serpro.gov.br/img-newsletter/clipping/icone-news/" width="32px" height="32px" alt="" /></td><td width="594" style="height:50px;"><div style="padding-bottom:8px;"><a href="$url" style="text-decoration:none;display:block;"target="_blank" title="Clique para ler a notícia completa"><span style="font-size:13px;line-height:140%; font-family:georgia,serif;color:#1a1a1a;">$veiculo</span><br /><span style="font-style:italic; font-size:11px;line-height:140%;font-family:georgia,serif;color:#1a1a1a;">Assunto: $assunto - $data</span></div><span style="font-weight:bold;font-size:15px;line-height:140%; font-family:arial,sans-serif;color:#294671;">$titulo</span><br /><span style="font-size:12px;line-height:120%;font-family:arial,sans-serif;color:#586d80;">$conteudo</span></a></div></td><!-- END NEW --><tr><td colspan="4" height="40"></td></tr>
EOD;
	}

		public function getForm(){
			$check = $this->check;
			if ($check == "true"){
			return $this->news_block;
			}
			else{}
		}	
}
?>
