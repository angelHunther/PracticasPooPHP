<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-register {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }
        .btn-register:hover {
            background-color: #218838;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .close {
            color: red;
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Usuarios</h2>
        <button class="btn-register" onclick="openModal()">Registrar Usuario</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once 'autoload.php';
                $objUsuario = new Usuario();
                $usuarios = $objUsuario->getUsuarios();
                foreach ($usuarios as $usuario) {
                    echo "<tr>
                            <td>{$usuario['idUsuario']}</td>
                            <td>{$usuario['nombre']}</td>
                            <td>{$usuario['cel']}</td>
                            <td>{$usuario['correo']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3>Registrar Usuario</h3>
            <form action="controlador.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre" required><br><br>
                <input type="tel" name="telefono" placeholder="Teléfono" required><br><br>
                <input type="email" name="email" placeholder="Email" required><br><br>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
    
    <script>
        function openModal() {
            document.getElementById("registerModal").style.display = "flex";
        }
        function closeModal() {
            document.getElementById("registerModal").style.display = "none";
        }
    </script>
</body>
</html>