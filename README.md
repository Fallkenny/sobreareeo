# sobreareeo
SobreAereo


Executar os .sql dentro de "sobreaereo/sql" (MySQL)

Não está implementado o cadastro de usuários novos.
Para fim de testes, ao executar os sqls, são adicionados ao banco os seguintes usuarios:

login:admin@sobreaereo.com
senha:admin     

login:vendedor1@sobreaereo.com
senha:vendedor1 

login:vendedor2@sobreaereo.com
senha:vendedor2 

login:cliente1@sobreaereo.com
senha:cliente1  

login:cliente2@sobreaereo.com
senha:cliente2  


Cada um tem seus papeis especificos e páginas que não pode acessar.



-----------------------------------
No arquivo 
"sobreaereo/includes/header.php"
deve-se setar a tag <base href="http://localhost/sobreaereo/">
com base nos níveis de pasta onde o projeto estiver dentro do servidor.

---------
No arquivo "sobreaereo\dao\MySqlDaoFactory.php";
Configurar a conexão ao MySQL

define('HOST', '127.0.0.1');
define('USUARIO', 'admin');
define('SENHA', '');
define('DB', 'sobreaereo_db');
