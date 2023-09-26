-- Es recomendable hacer las tablas que no tienen relaciones con otras para que no de error y dejar las que tienen relaciones al final
-- El engine permite mantener la integridad referencial y que las claves ajenas fucionen perfectamente. Es mejor indicarlo. Da soporte de transaciones. Aumenta el rendimiento si la 
-- aplicacion tiene muchas consultas de insertar y modificar. 
-- Tambien esta el Myisan? y da mas velocidad pero es mejor para las que hacen muchos select pero no mantiene la integridad referencial

CREATE TABLE usuarios(
    id              int(255) auto_increment not null,
    nombre          varchar(100) not null,
    apellidos       varchar(100) not null,
    email           varchar(255) not null,
    clave           varchar(255) not null,
    fecha           date not null,
    CONSTRAINT pk_usuario PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
) ENGINE=InnoDB;


CREATE TABLE categorias(
    id              int(255) auto_increment not null,
    nombre          varchar(100) not null,
    CONSTRAINT pk_categoria PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    categoria_id    int(255) not null,
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT null,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categorias FOREIGN KEY(categoria_id)  REFERENCES categorias(id) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- Se puede indicar que cuando se borre algo tb se borre el registro con el que esta relacionado ESTO ES EL CASCADE, es mejor indicar cascade directamente
-- ON DELETE SET NULL, cuando se borre la categoria el campo que tiene ese id se pone en null. sI NO QUEREMOS QUE NO HAGA NADA SE PONE NO ACTION.
