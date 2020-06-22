CREATE database voyage;

CREATE TABLE usuarios(
     nome VARCHAR(100) NOT NULL,
     senha VARCHAR(100) NOT NULL,
     email VARCHAR(100) NOT NULL,
     primary key(email)
);

