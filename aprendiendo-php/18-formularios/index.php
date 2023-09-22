<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>
            Formulario
        </h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre</label>
            <p><input type="text" name="nombre" placeholder="Tu nombre" autofocus="autofocus"></p>
            <label for="apellido">Apellido</label>
            <p><input type="text" name="apellido" placeholder="Tu apellido en mayus" maxlength="5" minlength="3" pattern="[A-Z]+"><br/></p>
            <label for="prueba">prueba</label>
            <p><input type="text" name="prueba" placeholder="Tu apellido" disabled="disabled"></p>
            
            <label for="boton">Butón</label>
            <p><input type="button" name="boton" value="clicame" ></p>

            <label for="sexo">Sexo</label>
            <p>
                <input type="checkbox" name="sexo" value="Hombre" checked="checked">
                <input type="checkbox" name="sexo" value="Mujer">
            </p>

            <label for="color">Color</label>
            <p><input type="color" name="color" placeholder="Tu apellido"></p>

            <label for="fecha">Fecha</label>
            <p><input type="date" name="fecha"></p>

            <label for="correo">Correo</label>
            <p><input type="email" name="correo"></p>

            <label for="archivo">Archivo</label>
            <p><input type="File" name="archivo" multiple="multiple"></p>

            <label for="hidden">hidden</label>
            <p><input type="hidden" name="hidden"></p>

            <label for="pass">Contraseña</label>
            <p><input type="password" name="pass"></p>

            <label for="continente">Continente</label>
            <p>
                America del sur<input type="radio" value="america del sur">
                Europa<input type="radio" value="europa">
                Asia<input type="radio" value="asia">
            </p>

            <textarea >

            </textarea>
            <br>
            Peliculas:
            <select name="peliculas">
                <option value="ironman">Ironman</option>
                <option value="seven">Seven</option>
                <option value="rockandrola">RockandRola</option>
            </select>

            <br>
            <label for="url">url</label>
            <p><input type="url" name="url"></p>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>