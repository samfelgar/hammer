# Hammer

Projeto final do curso de Sistemas de Informação do Centro Universitário UNIEURO.

# Instalação

## Pré-requisitos

- PHP ^7.2.5
- MySQL 8
- Composer ^2.0.8

Caso você tenha instalado o PHP e MySQL com o XAMPP (ou variantes), várias extensões requeridas já serão instaladas.
Caso não, atente para o disposto [aqui](https://laravel.com/docs/7.x/installation#server-requirements).

## Antes de começar

O código está disponível em [https://github.com/samfelgar/hammer](https://github.com/samfelgar/hammer).

Você pode clonar o repositório ou baixar o ZIP [aqui](https://github.com/samfelgar/hammer/archive/master.zip).

É necessário criar o banco de dados que será utilizado por este projeto. Exemplo: `hammer`.


## Orientações

1. Altere o arquivo `.env.example`, inserindo as informações de conexão ao banco de dados. Os campos a ser alterados são os abaixo:

- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=hammer - NOME DO BANCO DE DADOS
- DB_USERNAME=example - USUÁRIO DO BANCO
- DB_PASSWORD=example - SENHA DO BANCO

2. Também é possível alterar a URL do app, dependendo de como seu ambiente está configurado.
No mesmo arquivo `.env.example`, modifique o campo APP_URL, inserindo o valor desejado.
   
3. Altere o nome do arquivo `.env.example` para `.env`.

4. Na pasta raiz do projeto, execute `composer install` (você deve ter o composer instalado globalmente)
5. Execute `php artisan migrate`. Este comando criará as tabelas no banco de dados especificado.
6. Execute `php artisan db:seed`. Este comando irá popular o banco com algumas informações.

Após a execução do comando acima, serão criados usuários para realização de testes:

- samfelgar@gmail.com, senha 123456, tipo: USUÁRIO (interno)
- daniel@gmail.com, senha 123456, tipo: PROFISSIONAL
- mauricio@gmail.com, senha 123456, tipo: CLIENTE
- willian@gmail.com, senha 123456, tipo: USUÁRIO (interno)

7. Execute `php artisan serve` para iniciar o servidor local

- Caso esteja utilizando o XAMPP (ou similares), ao tenta acessar pelo navegador, acrescente `/public` à URL.

Brasília DF, 2020.
