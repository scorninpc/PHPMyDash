<?php

namespace Application\Painel\Models;

/**
 * model de contas financeiras
 */
class ContasFinanceiras extends \Application\Painel\Helpers\Model
{
	// configura o nome da tabela e a chave primaria
	protected $table = "contas_financeiras";
	protected $primaryKey = "idconta_financeira";

	/**
	 * configura o model
	 */
	public function configure()
	{
		// adiciona os campos da tabela
		$this->addField("identificador", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Identificador", "Identificador da conta");
		$this->addField("agencia", \Application\Painel\Helpers\Model::FIELDTYPE_DATE, "Agencia", "Código da agencia");
		$this->addField("conta", \Application\Painel\Helpers\Model::FIELDTYPE_BOOLEAN, "Conta", "Código da conta");
		$this->addField("tipo", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Tipo", "Tipo da conta");

		// seta o campo descrição
		$this->setDescriptionField("identificador");

		// seta a visibilidade dos campos
		$this->setVisibility("identificador", TRUE, TRUE, TRUE);
		$this->setVisibility("agencia", TRUE, TRUE, TRUE);
		$this->setVisibility("conta", TRUE, TRUE, TRUE);
		$this->setVisibility("tipo", TRUE, TRUE, TRUE);

		// seta o tamanho da coluna bootstrap
		$this->setBootstrapColumnSize("identificador", 4);
		$this->setBootstrapColumnSize("agencia", 4);
		$this->setBootstrapColumnSize("conta", 2);
		$this->setBootstrapColumnSize("tipo", 12);
	}
}