<?php

namespace Application\Main\Controllers;

class indexController extends \PHPMyPanel\Internal\Controller
{
	/**
	 * pagina inicial
	 */
	public function indexAction()
	{
		// redireciona para o painel
		\PHPMyPanel\Helpers\Redirect::go("/painel");


		// migra os dados financeiros do site antigo
		// $dbFile = APPLICATION_PATH . "/tmp/old_database.sqlite";
		// $pdo = new \PDO("sqlite:$dbFile");

		// // Configurar o PDO para lançar exceções em caso de erros
		// $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		// // 2. Executar uma Query Simples
		// $query = "SELECT movimentos.*, parceiros.nome as parceiro FROM movimentos JOIN parceiros ON parceiros.idparceiro = movimentos.idparceiro";
		// $stmt = $pdo->query($query);

		// // 3. Exibir os resultados
		// $model = new \Application\Painel\Models\MovimentacoesFinanceiras();
		// while ($linha = $stmt->fetch(\PDO::FETCH_ASSOC)) {
			
		// 	$model->insert([
		// 		'idconta_financeira' => $linha['idconta'],
		// 		'data_movimento' => $linha['data_movimento'],
		// 		'efetivado' => $linha['efetivado'],
		// 		'valor' => $linha['valor'],
		// 		'tipo' => $linha['tipo'],
		// 		'parceiro' => $linha['parceiro'],
		// 		'idnatureza_financeira' => $linha['idnatureza'],
		// 		'descricao' => $linha['descricao'],
		// 	]);
		// }

	}


}
