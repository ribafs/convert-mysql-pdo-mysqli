# Conversão entre mysql pdo mysqli
3 CRUDs, sendo um usando as funções mysql_*, um com mysqli e um com PDO

Para facilitar a conversão criei dois CRUDs (mysql e PDO) e um eu baixei (mysql) para converter entre as várias funções de acesso a bancos.

Como ainda existem aplicativos usando o PHP 5 com as funções de acesso a banco mysql_*, então resolvi CRUDs, sendo um com as funções mysql_* e outro com mysqli e outro similar mas com PDO, com a intenção de facilitar a conversão.

Um CRUD usando mysql_*, um com mysqli e outro usando PDO

O CRUD com mysql eu criei numa Box do Ubuntu 14.04 do Vagrant, com PHP 5

Já os CRUDs com PDO e mysqli criei na minha máquina com Linux Mint, com PHP 7.4

Algo que o PDO faz sozinho mas com mysql_* precisamos adicionar manualmente são aspas nos values:

mysql_query("INSERT INTO clients (name, email) VALUES ('$name', '$email')", $link);

Muitos são os detalhes. Confira nos exemplos.

Alguns ótimos tutoriais de referência


## Exemplo com mysql e PDO

https://www.devmedia.com.br/crud-com-php-pdo/28873
  
