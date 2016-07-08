# Instruções para rodar o projeto

### Iniciando o servidor:
**1 - Iniciar o php na pasta *'public'***

> <path_to_project>/public/

```sh
~/CursoPHP $ sudo php -S localhost:8888 -t /public
```
_________________________________________________________
**2 - Criando o bando de dados**

para criar o banco de dados, utilize o arquivo *'database.sql'* que está na raiz da pasta do projeto.

Use o seguinte comando para execurar:
```sh
~/CursoPHP $ mysql -u<usuario_do_mysql> -p < database.sql
```
_________________________________________________________
**3 - Rodando a fixture e criando os clientes**

Esta etapa é bem simples. Basta acessar *http://localhost:8888* e clicar no menu ***'RodarFixture(Gerar clientes)'***

**Projeto rodando com sucesso!...**

:)