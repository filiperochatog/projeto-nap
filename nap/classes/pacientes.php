<?php

class paciente
{
	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $paciente, $matricula)
	{
		global $pdo;
		try {
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$paciente, $matricula);
		} catch (PDOException $m) {
			$msgErro = $m->getMessage();
		}
		
	}


	public function cadastrar($nome, $matricula, $contato, $responsavel, $datas, $hora, $descricao, $historico)
	{

		global $pdo;
		
		$sql = $pdo->prepare("SELECT id_usuario FROM pacientes WHERE matricula = :m");
		$sql->bindValue(":m",$matricula);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; 
		}
		else
		{
			
			$sql = $pdo->prepare("INSERT INTO pacientes (nome,
			 matricula, contato, responsavel, datas, hora, descricao, historico) VALUES (:n, :m, :c, :r, :d, :h, :p, :s)"); 
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":m",$matricula);
			$sql->bindValue(":c",$contato);
			$sql->bindValue(":r",$responsavel);
            $sql->bindValue(":d",$datas);
            $sql->bindValue(":h",$hora);
            $sql->bindValue(":p",$descricao);
            $sql->bindValue(":s",$historico);
			$sql->execute();
			return true;


		}
		


	}

	


}







?>