<?php

namespace Application\Painel\Models;

/**
 * model de movimentações financeiras
 */
class MovimentacoesFinanceiras extends \Application\Painel\Helpers\Model
{
	// configura o nome da tabela e a chave primaria
	protected $table = "movimentacoes_financeiras";
	protected $primaryKey = "idmovimentacao_financeira";

	/**
	 * configura o model
	 */
	public function configure()
	{
		// adiciona os campos da tabela
		$this->addField("idconta_financeira", \Application\Painel\Helpers\Model::FIELDTYPE_INTEGER, "", "Conta da movimentação financeira");
		$this->addField("data_movimento", \Application\Painel\Helpers\Model::FIELDTYPE_DATE, "Data", "Data da movimentação financeira");
		$this->addField("efetivado", \Application\Painel\Helpers\Model::FIELDTYPE_BOOLEAN, "Efetivado", "Informa se a movimentação financeira está efetivado");
		$this->addField("valor", \Application\Painel\Helpers\Model::FIELDTYPE_DECIMAL, "Valor", "Valor da movimentação financeira");
		$this->addField("tipo", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Tipo", "Tipo da movimentação financeira");
		$this->addField("parceiro", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Parceiro", "Parceiro da movimentação financeira");
		$this->addField("idnatureza_financeira", \Application\Painel\Helpers\Model::FIELDTYPE_INTEGER, "Natureza", "Natureza da movimentação financeira");
		$this->addField("descricao", \Application\Painel\Helpers\Model::FIELDTYPE_TEXT, "Descrição", "Descrição da movimentação financeira");

		// seta o campo descrição
		$this->setDescriptionField("idconta_financeira");

		// seta a visibilidade dos campos
		$this->setVisibility("idconta_financeira", TRUE, TRUE, TRUE);
		$this->setVisibility("data_movimento", TRUE, TRUE, TRUE);
		$this->setVisibility("efetivado", TRUE, TRUE, TRUE);
		$this->setVisibility("valor", TRUE, TRUE, TRUE);
		$this->setVisibility("tipo", TRUE, TRUE, TRUE);
		$this->setVisibility("parceiro", TRUE, TRUE, TRUE);
		$this->setVisibility("idnatureza_financeira", TRUE, TRUE, TRUE);
		$this->setVisibility("descricao", TRUE, TRUE, FALSE);

		// seta o tamanho da coluna bootstrap
		$this->setBootstrapColumnSize("idconta_financeira", 4);
		$this->setBootstrapColumnSize("data_movimento", 4);
		$this->setBootstrapColumnSize("efetivado", 4);
		$this->setBootstrapColumnSize("valor", 2);
		$this->setBootstrapColumnSize("parceiro", 12);
		$this->setBootstrapColumnSize("idnatureza_financeira", 3);
		$this->setBootstrapColumnSize("descricao", 6);
	}
}