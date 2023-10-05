# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUES(null, 'Yasmin', 'Martinez Rojas', 'yas@yas.com', '1234', '2023-09-23');
-- la fecha con date en formato americano
INSERT INTO usuarios VALUES(null, 'Paco', 'Lopez', 'pac@paco.com', '1234', '2023-09-23');
INSERT INTO usuarios VALUES(null, 'Fran', 'Loquendo', 'fran@fran.com', '1234', '2023-09-23');
INSERT INTO usuarios VALUES(null, 'Juan', 'Martinez', 'juan@juan.com', '1234', '2023-09-23');

#INSERTAR FILAS SOLO CON CIERTAS COLUMNAS#
-- Si algun atributo no admite datos nulos no se podria, eso hay que rellenarlos si o si, por eso vamos a cambiar estos atributos en phpMyadmin
INSERT INTO usuarios(email, clave) VALUES('prueba@prueba.com', '1234'); 

-- otros
INSERT INTO entradas VALUES(null, 3, 1, 'Guia de GTA Vice City', 'GTA', CURDATE());

INSERT INTO categorias VALUES(null, 'Plataformas');