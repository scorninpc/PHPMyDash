<?php

namespace Application\Painel\Models;

/**
 * model de categorias de receitas
 */
class ReceitasCategorias extends \Application\Painel\Helpers\Model
{
	// configura o nome da tabela e a chave primaria
	protected $table = "receitas_categorias";
	protected $primaryKey = "idreceita_categoria";

	/**
	 * configura o model
	 */
	public function configure()
	{
		// adiciona os campos da tabela
		$this->addField("titulo", \Application\Painel\Helpers\Model::FIELDTYPE_VARCHAR, "Titulo", "Nome da categoria da receita");

		// seta o campo descrição
		$this->setDescriptionField("titulo");

		// seta a visibilidade dos campos
		$this->setVisibility("titulo", TRUE, TRUE, TRUE);

		// seta o tamanho da coluna bootstrap
		$this->setBootstrapColumnSize("titulo", 6);
	}
}