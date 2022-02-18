# Configurando o projeto

## Executar os seguintes comandos:

- composer update
- php artisan key:generate
- php artisan migrate (Para criar as tabelas do banco)
- php artisan db:seed -> Insere apenas o usuário no banco para efetuar o login (Login e Senha: admin)



## Configurando o banco no projeto

- duplicar o arquivo .env.example e renomear para .env
- Alterar os valores de acordo com sua conexão e seu BD

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=promobit
- DB_USERNAME=root
- DB_PASSWORD=

## Iniciando servidor

- php artisan serve


## Observações

Foi adicionado um campo na tabela produtos chamado "visits" para simular a ideia de produtos mais vistos, toda vez que acessamos a lista de itens e visualizamos os detalhes esse campo é incrementado.
A ideia do script é trazer o produto mais visto de cada categoria.

```SQL
SELECT P.name_prod , MAX(P.visits) , T.name_tag FROM products P 
JOIN product_tag PT on PT.product_id = P.id 
JOIN tags T ON PT.tag_id = T.id GROUP BY T.id
```