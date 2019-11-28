## Desafio Concluído!

*Para executar o projeto será necessário ter o php em sua 7ª versão assim como o composer instalado na máquina.*


1) Clone o projeto utilizando o comando:
```
git clone https://github.com/LucasManco/desafio.git
```
2) Em seguida insira os comandos abaixo para acessar a pasta do projeto, padrão desafio, e instalar as dependências.
```
cd desafio
```
```
composer install
```

3) Em seguida na pasta raiz do projeto deve-se editar o arquivo .env especificamente o trecho abaixo com os dados do banco de dados.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafio
DB_USERNAME=root
DB_PASSWORD=
```

4) Feito isto iremos criar no banco de dados a tabela executando o seguinte comando na pasta do projeto.
```
php artisan migrate
```

5) Para finalizar, execute o projeto com o comando a seguir:
```
php artisan serve
```

PRONTO!! O projeto já estará funcionando localmente, o caminho padrão é o [127.0.0.1:8000](http://127.0.0.1:8000/)
