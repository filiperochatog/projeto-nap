use login;

create table pacientes(
id_usuario int auto_increment primary key,
nome varchar(30),
matricula varchar(30),
contato varchar(40),
responsavel varchar(32),
datas varchar(10),
hora varchar(10),
descricao varchar(150),
historico varchar(150)

);
