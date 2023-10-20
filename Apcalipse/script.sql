Create table hospedeiros (
     
     id int NOT NULL AUTO_INCREMENT,
     nome varchar(255),
     idade int,
     sexo varchar(100),
     peso int,
     altura DECIMAL(8,2) ,
     sangue varchar(100),
     gosto_musical varchar(255),
     esporte varchar(255),
     jogo varchar(255),
     primary key(id) 
);