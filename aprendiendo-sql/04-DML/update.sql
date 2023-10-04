#MODIFICAR FILAS/ACTUALIZAR DATOS#
-- modificar la fecha de un usuario
UPDATE usuarios SET fecha='2020-10-2' WHERE email='prueba@prueba.com';
UPDATE usuarios SET nombre='admin', apellidos='admin' WHERE email='prueba@prueba.com';

#TODAS ESTAS CONDICIONES QUE SE USAN EN CONSULTAS SELECT SE PUEDEN USAR PARA UPDATE#