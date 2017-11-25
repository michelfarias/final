<?php
namespace Model\Periodo;

use \DAO\PeriodoDAO\PeriodoDAO;

class Periodo
{
	private $id=null;
	private $descricao=null;

	public function __construct(){
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function saveOuUpdate(){
		if(is_null($this->id)){
			$inserir = new PeriodoDAO();
			$inserir->insert($this);
		}else{
			$atualizar = new PeriodoDAO();
			$atualizar->update($this);
		}
	}

	public function remove(){
		$remover = new PeriodoDAO();
		$remover->delete($this);
	}

	public static function find($id){
		$listar = new PeriodoDAO();
		return $listar->fetchId($id);
	}

	public static function all(){
		$listarTodos = new PeriodoDAO();
		return $listarTodos->all();
	}

	
	
}
?>