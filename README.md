## DICAS

* **Comandos Docker**
  * Iniciar: `docker-compose up`
  * Recompilar: `docker-compose build`
  * Executar: `docker-compose exec php7`
  * Bash do container: `docker-compose exec php7 date`
  * Executar data no php: `docker-compose exec php7 date`
  * Executar composer no php: `docker-compose exec php7 composer --version`

* **Comandos Composer**
  * Adicionar uma dependência (pacote): `composer require vlucas/phpdotenv`
  * Adicionar uma dependência (pacote) com verbose: `composer require vlucas/phpdotenv -vvv`
  * Instalar dependências do composer.json: `composer install`
  * Atualizar dependências do composer.json: `composer update`
  * O `require` é apenas pra produção, em desenvolvimento o correto é utilizar o `require-dev`
  * Adicionar uma dependência no dev: `composer require vlucas/phpdotenv -dev`
  * Instalar dependências em produção: `composer install --no-dev`
  * Atualizar autoload: `composer dump-autoload`

* **Comandos GIT**
  * Configurações do git: `cat .git/config`

* **Anotações**
  * Se o `Dockerfile` for alterado, no build só serão executadas as linhas que estão abaixo da alteração.
  * `Volumes` servem para apontar pastas remotamente.
  * `- ~/.composer:/root/.composer` para apontar o cache do composer pra nossa pasta de usuário.
  * `Composer.json:` Dependências necessárias.
  * `Composer.lock:` Dependências Instaladas.
  * A dependência `hirak/prestissimo` serve para deixar os downloads do composer ocorram em paralelo. Foi adicionado no `entrypoint.sh` na execução do container.
  * É possível alterar o repositório da dependência. Adicionando a nova URL no item `repositories` do arquivo `composer.json`.
