<?php 
class Forms{
	public $fieldset;
	public $assunto;
	public $num;	
//$assunto = $_POST['not1'];
	public function setForm($num, $assunto){
		$this->num = $num;
		$this->assunto = $assunto;
		$this->fieldset = <<<EOD
	<fieldset>
		<legend>$assunto</legend>
		<label for="veiculo$num">Veículo</label>
		<input class="veiculo" type="text" name="veiculo$num" />
		<br />
		<label for="data$num">Data da Notícia</label>
		<input class="datepicker" type="text" name="data$num" maxlength="10" />
		<br />
		<label for="titulo$num">Título</label>
		<input type="text" name="titulo$num" size="50" />
		<br />
		<label for="url$num">Link para Notícia</label>
		<input type="text" name="url$num" />
		<br />
		<label for="conteudo$num">Corpo da Notícia</label>
		<textarea name="conteudo$num" cols="50" rows="15" characters="10"></textarea>
	</fieldset>
EOD;
	}
		public function getForm(){
		$numero = $this->num;

// if(isset($check)){ }


if($numero == 1) {
	if(isset($_POST['um'])){
		$_SESSION['form1'] = true;
		$_SESSION['not1'] = $_POST['not1'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form1'] = false;
		echo "Formulário 1 não foi selecionado! <br />";
	}
}

if($numero == 2) {
	if(isset($_POST['dois'])){
		$_SESSION['form2'] = true;
		$_SESSION['not2'] = $_POST['not2'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form2'] = false;
		echo "Formulário 2 não foi selecionado! <br />";
	}
}

if($numero == 3) {
	if(isset($_POST['tres'])){
		$_SESSION['form3'] = true;
		$_SESSION['not3'] = $_POST['not3'];
		return $this->fieldset;
	}
	elseif(!isset($_POST['tres'])){
		$_SESSION['form3'] = false;
		echo "Formulário 3 não foi selecionado! <br />";
	}
}
if($numero == 4) {
	if(isset($_POST['quatro'])){
		$_SESSION['form4'] = true;
		$_SESSION['not4'] = $_POST['not4'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form4'] = false;
		echo "Formulário 4 não foi selecionado! <br />";
	}
}
if($numero == 5) {
	if(isset($_POST['cinco'])){
		$_SESSION['form5'] = true;
		$_SESSION['not5'] = $_POST['not5'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form5'] = false;
		echo "Formulário 5 não foi selecionado! <br />";
	}
}

if($numero == 6) {
	if(isset($_POST['seis'])){
		$_SESSION['form6'] = true;
		$_SESSION['not6'] = $_POST['not6'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form6'] = false;
		echo "Formulário 6 não foi selecionado! <br />";
	}
}

if($numero == 7) {
	if(isset($_POST['sete'])){
		$_SESSION['form7'] = true;
		$_SESSION['not7'] = $_POST['not7'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form7'] = false;
		echo "Formulário 7 não foi selecionado! <br />";
	}
}

if($numero == 8) {
	if(isset($_POST['oito'])){
		$_SESSION['form8'] = true;
		$_SESSION['not8'] = $_POST['not8'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form8'] = false;
		echo "Formulário 8 não foi selecionado! <br />";
	}
}

if($numero == 9) {
	if(isset($_POST['nove'])){
		$_SESSION['form9'] = true;
		$_SESSION['not9'] = $_POST['not9'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form9'] = false;
		echo "Formulário 9 não foi selecionado! <br />";
	}
}

if($numero == 10) {
	if(isset($_POST['dez'])){
		$_SESSION['form10'] = true;
		$_SESSION['not10'] = $_POST['not10'];
		return $this->fieldset;
	}
	else{
		$_SESSION['form10'] = false;
		echo "Formulário 10 não foi selecionado! <br />";
	}
}

		}	
}
?>
