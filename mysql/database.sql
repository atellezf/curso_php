use prueba_consola;

drop table if exists usuario;

create table if not exists usuario (
	id int AUTO_INCREMENT,
    nombre varchar(200) not null,
    email varchar(100) not null,
    PRIMARY KEY(id)
);

create unique index usuario_email on usuario(email);

INSERT INTO usuario (nombre, email) VALUES
('Alejandro','alejandro@correo.com'),
('Miguel','miguel@correo.com'),
('Lucy', 'lucy@correo.com');
