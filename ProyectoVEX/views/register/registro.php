<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Entrenador</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/fav-robot.ico">
    <link rel="stylesheet" href="../../assets/css/styles_registro.css">
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="left">
            <img src="../../assets/img/logo.png" alt="Logo" />
        </div>
        <div class="center">
            <h1>Título de la Organización</h1>
        </div>
        <div class="right">
            <a href="../../views/index/Index.html" class="btn-header">Regresar a inicio</a>
        </div>
    </header>

    <!-- CONTENEDOR PRINCIPAL -->
    <section class="container">

        <!-- COLUMNA FORMULARIO -->
        <div class="form-section">

            <div class="form-card">
                <h2>Crea una cuenta </h2>

                <form action="../../controllers/control_registro.php" method="POST">
                    <!--Direcciona el flujo hacia control_registro-->
                    <label>Nombre</label>
                    <input type="text" name="nombre" required>

                    <label>Apellido paterno</label>
                    <input type="text" name="ap_paterno" required>

                    <label>Apellido materno</label>
                    <input type="text" name="ap_materno" required>

                    <label>Sexo</label>
                    <select name="sexo" required>
                        <option value="">Seleccione</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>

                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Contraseña</label>
                    <input type="password" name="password" required>

                    <button type="submit" class="btn-registrar">Registrarse</button>

                </form>
            </div>

        </div>


        <!-- COLUMNA EXPLICATIVA -->
        <div class="info-box">
            <h2>Bienvenido entrenador</h2>
            <p>
                Registra tu cuenta para gestionar tus equipos, participar en competencias
                y acceder a herramientas diseñadas para potenciar tu rendimiento dentro
                del ecosistema robótico.
            </p>
        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        <div>
            <h3>Legal</h3>
            <ul>
                <li>Aviso legal</li>
                <li>Privacidad</li>
                <li>Cookies</li>
            </ul>
        </div>

        <div>
            <h3>Redes</h3>
            <ul>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>YouTube</li>
            </ul>
        </div>

        <div>
            <h3>Información</h3>
            <ul>
                <li>Contacto</li>
                <li>Soporte</li>
                <li>FAQs</li>
            </ul>
        </div>
    </footer>

</body>
</html>
