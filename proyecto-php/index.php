<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>
            <!-- MENU    -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 4</a>
                    </li>
                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix">
                 <!--Para que limpie lo flotado  -->
            </div>
        </header>
        
        <main id="contenedor">
            <!-- SIDEBAR -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>

                        <label for="password">Contraseña</label>
                        <input type="text" name="password"/>

                        <input type="submit" value="Entrar"/>
                    </form>
                </div>

                <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <form action="registro.php" method="POST">
                        <label for="name">Nombre</label>
                        <input type="text" name="name"/>

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos"/>

                        <label for="email">Email</label>
                        <input type="email" name="email"/>

                        <label for="password">Contraseña</label>
                        <input type="text" name="password"/>

                        <input type="submit" value="Registrar"/>
                    </form>
                </div>

            </aside>

            <!-- CAJA PRINCIPAL -->
            <div class="principal">
                <h1>
                    Ultimas entradas
                </h1>
                <article class="entrada">
                <a href="">
                        <h2>
                            Titulo de mi entrada
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </a>
                </article>
                <article class="entrada">
                <a href="">
                        <h2>
                            Titulo de mi entrada
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>
                            Titulo de mi entrada
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </a>
                </article>
                <article class="entrada">
                <a href="">
                        <h2>
                            Titulo de mi entrada
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </a>
                </article>
                <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
            </div>
            
            <div class="clearfix">
                 <!--Para que limpie lo flotado  -->
            </div>
        </main>
        
        <!-- PIE DE PAGINA -->
        <footer id="pie">
            <p>
                Desarrollado por anthoox &copy 2023
            </p>
        </footer>
    </body>
</html>