<?php
#session_start();

include('config.php');

$cpf = addslashes($_POST['cpf']);
$nascimento = addslashes ($_POST['nascimento']);
$lote = addslashes ($_POST['lote']);


$sql = "SELECT count(*) FROM `paciente` WHERE cpf = :cpf and nascimento = :nascimento"; 
$result = $conn->prepare($sql);
$result->bindParam(':cpf',$cpf,PDO::PARAM_STR);
$result->bindParam(':nascimento',$nascimento,PDO::PARAM_STR);
$result->execute(); 
$number_of_rows = $result->fetchColumn(); 

if ($number_of_rows > 0) {
	#
	# Paciente encontrado
	#
	$sql = "SELECT count(*) FROM `vacinados` WHERE cpfPaciente = :cpf"; 
	$result = $conn->prepare($sql);
	$result->bindParam(':cpf',$cpf,PDO::PARAM_STR);
	$result->execute();
	$number_of_rows = $result->fetchColumn();
	#

	if ($number_of_rows > 0) {
		#
		# Paciente vacinado
		#
		$sql = "SELECT * FROM vacinados WHERE cpfPaciente = $cpf";
		$result = $conn->query( $sql );
		$rows = $result->fetchAll( PDO::FETCH_ASSOC );

		foreach ($rows as $infosSite) {
			$loteVacina = $infosSite['loteVacina'];
			$dose = $infosSite['dose'];
			$fabricante = $infosSite['fabricante'];
			$dataVacinado = $infosSite['data'];
		}

		$sql = "SELECT * FROM vacinas WHERE lote = '$lote'";
		$result = $conn->query( $sql );
		$rows = $result->fetchAll( PDO::FETCH_ASSOC );

		foreach ($rows as $infosSite) {
			$fabricanteVacina = $infosSite['fabricante'];
		}

		if ($loteVacina === $lote || $fabricante === $fabricanteVacina) {
			#
			# o lote é o mesmo <br>
			#
			$sql = "SELECT * FROM vacinas WHERE lote = '$lote'";
			$result = $conn->query( $sql );
			$rows = $result->fetchAll( PDO::FETCH_ASSOC );

			foreach ($rows as $infosSite) {
				$qtdDosesNecessarias = $infosSite['doses'];
				$fabricante = $infosSite['fabricante'];
				$intervalo = $infosSite['intervalo'];
			}


			if ($dose == $qtdDosesNecessarias) {
				echo '<div class="alert alert-danger" role="alert">Possui ' . $dose . ' de ' . $qtdDosesNecessarias . ' necessárias</div>';
				include('../vacinas/index.php');
			}else{
				#
				#
				#

				$newDate = date('d/m/Y', strtotime('+'. $intervalo . ' days'));

				if (date('d/m/Y') >= $newDate) {
					$dose = $dose + 1;
					$sql = "UPDATE `vacinados` SET dose = ? WHERE cpfPaciente = ?"; 
					$result = $conn->prepare($sql);
					$result->execute([$dose, $cpf]);
					echo '<div class="alert alert-warning" role="alert">Adicionada mais uma dose</div>';
					include('../vacinas/index.php');
				}else{
					echo '<div class="alert alert-danger" role="alert">É cedo demais para vacinar o paciente novamente </div>';
					include('../vacinas/index.php');
				}
			}
			#
		}else{
			echo 'A vacina não é a mesma';
			include('../vacinas/index.php');
			#
		}
		
	}else{
		#
		#	Busca no banco de dados as informações da vacina através do lote
		#
		$sql = "SELECT * FROM vacinas WHERE lote = '$lote'";
		$result = $conn->query( $sql );
		$rows = $result->fetchAll( PDO::FETCH_ASSOC );

		#
		#	Colocando as informações em variáveis
		#
		foreach ($rows as $infosSite) {
			$qtdDosesNecessarias = $infosSite['doses'];
			$fabricante = $infosSite['fabricante'];
		}

		#
		# Inserindo paciente vacinado no banco de dados
		#
		$stmt = $conn->prepare("INSERT INTO `vacinados` (`data`, `cpfPaciente`, `loteVacina`, `dose`, `fabricante`) VALUES (NOW(), '$cpf', '$lote', 1, '$fabricante');");

		$stmt->execute();
		#
		echo '<div class="alert alert-success" role="alert">
		Paciente vacinado </div>';
		include('../vacinas/index.php');
	}

	#
}else{
	echo '<div class="alert alert-danger" role="alert">
	Paciente não encontrado </div>';
	include('../vacinas/index.php');
}

$_SESSION['setVacinado'] = true;