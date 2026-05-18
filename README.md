# PHPMyDash

Um painel administrativo para gerenciamento familiar! Ter em um só lugar, resumo bancarios, controle de finanças, controle de geração de energia, armazenamento de receitas, listas de compras, e muito mais...

## Como usar

> Docker (preferencial)
1. Baixe esse projeto, em `Releases` ou `Download ZIP`. Caso clone, não esqueça de remover o `.git` após clonar
2. Renomeie a pasta conforme o nome do seu projeto
3. Configure o `public_html/.htaccess` removendo o `RewriteBase`
4. Configure o `application/condifs/config.development.php` mudando `application.basepath` para vazio
5. Dê permissão 777 recursiva para `application/tmp`
6. Baixe as dependencias PHP com `composer update`
7. Acesse a pasta `docker` e execute `docker compose up`
8. Acesse seu projeto pelo navegador `http://localhost:8080/`

> Apache
1. Baixe esse projeto, em `Releases` ou `Download ZIP`. Caso clone, não esqueça de remover o `.git` após clonar
2. Renomeie a pasta conforme o nome do seu projeto
3. Configure o `public_html/.htaccess` modificando o `RewriteBase` para `/seuprojeto/public_html` ou se for a raiz, pode remover
4. Configure o `application/condifs/config.development.php` mudando `application.basepath` para `/seuprojeto/public_html` ou pode deixar em branco
5. Dê permissão 777 recursiva para `application/tmp`
6. Baixe as dependencias PHP com `composer update`
7. Acesse seu projeto pelo navegador `http://localhost/seuprojeto/public_html`

## Licença

Use conforme achar melhor, contribua, de ideias, ganhe dinheiro, faça o que quiser, só lembre de nós nos creditos e SEMPRE mantenha ele com código aberto e publico.

> Esse projeto só é possivel graças ao projeto [phpmypanel](https://github.com/scorninpc/phpmypanel) e todas as dependencias listadas nele! Se me esqueci de algum, por favor me chame para devidos creditos:

- [PHP](https://github.com/php/php-src)
- [slim-mvc-skel](https://github.com/scorninpc/slim-mvc-skel)
- [Slim Framework](https://github.com/slimphp/Slim)
- [Smarty](https://github.com/smarty-php/smarty)
- [Slim Smarty View](https://github.com/scorninpc/slim-smarty-view)
- [Slim MVC](https://github.com/scorninpc/slim-mvc)
- [Composer](https://github.com/composer/composer)
- [Bootstrap](https://github.com/twbs/bootstrap)
- [Tabler](https://github.com/tabler/tabler)
- [JQuery](https://github.com/jquery/jquery)
- [JQuery UI](https://github.com/jquery/jquery-ui)
- [jQuery Mask Plugin](https://github.com/igorescobar/jQuery-Mask-Plugin)
- [summernote](https://github.com/summernote/summernote/)
- [Font-Awesome](https://github.com/fortawesome/font-awesome)