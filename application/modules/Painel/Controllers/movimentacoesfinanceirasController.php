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
	 * antes de montar a listagem
	 */
	public function doBeforeList($select)
	{
		$select->orderByRaw("DATE(data_movimento) DESC");

		return $select;
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

	/**
	 * hooks
	 */
	public function doAfterInsert($id) {}
	public function doAfterUpdate($id) {}
	public function doBeforeUpdate($data) { return $data; }
	public function doAfterDelete($id) {}
	public function dobeforeDelete($id) {}

}