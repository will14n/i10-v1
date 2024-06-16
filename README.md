## Build

Para rodar o projeto é necessário ter o docker instalado na máquina e seguir a sequência:
1. Clonar e acessar o repositório;
2. Na pasta raiz do repositório, executar o comando que irá gerar o vendor do projeto: <br /><code>docker run --rm \\
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \\
    -w /var/www/html \\
    laravelsail/php83-composer:latest \\
    composer install --ignore-platform-reqs</code><br />
3. Executar o container:<br/><code>./vendor/bin/sail up -d</code>
4. Gerar o arquivo .env:<br/>
<code>cp .env.example .env</code>
5. Gerar a chave:
<br/><code>./vendor/bin/sail php artisan key:generate</code>
6. Rodar os migrations (irá também criar e configurar o banco):
<br/><code>./vendor/bin/sail php artisan migrate</code>
## Linha de desafio

Para realizar este desafio, coloquei como ponto de partida a construção de duas propostas para entrega, as duas com basicamente o mesmo layout, porém a "v2" agregando uma parte de rest api que foi construída e a evolução de estrutura da base de código, partindo do desafio implementado no "V1" que estava bem simples e acoplado, sem deixar de lado o funcionamento da parte do sistema MVC que funciona com a mesma estrutura que roda a rest api.

Alguns patterns e padrões implementados no V2:
- Validação dos requests de entrada;
- Camada de Service
- Camada de DTO
- Padronização do repository com interface, apesar do ORM já trabalhar como um repository, foi implementada uma camada separada da Model para ilustrar como posso trabalhar outros recursos do sistema que podem variar de fornecedor
- Inversão de dependência
- Padronização da saída da API com resources e Adapter

## Links
Repositório, projeto v1: https://github.com/will14n/i10-v1<br />
Repositório, projeto v2: https://github.com/will14n/i10-v2<br />
Projeto v1: http://ec2-54-234-227-78.compute-1.amazonaws.com/<br />
Projeto v2: http://ec2-3-80-117-71.compute-1.amazonaws.com/<br />
