<?php
namespace Controller\PeriodosController;

use View\BaseView\BaseView;
use Model\Periodo\Periodo;
	
class PeriodosController
{
	public static function home(){
		$periodos = Periodo::all();
		$view = new BaseView();
		$view->render('Periodos','index',['periodos' => $periodos]);
	}

	public static function adicionar(){
		$view = new BaseView();
		$view->render('Periodos','adicionar');
	}

	public static function edit(){
		$periodo = Periodo::find($_GET['id']);
		//print_r($periodo);
		//exit;
		$view = new BaseView();
		$view->render('Periodos','edit', ['periodos' => $periodo]);
	}

	public static function save(){
		$periodo = new Periodo();
		$periodo->setDescricao($_POST['periodo']);
		if(isset($_POST['periodo'])){
			$periodo->setId($_POST['idPeriodo']);
		}
		$periodo->saveOuUpdate();
		header("location:?r=periodos");
	}

	public static function delete(){
             if(isset($_POST['idPeriodo'])){
                 $periodo = new Periodo();
                 $periodo->setId($_POST['idPeriodo']);
                 $periodo->remove($this);
                 header("location:?r=periodos");
             }
        }
}
?>