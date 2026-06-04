<?php

namespace Application\Painel\Models;

/**
 * model de naturezas financeiras
 */
class NaturezasFinanceiras extends \Application\Painel\Helpers\Model
{
	// configura o nome da tabela e a chave primaria
	protected $table = "naturezas_financeiras";
	protected $primaryKey = "idnatureza_financeira";

	/**
	 * configura o model
	 */
	public function configure()
	{
		// adiciona os campos da tabela
		$this->addField("descricao", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Identificador", "Identificador da conta");

		// seta o campo descrição
		$this->setDescriptionField("descricao");

		// seta a visibilidade dos campos
		$this->setVisibility("descricao", TRUE, TRUE, TRUE);

		// seta o tamanho da coluna bootstrap
		$this->setBootstrapColumnSize("descricao", 4);
	}
}