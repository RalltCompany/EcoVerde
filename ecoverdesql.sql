CREATE DATABASE ecoverde;

USE ecoverde;

CREATE TABLE Usuario(
ci int(8) PRIMARY KEY,  
ciadmin int(8),
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
celular int(9) NOT NULL,
email VARCHAR(30) NOT NULL,
contraseña VARCHAR(32) NOT NULL,
calle VARCHAR(30) NOT NULL,
numero INT(9) NOT NULL,
esquina VARCHAR(30) NOT NULL,
barrio VARCHAR(30) NOT NULL,
tipo enum("Cliente", "Administrador", "Gestor", "Reparto") NOT NULL,
estado enum("Pendiente", "Aceptado"),
clienteactivo enum("1", "0"),
FOREIGN KEY(ciadmin) REFERENCES Usuario(ci)
)ENGINE=INNODB;


CREATE TABLE Pedido(
numero int(8) PRIMARY KEY AUTO_INCREMENT,  
ciu int(8),
fechayHora DATETIME,
fechaentrega DATE ,
metodoPago VARCHAR(30) NOT NULL,
horaPref varchar(50) NOT NULL,
estado enum("Pendiente", "Armado", "A entregarse", "Ruta", "Entregado", "Cancelado", "No entregado", "Rechazado","Aceptado") NOT NULL,
Nombre_destinatario VARCHAR(30),
direccionpe VARCHAR(50) NOT NULL,
total int(10) not null,
FOREIGN KEY(ciu) REFERENCES Usuario(ci)
)ENGINE=INNODB;

CREATE TABLE Producto(
codigo int(8) PRIMARY KEY AUTO_INCREMENT,  
ciu int(8) NOT NULL,
nombre VARCHAR(30) NOT NULL,
precio INT(9) NOT NULL,
familia VARCHAR(30) NOT NULL,
disponibilidad INT(10) NOT NULL,
propiedades VARCHAR(50) NOT NULL,
mes_de_plantado DATE NOT NULL,
imagen VARCHAR(50) NOT NULL,
productoactivo enum("1", "0"),
FOREIGN KEY(ciu) REFERENCES Usuario(ci)

)ENGINE=INNODB;

CREATE TABLE Conforma(
numerop int(8),  
codigopro int(8),
cantidad int(8) NOT NULL,
PRIMARY KEY(numerop,codigopro),

FOREIGN KEY(numerop) REFERENCES Pedido(numero),
FOREIGN KEY(codigopro) REFERENCES Producto(codigo)
)ENGINE=INNODB;



