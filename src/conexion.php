<?php
// Verifica si se han enviado datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $lada = $_POST["lada"];
    $telefono = $_POST["telefono"];
    $pais = $_POST["pais"];
    $genero = $_POST["genero"];
    $extra = $_POST["extra"];
    $comentarios = $_POST["comentarios"];
    $extra_text = $_POST["extra_text"];

    $extras = "";
    if(isset($_POST['extra'])){
        $opcionesSeleccionadas = $_POST['extra'];
        echo "Las opciones seleccionadas son: ";
        foreach($opcionesSeleccionadas as $opcion){
            echo "$opcion <br>";
            $extras = $extras . $opcion . ", ";
        }
    } else {
        echo "No se ha seleccionado ninguna opción.";
    }

    $extras = $extras . $extra_text;

    $extra = $extras;
    
    // Ruta al archivo .env
    $dotenv_path = __DIR__ . '/.env';

    // Verificar si el archivo .env existe
    if (file_exists($dotenv_path)) {
        // Leer el contenido del archivo .env
        $dotenv_content = file_get_contents($dotenv_path);

        // Separar el contenido en líneas
        $lines = explode(PHP_EOL, $dotenv_content);

        // Recorrer cada línea
        foreach ($lines as $line) {
            // Ignorar líneas vacías o comentarios
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }

            // Separar la línea en la clave y el valor
            list($key, $value) = explode('=', $line, 2);

            // Asignar la variable de entorno
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }

    // Acceder a las variables de entorno y aplicar trim() para eliminar caracteres no deseados
    $hostname = trim($_ENV["HOST"]);
    $dbName = trim($_ENV["DATABASE"]);
    $username = trim($_ENV["USERNAME"]);
    $password = trim($_ENV["PASSWORD"]);
    $ssl = trim($_ENV["MYSQL_ATTR_SSL_CA"]);

    // Establecer la conexión a la base de datos utilizando mysqli
    $conn = mysqli_init();
    mysqli_ssl_set($conn, NULL, NULL, $ssl, NULL, NULL);
    mysqli_real_connect($conn, $hostname, $username, $password, $dbName);

    // Verificar si la conexión tiene éxito
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Preparar la sentencia SQL
    $sql = "INSERT INTO Contacto (nombre, lada, telefono, pais, genero, extra, comentarios) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar la declaración
    $stmt = mysqli_prepare($conn, $sql);

    
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "sssssss", $nombre, $lada, $telefono, $pais, $genero, $extra, $comentarios);

    // Ejecutar la declaración
    if (mysqli_stmt_execute($stmt)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../contacto.html?enviado=true");
    exit();

} else {
    // Si no se han enviado datos mediante POST, mostrar un mensaje de error o redireccionar a otra página
    echo "Error: No se han enviado datos.";
}

?>
