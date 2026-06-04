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
		$this->addField("tipo", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Tipo", "Tipo da movimentação financeira");
		$this->addField("data_movimento", \Application\Painel\Helpers\Model::FIELDTYPE_DATE, "Data", "Data da movimentação financeira");
		$this->addField("valor", \Application\Painel\Helpers\Model::FIELDTYPE_DECIMAL, "Valor", "Valor da movimentação financeira");
		$this->addField("parceiro", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Parceiro", "Parceiro da movimentação financeira");
		$this->addField("idnatureza_financeira", \Application\Painel\Helpers\Model::FIELDTYPE_INTEGER, "Natureza", "Natureza da movimentação financeira");
		$this->addField("idconta_financeira", \Application\Painel\Helpers\Model::FIELDTYPE_INTEGER, "Conta", "Conta da movimentação financeira");
		$this->addField("descricao", \Application\Painel\Helpers\Model::FIELDTYPE_TEXT, "Descrição", "Descrição da movimentação financeira");
		$this->addField("efetivado", \Application\Painel\Helpers\Model::FIELDTYPE_BOOLEAN, "Efetivado", "Informa se a movimentação financeira está efetivado");

		// seta o campo que sera usado de busca
		$this->setSearchField(("(movimentacoes_financeiras.parceiro || movimentacoes_financeiras.descricao || T01.descricao || movimentacoes_financeiras.valor || movimentacoes_financeiras.data_movimento)"));

		// seta o campo descrição
		$this->setDescriptionField("parceiro");

		// seta a visibilidade dos campos
		$this->setVisibility("idconta_financeira", TRUE, TRUE, TRUE);
		$this->setVisibility("data_movimento", TRUE, TRUE, TRUE);
		$this->setVisibility("efetivado", TRUE, TRUE, TRUE);
		$this->setVisibility("valor", TRUE, TRUE, TRUE);
		$this->setVisibility("tipo", TRUE, TRUE, TRUE);
		$this->setVisibility("parceiro", TRUE, TRUE, TRUE);
		$this->setVisibility("idnatureza_financeira", TRUE, TRUE, TRUE);
		$this->setVisibility("descricao", TRUE, TRUE, FALSE);

		// seta o autocomplete
		$this->setAutocomplete("idconta_financeira", "\\Application\\Painel\\Models\\ContasFinanceiras");
		$this->setAutocomplete("idnatureza_financeira", "\\Application\\Painel\\Models\\NaturezasFinanceiras");

		// seta as opções
		$this->setOptions("tipo", [
			'S' => "Saída",
			'E' => "Entrada",
		]);

		// seta o tamanho da coluna bootstrap
		$this->setBootstrapColumnSize("tipo", 2);
		$this->setBootstrapColumnSize("data_movimento", 2);
		$this->setBootstrapColumnSize("valor", 2);
		$this->setBootstrapColumnSize("parceiro", 6);
		$this->setBootstrapColumnSize("idnatureza_financeira", 3);
		$this->setBootstrapColumnSize("idconta_financeira", 3);
		$this->setBootstrapColumnSize("descricao", 6);
		$this->setBootstrapColumnSize("efetivado", 6);
	}
}