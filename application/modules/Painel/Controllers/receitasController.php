<?php

namespace Application\Painel\Controllers;

use Application\Painel\Helpers;

/**
 * controlador de receitas do painel
 * 
 */
class receitasController extends \Application\Painel\Helpers\Controller
{

	/**
	 * configura o controller
	 */
	public function configure()
	{
		$this->model = new \Application\Painel\Models\Receitas();
	}

	/**
	 * antes de inserir
	 */
	public function doBeforeInsert($data)
	{
		$data['data_cadastro'] = date("Y-m-d");

		// verifica se tem idcategoria
		if(($data['idreceita_categoria']?:0) == 0) {
			
			// recupera o label
			$categoria = $this->getParam("idreceita_categoria_label", NULL);
			if(strlen($categoria?:"") > 0) {
				// não tem ID mas te categoria escrita, cadastra
				$model = new \Application\Painel\Models\ReceitasCategorias();
				try {
					$idcategoria = $model->insert(['titulo' => $categoria]);
					$data['idreceita_categoria'] = $idcategoria;
				}
				catch(\Exception $e) {
					\Application\Main\Helpers\Messages::error("Não foi possivel cadastrar a categoria");
					\Application\Main\Helpers\Redirect::back();
				}
			}

		}

		return $data;
	}

}