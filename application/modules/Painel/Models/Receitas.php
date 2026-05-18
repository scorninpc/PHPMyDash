<?php

namespace Application\Painel\Models;

/**
 * model de receitas do painel
 */
class Receitas extends \Application\Painel\Helpers\Model
{
	// configura o nome da tabela e a chave primaria
	protected $table = "receitas";
	protected $primaryKey = "idreceita";

	/**
	 * configura o model
	 */
	public function configure()
	{
		// adiciona os campos da tabela
		$this->addField("titulo", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Titulo", "Nome da receita");
		$this->addField("idreceita_categoria", \Application\Painel\Helpers\Model::FIELDTYPE_INTEGER, "Categoria", "Categoria da receita");
		$this->addField("conteudo", \Application\Painel\Helpers\Model::FIELDTYPE_TEXT, "Conteudo", "Conteudo, passo a passo, explicação da receita");
		$this->addField("data_cadastro", \Application\Painel\Helpers\Model::FIELDTYPE_DATE, "Data de Cadastro", "Data que a receita foi cadastrada");

		// seta o campo descrição
		$this->setDescriptionField("titulo");

		// seta os modificadores
		$this->setType("conteudo", "richtext");

		// seta o autocomplete
		$this->setAutocomplete("idreceita_categoria", "\\Application\\Painel\\Models\\ReceitasCategorias");

		// seta a visibilidade dos campos
		$this->setVisibility("titulo", TRUE, TRUE, TRUE);
		$this->setVisibility("idreceita_categoria", TRUE, TRUE, TRUE);
		$this->setVisibility("conteudo", TRUE, TRUE, FALSE);
		$this->setVisibility("data_cadastro", FALSE, FALSE, TRUE);

		// seta o tamanho da coluna bootstrap
		$this->setBootstrapColumnSize("titulo", 6);
		$this->setBootstrapColumnSize("idreceita_categoria", 6);
		$this->setBootstrapColumnSize("conteudo", 12);
	}
}