## Desafio Concluído!

Para executar o projeto será necessário ter o php em sua 7ª versão assim como o composer instalado na máquina.

1) Na pasta do projeto execute o seguinte codigo para que o composer baixe as dependencias do projeto.
```php
  composer install
```

2) Em seguinda na pasta raiz do projeto deve-se editar o arquivo .env especificamente o trecho abaixo com os dados do banco de dados.
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafio
DB_USERNAME=root
DB_PASSWORD=
```

3) Feito isto iremos criar no banco de dados a tabela executando o seguinte comando na pasta do projeto.
```php
  php artisan migrate
```

4) Para finalizar, execute o projeto com o comando a seguir:
```php
  php artisan serve
```

PRONTO!! O projeto já estará funcionando localmente, o caminho padrão é o [127.0.0.1:8000](http://127.0.0.1:8000/)
