https://www.youtube.com/watch?v=zuV7PLyqbpg

Para acessar o php myadmin:

localhost/phpmyadmin

Para criar um banco de dados:

CREATE DATABASE if not existis ddra
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci

(Depois clicar em executar)

Criar tabela:

CREATE TABLE if NOT EXISTS usuarios(
id int not null AUTO_INCREMENT,
nome varchar(40) not null,
email varchar(50) not null UNIQUE,
profissao varchar(40) not null,
PRIMARY KEY(id)
)DEFAULT charset=utf8;


CREATE TABLE IF NOT EXISTS funcionarios(
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(40) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE,
profissao VARCHAR(40) NOT NULL,
PRIMARY KEY(id)
)DEFAULT CHARSET=utf8;


alter table `ddra`.`funcionarios` 
   add column `sexo` varchar(1) NULL after `profissao`, 
   add column `setor` varchar(10) NOT NULL after `sexo`, 
   add column `numero` int(10) NULL after `setor`, 
   add column `telefone` int(10) NULL after `numero`, 
   add column `datanascimento` time NULL after `telefone`, 
   add column `rgdigitalizado` varchar(50) NOT NULL after `datanascimento`

 alter table `ddra`.`funcionarios` 
   change `datanascimento` `datanascimento` datetime NULL 


  o body do html é aonde fica tudo o que vai aparecer no site.
  o placeholder é para colocar o texto dentro da caixinha Ex: "Nome completo"



 //para finalizar a conexao com o banco
mysqli_close($conexao);


alter table `ddra`.`funcionarios` 
   add column `observacoes` varchar(300) NULL after `rgdigitalizado`

alter table `ddra`.`funcionarios` 
   change `telefone` `telefone` decimal(15) NULL 

alter table `ddra`.`funcionarios` 
   change `datanascimento` `datanascimento` date NULL