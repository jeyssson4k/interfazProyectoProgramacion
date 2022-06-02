<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../css/adminlogin.css"/>
    <title>Administrador de pedidos</title>
</head>
<body>
    <main>
        <header>
            <nav class="desktop">
                <ul>
                    <li><a href="../index.html" target="_self">Inicio</a></li>
                    <li><a href="./login.php">Hacer pedido ya</a></li>
                    <li><a class="active admin" href="#">Administrador</a></li>
                </ul>
            </nav>
        </header>
        <section class="login_section">
            <img src="../res/user.login.png" alt="ilustración-iniciar-sesión" width="40%" draggable="false">
            <section class="login_section-form">
                <form id="admForm" action="">
                    <h2>Adminitrador de pedidos</h2>
                    <input id="inputPrueba" type="text" name="id" placeholder="ID de administrador" />
                    <input type="password"  name="password" placeholder="Contraseña de administrador" />
                    <button type="submit" name="submit" id="send">Entrar</button>
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
    <script src="../js/main.js"></script>
    <script src="../js/form.js"></script>
    <?php
      /*
      Asignación de los valores ingresados por el usuario
      a través del método GET
      Llamado a la función operadores, además de asignación de
      sus parámetros de funcionamiento
      */
      if (isset($_GET["submit"])) {
        $val1 = $_GET["id"];
        $val2 = $_GET["password"];
        echo $val1,$val2;
      }
      ?>
</body>
</html>