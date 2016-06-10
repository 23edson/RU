
/*  SCRIPT SQL para o controle_ru
*
*
*
*
 *
 */

CREATE DATABASE IF NOT EXISTS RU;

USE RU;

CREATE TABLE IF NOT EXISTS Bilhete(
	cod INT(11) NOT NULL AUTO_INCREMENT,
	valor varchar(32) NOT NULL,
	CONSTRAINT bilhete_pk PRIMARY KEY (cod)
) ;

CREATE TABLE IF NOT EXISTS  Pessoa (
	id varchar(16) NOT NULL,
	nome varchar(20) NOT NULL,
	email varchar(30) NOT NULL,
	funcao varchar(13) NOT NULL,
	adm int(1) NOT NULL,
	senha varchar(32) NOT NULL,
	id_bilhete INT(11) NOT NULL,
	CONSTRAINT pessoa_pk PRIMARY KEY (Id),
	CONSTRAINT bilhete_fk FOREIGN KEY(id_bilhete) REFERENCES Bilhete(cod)
) ;

CREATE TABLE IF NOT EXISTS TipoPratos(
	id int NOT NULL AUTO_INCREMENT,
	tipo VARCHAR(30) NOT NULL UNIQUE,
	CONSTRAINT TipoPratos_pk PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS Pratos (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome varchar(30) NOT NULL UNIQUE,
	tipo int NOT NULL,
	img varchar(32) NOT NULL,
	CONSTRAINT pratos_pk PRIMARY KEY (id),
	CONSTRAINT tipo_fk FOREIGN KEY(tipo) REFERENCES TipoPratos(Id)
) ;

CREATE TABLE IF NOT EXISTS  Ingredientes(
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome varchar(30) NOT NULL UNIQUE,
	CONSTRAINT ingredientes_pk PRIMARY KEY (id)
) ;

CREATE TABLE IF NOT EXISTS IngredientesPratos (
	id INT(11) NOT NULL AUTO_INCREMENT,
	Quantidade varchar(10) NOT NULL,
	id_pratos INT(11) NOT NULL,
	id_ingredientes INT(11) NOT NULL,
	CONSTRAINT ingrpratos_pk PRIMARY KEY (id),
	CONSTRAINT pratos1_fk FOREIGN KEY(id_pratos) REFERENCES Pratos(id),
	CONSTRAINT ingr1_fk FOREIGN KEY(id_ingredientes) REFERENCES Ingredientes(id)
) ;

CREATE TABLE IF NOT EXISTS  Cardapio(
	cod INT(11) NOT NULL AUTO_INCREMENT,
	Data timestamp NOT NULL UNIQUE,
	CONSTRAINT cardapio_pk PRIMARY KEY (cod)
) ;

CREATE TABLE IF NOT EXISTS PratosCardapio(
	id INT(11) NOT NULL AUTO_INCREMENT,
	id_pratos INT(11) NOT NULL,
	id_cardapio INT(11) NOT NULL,
	CONSTRAINT ingrcardapio_pk PRIMARY KEY (id),
	CONSTRAINT pratos2_fk FOREIGN KEY(id_pratos) REFERENCES Pratos(id),
	CONSTRAINT cardapio_fk FOREIGN KEY(id_cardapio) REFERENCES Cardapio(cod)
) ;

CREATE TABLE IF NOT EXISTS Compras (
	id INT(11) NOT NULL AUTO_INCREMENT,
	Nota float,
	Comentario varchar(40),
	id_pessoa VARCHAR(16) NOT NULL,
	id_cardapio INT(11) NOT NULL,
	CONSTRAINT compras_pk PRIMARY KEY (id),
	CONSTRAINT pessoa1_fk FOREIGN KEY(id_pessoa) REFERENCES Pessoa(Id),
	CONSTRAINT cardapio1_fk FOREIGN KEY(id_cardapio) REFERENCES Cardapio(cod)
) ;
INSERT INTO Bilhete VALUES (0,0);
INSERT INTO Bilhete VALUES (0,0);
INSERT INTO Bilhete VALUES (0,0);
INSERT INTO Pessoa VALUES (1212121002,'akan@uffs.edu.br','akan.reimos','estudante', 0, 'd93591bdf7860e1e4ee2fca799911215', 1);
INSERT INTO Pessoa VALUES (2244398,'juvencia@uffs.edu.br','juvencia.akal','professor', 0, 'd93591bdf7860e1e4ee2fca799911215', 2);
INSERT INTO Pessoa VALUES (07611457404,'admin@uffs.edu.br','grandAdmin','externo', 1, 'd93591bdf7860e1e4ee2fca799911215', 3);
INSERT INTO Ingredientes VALUES (0, 'Cenoura');
INSERT INTO Ingredientes VALUES (0, 'Alface');
INSERT INTO Ingredientes VALUES (0, 'Carne Moída');
INSERT INTO TipoPratos VALUES(0,'Foleagenosas');
INSERT INTO TipoPratos VALUES(0,'Mix de Salada');
INSERT INTO TipoPratos VALUES(0,'Legumes');
INSERT INTO TipoPratos VALUES(0,'Arroz 1');
INSERT INTO TipoPratos VALUES(0,'Arroz 2');
INSERT INTO TipoPratos VALUES(0,'Grão');
INSERT INTO TipoPratos VALUES(0,'Acompanhamento');
INSERT INTO TipoPratos VALUES(0,'Prato Principal');
INSERT INTO TipoPratos VALUES(0,'Fruta/sobremesa');
INSERT INTO Pratos VALUES (1, 'Misto de folhas com manga',1, 'NULL');
INSERT INTO Pratos VALUES (2, 'Alface',1, 'NULL');
INSERT INTO Pratos VALUES (3, 'Rúcula',1, 'NULL');
INSERT INTO Pratos VALUES (4, 'Almeirão',1, 'NULL');
INSERT INTO Pratos VALUES (5, 'Radite',1, 'NULL');
INSERT INTO Pratos VALUES (6, 'Cenoura c/ repolho',2, 'NULL');
INSERT INTO Pratos VALUES (7, 'Abobrinha ralada',2, 'NULL');
INSERT INTO Pratos VALUES (8, 'Rabanete',2, 'NULL');
INSERT INTO Pratos VALUES (9, 'Pepino',2, 'NULL');
INSERT INTO Pratos VALUES (10, 'Beterraba ralada',2, 'NULL');
INSERT INTO Pratos VALUES (11, 'Beterraba cozida',3, 'NULL');
INSERT INTO Pratos VALUES (12, 'Cenoura cozida',3, 'NULL');
INSERT INTO Pratos VALUES (13, 'Brócolis',3, 'NULL');
INSERT INTO Pratos VALUES (14, 'Vagem',3, 'NULL');
INSERT INTO Pratos VALUES (15, 'Cenoura pura',3, 'NULL');
INSERT INTO Pratos VALUES (16, 'Arroz Branco',4, 'NULL');
INSERT INTO Pratos VALUES (17, 'Arroz Integral',5, 'NULL');
INSERT INTO Pratos VALUES (18, 'Feijão Azul',6, 'NULL');
INSERT INTO Pratos VALUES (19, 'Feijão carioca',6, 'NULL');
INSERT INTO Pratos VALUES (20, 'Lentilha',6, 'NULL');
INSERT INTO Pratos VALUES (21, 'Feijão preto',6, 'NULL');
INSERT INTO Pratos VALUES (22, 'Feijão branco',6, 'NULL');
INSERT INTO Pratos VALUES (23, 'Banana Especial',7, 'NULL');
INSERT INTO Pratos VALUES (24, 'Creme de milho',7, 'NULL');
INSERT INTO Pratos VALUES (25, 'Macarrão alho e óleo',7, 'NULL');
INSERT INTO Pratos VALUES (26, 'Polenta frita',7, 'NULL');
INSERT INTO Pratos VALUES (27, 'Batata palha',7, 'NULL');
INSERT INTO Pratos VALUES (28, 'Cubos bovinos ao molho escuro',8, 'NULL');
INSERT INTO Pratos VALUES (29, 'Costela suína assada',8, 'NULL');
INSERT INTO Pratos VALUES (30, 'Almôndegas ao molho vermelho',8, 'NULL');
INSERT INTO Pratos VALUES (31, 'Peixe à portuguesa',8, 'NULL');
INSERT INTO Pratos VALUES (32, 'Estrogonofe de frango',8, 'NULL');
INSERT INTO Pratos VALUES (33, 'Docinho',9, 'NULL');
INSERT INTO Pratos VALUES (34, 'Fruta',9, 'NULL');
INSERT INTO Pratos VALUES (35, 'Flan de morango',9, 'NULL');
INSERT INTO Pratos VALUES (36, 'Pavê duas cores',9, 'NULL');
INSERT INTO Pratos VALUES (37, 'Torta de bolacha',9, 'NULL');

INSERT INTO Cardapio VALUES (0, '2016-05-16');
INSERT INTO Cardapio VALUES (0, '2016-05-17');
INSERT INTO Cardapio VALUES (0, '2016-05-18');
INSERT INTO Cardapio VALUES (0, '2016-05-19');
INSERT INTO Cardapio VALUES (0, '2016-05-27');
INSERT INTO Compras VALUES (0, 10, 'Sensacional!!!!!', 1212121002,1);
INSERT INTO Compras VALUES (0, 2.5, 'Até que vai. Mas por esse preço? Nunca!', 1212121002,2);
INSERT INTO PratosCardapio VALUES (0,1, 1);
INSERT INTO PratosCardapio VALUES (0,6, 1);
INSERT INTO PratosCardapio VALUES (0,11, 1);
INSERT INTO PratosCardapio VALUES (0,16, 1);
INSERT INTO PratosCardapio VALUES (0,17, 1);
INSERT INTO PratosCardapio VALUES (0,18, 1);
INSERT INTO PratosCardapio VALUES (0,23, 1);
INSERT INTO PratosCardapio VALUES (0,28, 1);
INSERT INTO PratosCardapio VALUES (0,33, 1);
INSERT INTO PratosCardapio VALUES (0,2, 2);
INSERT INTO PratosCardapio VALUES (0,7, 2);
INSERT INTO PratosCardapio VALUES (0,12, 2);
INSERT INTO PratosCardapio VALUES (0,16, 2);
INSERT INTO PratosCardapio VALUES (0,17, 2);
INSERT INTO PratosCardapio VALUES (0,19, 2);
INSERT INTO PratosCardapio VALUES (0,24, 2);
INSERT INTO PratosCardapio VALUES (0,29, 2);
INSERT INTO PratosCardapio VALUES (0,34, 2);
INSERT INTO PratosCardapio VALUES (0,3, 3);
INSERT INTO PratosCardapio VALUES (0,8, 3);
INSERT INTO PratosCardapio VALUES (0,13, 3);
INSERT INTO PratosCardapio VALUES (0,16, 3);
INSERT INTO PratosCardapio VALUES (0,17, 3);
INSERT INTO PratosCardapio VALUES (0,20, 3);
INSERT INTO PratosCardapio VALUES (0,25, 3);
INSERT INTO PratosCardapio VALUES (0,30, 3);
INSERT INTO PratosCardapio VALUES (0,35, 3);
INSERT INTO PratosCardapio VALUES (0,4, 4);
INSERT INTO PratosCardapio VALUES (0,9, 4);
INSERT INTO PratosCardapio VALUES (0,14, 4);
INSERT INTO PratosCardapio VALUES (0,16, 4);
INSERT INTO PratosCardapio VALUES (0,17, 4);
INSERT INTO PratosCardapio VALUES (0,21, 4);
INSERT INTO PratosCardapio VALUES (0,26, 4);
INSERT INTO PratosCardapio VALUES (0,31, 4);
INSERT INTO PratosCardapio VALUES (0,36, 4);
INSERT INTO PratosCardapio VALUES (0,5, 5);
INSERT INTO PratosCardapio VALUES (0,10, 5);
INSERT INTO PratosCardapio VALUES (0,15, 5);
INSERT INTO PratosCardapio VALUES (0,16, 5);
INSERT INTO PratosCardapio VALUES (0,17, 5);
INSERT INTO PratosCardapio VALUES (0,22, 5);
INSERT INTO PratosCardapio VALUES (0,27, 5);
INSERT INTO PratosCardapio VALUES (0,32, 5);
INSERT INTO PratosCardapio VALUES (0,37, 5);

INSERT INTO IngredientesPratos VALUES (0,200, 1, 2);
INSERT INTO IngredientesPratos VALUES (0,200, 1, 3);
INSERT INTO IngredientesPratos VALUES (0,200, 2, 1);
INSERT INTO IngredientesPratos VALUES (0,200, 2, 2);
