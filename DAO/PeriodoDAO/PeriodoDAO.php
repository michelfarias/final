<?php
namespace DAO\PeriodoDAO;

use DAO\Conexao\Conexao;
use Model\Periodo\Periodo;
use PDO;

class PeriodoDAO{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function all(){
		$prepare = $this->con->query("SELECT * FROM tb_periodos ORDER BY id");
		$prepare->execute();

		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		$periodos = [];

		foreach($result as $item){
			$periodo = new Periodo();
			$periodo->setId($item['id']);
			$periodo->setDescricao($item['descricao']);
			$periodos[] = $periodo;
		}

		return $periodos;
	}

	public function fetchId($id){
		$prepare = $this->con->prepare("SELECT * FROM tb_periodos WHERE id=:id");
		$prepare->bindParam(':id', $id);
		$prepare->execute();

		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		$periodo = new Periodo();
		$periodo->setId($result[0]['id']);
		$periodo->setDescricao($result[0]['descricao']);
			

		return $periodo;

	}

	public function insert(Periodo $periodo){

		$prepare = $this->con->prepare("INSERT INTO tb_periodos (descricao) VALUES(:descricao)");

		$inserirDescricao = $periodo->getDescricao();

		$prepare->bindParam(':descricao',$inserirDescricao);
		$result = $prepare->execute();

		return $result;


	}

	public function update(Periodo $periodo){

		$prepare = $this->con->prepare("UPDATE tb_periodos SET descricao=:descricao WHERE id=:id");
		$prepare->bindValue(':id', $periodo->getId());
		$prepare->bindValue(':descricao', $periodo->getDescricao());

		$result = $prepare->execute();

		return $result;

	}


	public function delete(Periodo $periodo){
		$prepare = $this->con->prepare("DELETE FROM tb_periodos WHERE id=:id");
		$prepare->bindValue(':id', $periodo->getId());

		$result = $prepare->execute();

		return $result;

	}






}

?>