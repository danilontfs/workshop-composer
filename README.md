## DICAS

* **Comandos Docker**
  * Iniciar: `docker-compose up`
  * Recompilar: `docker-compose build`
  * Executar: `docker-compose exec php7`
  * Bash do container: `docker-compose exec php7 date`
  * Executar data no php: `docker-compose exec php7 date`
  * Executar composer no php: `docker-compose exec php7 composer --version`

* **Comandos Composer**
  * Adicionar uma dependência (pacote): `docker-compose exec php7 composer require vlucas/phpdotenv`
  * Adicionar uma dependência (pacote) com verbose: `docker-compose exec php7 composer require vlucas/phpdotenv -vvv`

* **Comandos GIT**
  * Configurações do git: `cat .git/config`

* **Anotações**
  * Se o `Dockerfile` for alterado, no build só serão executadas as linhas que estão abaixo da alteração.
  * `Volumes` servem para apontar pastas remotamente.
  * `- ~/.composer:/root/.composer` para apontar o cache do composer pra nossa pasta de usuário.
  * `Composer.json:` informações do projeto.
  * `Composer.lock:` dependências do projeto.
