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
estado enum("Pendiente", "Armado", "A entregarse",  "Ruta", "Entregado", "Cancelado", "No entregado", "Rechazado","Aceptado") NOT NULL,
Nombre_destinatario VARCHAR(30),
direccionpe VARCHAR(50) NOT NULL,
total int(10) not null,
cirepartidor INT(8),
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
mes_de_plantado enum('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre') NOT NULL,
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

/*Usuarios*/
INSERT INTO usuario (ci, ciadmin, nombre, apellido, celular, email, contraseña, calle, numero, esquina, barrio, tipo, estado, clienteactivo) VALUES
(54491536, NULL, 'Andrew', 'Suarez', 097742337, 'asuarez@impulso.edu.uy', '25d55ad283aa400af464c76d713c07ad', 'Ap Saravia', 3785, 'San Martin', 'Casavalle', 'Administrador', 'Aceptado', '1'),
(54890794, NULL, 'Leonardo', 'Cuña', 096574644, 'lcuna@impulso.edu.uy', '5e8667a439c68f5145dd2fcbecf02209', 'Ap Saravia', 3785, 'San Martin', 'Casavalle', 'Administrador', 'Aceptado', '1'),
(57346455, NULL, 'Rodrigo', 'Silva', 093087675, 'rdsilva@impulso.edu.uy', '4428c6c474502e61151877825bb41961', 'Leandro Gomez', 3465, 'San Martin', 'Casavalle', 'Gestor', 'Aceptado', '1'),
(54564657, NULL, 'Lucas', 'Gonzalez', 098776557, 'lucgonzalez@impulso.edu.uy', 'bac76b0feb747e3bde11269cf367c97b', 'Luis Alberto Herrera', 7767, 'Burges', 'Marconi', 'Reparto', 'Aceptado', '1'),
(58376463, NULL, 'Thiago', 'Arellano', 096874543 , 'tarellano@gmail.com', '95a4f73d9afe838c7c50256c8e72bf2c', 'Propios', 6534, 'Burges', 'Borro', 'Administrador', 'Aceptado', '1');

/*Producto*/
INSERT INTO producto (codigo, ciu, nombre, precio, familia, disponibilidad, propiedades, mes_de_plantado, imagen, productoactivo) VALUES
(NULL, 54491536, 'Manzana', 45, 'Frutas', 1700, 'Vitamina C', 'Enero', '../Vista/images/manzana.jpg', '1'),
(NULL, 54890794, 'Banana', 34, 'Frutas', 1630, 'Potasio', 'Julio', '../Vista/images/banana.jpg', '1'),
(NULL, 54564657, 'Zapallo', 64, 'Verduras', 1300, 'Fibra y Calcio', 'Noviembre', '../Vista/images/zapallo.jpg;', NULL),
(NULL, 57346455, 'Berenjena', 56, 'Verduras', 1479, 'Vitaminas y Hierro', 'Abril', '../Vista/images/berenjena.jpg', NULL),
(NULL, 58376463, 'Naranja', 42, 'Frutas', 2100, 'Vitamina C', 'Junio', '../Vista/images/naranja.jpg', '1');

/*Pedidos*/
INSERT INTO pedido (numero, ciu, fechayHora, fechaentrega, metodoPago, horaPref, estado, Nombre_destinatario, direccionpe, total) VALUES
(NULL, 54491536, '2022-10-14 21:13:27.000000', '2022-10-10', 'Tarjeta de Débito', '12 a 16', 'Armado', 'Johan', 'Aparicio Saravia 3785', 750),
(NULL, 54890794, '2022-10-14 16:26:25', '2022-10-01', 'MercadoPago', '08 a 12', 'Ruta', 'Claudia', 'Aparicio Saravia', 1200),
(NULL, 54564657, '2022-10-14 18:17:12', '2022-08-17', 'Tarjeta de Crédito', '16 a 20', 'Entregado', 'Geovana', 'San Martin Calle 1', 2300),
(NULL, 57346455, '2022-10-14 20:17:12', '2022-05-20', 'MercadoPago', '08 a 12', 'Armado', 'Martin', 'Instrucciones 6575', 300),
(NULL, 58376463, '2022-10-14 09:17:12', '2022-08-17', 'Tarjeta de Débito', '12 a 16', 'Ruta', 'Ihan', 'Gruta de Lourdes 5656', 1800);

/*Conforma*/
INSERT INTO conforma (numerop, codigopro, cantidad) VALUES
(2, 2, 6), (4, 4, 3), (3, 1, 14), (1, 5, 4),
(5, 3, 5), (4, 2, 7), (2, 4, 9),
(3, 5, 17), (1, 1, 12),
(5, 5, 22);

/*Consultas:*/

/*Cantidad de clientes agrupados por barrio.*/
SELECT barrio, COUNT(*) AS cantidad FROM usuario GROUP BY barrio;

/*Cantidad de pedidos agrupados por clientes ordenados de mayor a menor cantidad.*/
SELECT ciu, COUNT(*) AS p FROM pedido GROUP BY ciu ORDER BY p DESC;

/*Cantidad de pedidos agrupados por rango de hora de entrega.*/
SELECT horaPref, COUNT(*) AS p FROM pedido GROUP BY horaPref;

/*Cliente que realizó el pedido de mayor monto.*/
SELECT ciu, MAX(total) AS t FROM pedido;

/*Clientes que realizaron pedidos con monto mayor a $1000 en el mes anterior 
(según el mes en el que estoy debo consultar el mes anterior).*/
SELECT * FROM pedido WHERE MONTH(fechayhora) = MONTH(DATE_ADD(CURDATE(),INTERVAL -1 MONTH)) AND total > 1000;

/*Monto facturado agrupado por año.*/
SELECT YEAR(fechayhora) AS año, SUM(total) AS monto FROM pedido GROUP BY año;

/*Producto mayor solicitado en xxx mes.*/
SELECT SUM(cantidad) AS s, d.nombre, p.fechayhora 
FROM conforma AS c
LEFT JOIN producto AS d ON c.codigopro = d.codigo 
LEFT JOIN pedido AS p ON c.numerop = p.numero WHERE MONTH(p.fechayhora)="10"
GROUP BY d.nombre ORDER BY s DESC LIMIT 1;

/*Producto menor solicitado en xxx mes.*/
SELECT SUM(cantidad) AS cantidad, d.nombre, MONTH(fechayhora) AS mes
FROM conforma AS c
LEFT JOIN producto AS d ON c.codigopro = d.codigo 
LEFT JOIN pedido AS p ON c.numerop = p.numero WHERE p="10"
GROUP BY d.nombre ORDER BY s ASC LIMIT 1;

/*Cantidad de pedidos entregados agrupados por repartidor en xxx mes.*/
SELECT COUNT(*), u.nombre FROM pedido AS p
LEFT JOIN usuario AS u ON p.cirepartidor=u.ci 
WHERE p.estado = "Entregado" GROUP BY p.cirepartidor;

/*Cantidad de pedidos agrupados por mes.*/
SELECT fechayhora, COUNT(*) FROM pedido GROUP BY MONTH(fechayhora);

