<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../css/login.css"/>
    <title>Inicia Sesión</title>
</head>
<body class="main_login">
    <main class="login">
        <header>
            <nav class="desktop">
                <ul>
                    <li><a href="../index.html" target="_self">Inicio</a></li>
                    <li><a class="active" href="#">Hacer pedido ya</a></li>
                    <li><a href="./adminlogin.php">Administrador</a></li>
                </ul>
            </nav>
        </header>
        <section class="login_section">
            <img src="../res/user.login.png" alt="ilustración-iniciar-sesión" width="40%" draggable="false">
            <section class="login_section-form">
                <form action="">
                    <h2>Inicia sesión</h2>
                    <input id="inputPrueba" type="text" placeholder="Ingrese su nombre" />
                    <input type="text" placeholder="Ingrese el usuario asignado a su mesa" />
                    <input type="password" placeholder="Ingrese el pin de acceso asignado a su mesa" />
                    <button type="submit">Entrar</button>
                </form>
            </section>
        </section>
    </main>
    <footer class="login_footer">
        <p>HTML CSS JS - Proyecto Programación de Computadores -Universidad Nacional de Colombia</p>
    </footer>
    <script>
        let input = document.getElementById("inputPrueba");
        console.log(input);
    </script>
    <?php
    ?>
</body>
</html>