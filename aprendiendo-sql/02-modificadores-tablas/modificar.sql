# RENOMBRAR UNA TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR EL NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) null;

# MODIFICAR COLUMNA PERO SI MODIFICAR SU NOMBRE #
ALTER TABLE usuarios_renom MODIFY apellido CHAR(50) NOT NULL;

# AÑADIR COLUMNA A LA TABLA #
ALTER TABLE usuarios_renom ADD website VARCHAR(100) NULL;

# AÑADIR RESTRICCIÓN A COLUMNA # 
-- hacer que un campo sea unico
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR UNA COLUMNA #
ALTER TABLE usuarios_renom DROP  website;