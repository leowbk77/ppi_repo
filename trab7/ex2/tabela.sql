CREATE TABLE cadastrados (
    id int PRIMARY KEY auto_increment,
    cep varchar(14),
    logradouro varchar(50),
    bairro varchar(50),
    cidade varchar(45),
    estado varchar(30)
) ENGINE=InnoDB;