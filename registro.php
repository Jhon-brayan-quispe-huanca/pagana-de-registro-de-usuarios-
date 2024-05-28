<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="envoltura">
        <form action="./includes/registrar-inc.php" method="get">
            <h1>Registrarse</h1>
            <div class="input-box">
                <input type="text" name = "user" placeholder= "Usuario">
            </div>
            <div class="input-box">
                <input type="email" name = "email" placeholder= "Correo electronico">
            </div>
            <div class="input-box">
                <input type="password" name = "pwd" placeholder= "Contraseña">
            </div>
            <div class="input-box">
                <input type="password" name = "pwdrepeat" placeholder= "Repita la Contraseña">
            </div>
            <div>
                <div class="terminos">
                    <input type="checkbox" name=""id=""><a href="#">terminos y condicones </a>
                </div>
            </div>
            <button type= "submit" name="submit">REGISTRAR</button>
            <div class="resgistrado">
                <p>¿ Ya tienes una cuenta ? <a href="#">Ingresa a   qui</a></p>
            </div>
        </form>
    </div>
</body>
</html>