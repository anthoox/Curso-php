/*
 Diseñar y crear la base de datos de un concesionario.
 */
--  Se recomienda empezar por las tablas que no tienen relaciones con otras dentro

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
    id      int(10) auto_increment not null, 
    modelo  varchar(100) not null,
    marca   varchar(50),
    precio  int(20) not null,
    stock   int(255) not null,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id      int(10) auto_increment not null,
    nombre  varchar(100) not null,
    ciudad  varchar(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id          int(10) auto_increment not null,
    grupo_id    int(10) not null,
    jefe        int(10),
    nombre      varchar(100) not null,
    apellidos   varchar(150),
    cargo       varchar(50),
    fecha_alta  date,
    sueldo      float(20,2),
    comision    float(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;
-- La tabla vendedores tiene una relación más, los vendedores estan relacionados con sus jefes

CREATE TABLE clientes(
    id          int(10) auto_increment not null,
    vendedor_id int(10) not null,
    nombre      Varchar(150) not null,
    ciudad      varchar(100) null,
    gastado     float(50,2),
    fecha       date,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
    id          int(10) auto_increment not null,
    cliente_id  int(10) not null,
    coche_id    int(10) not null,
    cantidad    int(100),
    fecha       date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargos_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargos_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

#RELLENAR LAS TABLAS CON INFORMACIÓN#

#coches
INSERT INTO coches VALUES
    (null,'Renoult Clio', 'Renoult', 12000, 13 ),
    (null,'Seat Panda', 'Seat', 10000, 10 ),
    (null,'Mercedes Ranchera', 'Mercedes Benz', 65000, 5 ),
    (null,'Porche Cayane', 'Porche', 65000, 5),
    (null,'Lambo Aventador', 'Lamborgini', 170000, 2),
    (null,'Ferrari Spider', 'Ferrari', 245000, 80);

#grupos
INSERT INTO grupos VALUES 
    (null, 'Vendedores A', 'Madrid'),
    (null, 'Vendedores B', 'Madrid'),
    (null, 'Directores mecánicos', 'Madrid'),
    (null, 'Vendedores A', 'Barcelona'),
    (null, 'Vendedores B', 'Barcelona'),
    (null, 'Vendedores C', 'Valencia'),
    (null, 'Vendedores A', 'Bilbao'),
    (null, 'Vendedores B', 'Pamplona'),
    (null, 'Vendedores C', 'santiago de compostela');

#Vendedores
INSERT INTO vendedores VALUES 
    (null, 1, null, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4),
    (null, 1, 1, 'Fran', 'Martinez', 'Ayudante de tienda', CURDATE(), 23000, 2),
    (null, 2, null, 'Nelson', 'Sanchez', 'Responsable de tienda', CURDATE(), 38000, 5),
    (null, 2, 3, 'Jesus', 'Lopez', 'Ayudante de tienda', CURDATE(), 12000, 6),
    (null, 3, null, 'Victor', 'Lopez', 'Mecanico jefe', CURDATE(), 50000, 2),
    (null, 4, null, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8),
    (null, 5, null, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 6000, 2),
    (null, 6, null, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1),
    (null, 6, 8, 'Luis', 'Lopez', 'Ayudante de tienda', CURDATE(), 10000, 10);


#clientes
INSERT INTO clientes VALUES (null, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Imprenta Martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Jesus Colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

#encargos
INSERT INTO encargos VALUES (null, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES (null, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES (null, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES (null, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES (null, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES (null, 6, 6, 1, CURDATE());