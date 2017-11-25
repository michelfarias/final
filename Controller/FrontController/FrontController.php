<?php
namespace Controller\FrontController;

use Controller\HomeController\HomeController;
use Controller\AlunosController\AlunosController;
use Controller\PeriodosController\PeriodosController;

class FrontController 
{
	public function rodar($rota, $f=null){
		switch($rota){
			case 'home':
				HomeController::home();
				break;
			case 'alunos':
				AlunosController::home();
				break;
			case 'periodos':
				PeriodosController::$f();
				break;
			default:
				HomeController::erro();
				break;
		}
	}
}

?>