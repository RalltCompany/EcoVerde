CREATE DATABASE ecoverde;

USE ecoverde;

CREATE TABLE Usuario(
CI int(8) PRIMARY KEY,  
CIadmin int(8),
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
celular int(9) NOT NULL,
email VARCHAR(30) NOT NULL,
contraseña VARCHAR(32) NOT NULL,
calle VARCHAR(30) NOT NULL,
numero VARCHAR(30) NOT NULL,
esquina VARCHAR(30) NOT NULL,
barrio VARCHAR(30) NOT NULL,
tipo enum("Cliente", "Administrador", "Gestor", "Reparto") NOT NULL,
estado enum("Pendiente", "Aceptado"),
FOREIGN KEY(CIadmin) REFERENCES Usuario(CI)
)ENGINE=INNODB;


CREATE TABLE Pedido(
numero int(8) PRIMARY KEY AUTO_INCREMENT,  
CIU int(8),
FechayHora DATETIME,
Fechaentrega DATE NOT NULL,
metodoPago VARCHAR(30) NOT NULL,
horaPref varchar(50) NOT NULL,
estado enum("Pendiente", "Armado", "A entregarse", "Ruta", "Entregado", "Cancelado", "No entregado") NOT NULL,
Nombre_destinatario VARCHAR(30),

FOREIGN KEY(CIU) REFERENCES Usuario(CI)
)ENGINE=INNODB;

CREATE TABLE Producto(
Codigo int(8) PRIMARY KEY AUTO_INCREMENT,  
CIU int(8),
nombre VARCHAR(30) NOT NULL,
precio VARCHAR(30) NOT NULL,
familia VARCHAR(30) NOT NULL,
disponibilidad VARCHAR(30) NOT NULL,
propiedades VARCHAR(50) NOT NULL,
mes_de_plantado DATE NOT NULL,
imagen LONGBLOB NOT NULL,

FOREIGN KEY(CIU) REFERENCES Usuario(CI)
)ENGINE=INNODB;

CREATE TABLE Conforma(
Numerop int(8),  
Codigopro int(8),
Cantidad int(8) NOT NULL,
PRIMARY KEY(Numerop,Codigopro),

FOREIGN KEY(Numerop) REFERENCES Pedido(numero),
FOREIGN KEY(Codigopro) REFERENCES Producto(codigo)
)ENGINE=INNODB;