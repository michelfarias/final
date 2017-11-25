<?php
namespace Controller\AlunosController;

use View\BaseView\BaseView;
	
class AlunosController
{
	public static function home(){
		$view = new BaseView();
		$view->render('Alunos','alunos');
	}
}
?>