<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

    <div id="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Logo camiseta"/>
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>

        <!-- MENU -->
        <nav id ="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoría</a>
                </li>
                <li>
                    <a href="#">Categoría</a>
                </li>
                <li>
                    <a href="#">Categoría</a>
                </li>
            </ul>
        </nav>
        
        <div id="content">

            <!-- BARRA LATERAL -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar en la web</h3>
                    <form action="" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>

                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>

                        <input type="submit" value="Enviar"/>
                    </form>
                    <ul>
                        <li>
                            <a href="#">Mis pedidos</a>
                        </li>
                        <li>
                            <a href="#">Gestionar pedidos</a>
                        </li>
                        <li>
                            <a href="#">Gestionar categorías</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- CONTENIDO CENTRAL -->
            <main id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 Euros</p>
                    <a class="button" href="">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 Euros</p>
                    <a class="button" href="">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 Euros</p>
                    <a class="button" href="">Comprar</a>
                </div>

            </main>

        </div>

        <!-- FOOTER -->
        <footer id="footer">
            <p>Desarrollado por Anthoox &copy; <?=date('Y')?></p>
        </footer>
        </div>
    </body>
</html>