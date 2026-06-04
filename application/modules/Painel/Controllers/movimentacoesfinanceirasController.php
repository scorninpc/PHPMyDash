<?php

namespace Application\Painel\Controllers;

use Application\Painel\Helpers;

/**
 * controlador de movimentacoes financeiras
 * 
 */
class movimentacoesfinanceirasController extends \Application\Painel\Helpers\Controller
{

	/**
	 * configura o controller
	 */
	public function configure()
	{
		$this->model = new \Application\Painel\Models\MovimentacoesFinanceiras();
	}

	/**
	 * antes de montar o formulário
	 */
	public function doBeforeForm()
	{
		
	}

	/**
	 * antes de inserir
	 */
	public function doBeforeInsert($data)
	{
		
	}

}