<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Seja bem-vindo(a) de volta.</h1>
            <img src="arvore.svg" class="left-login-image" alt="Arvore">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Email</label>
                        <input type="text" name="usuario" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button onclick="window.location.href = 'teste.php'" type="submit" class="btn-login">Login</button>
                <button onclick="window.location.href = 'registro.php'" class="btn-cadastro">Ainda não tem conta? Cadastre-se</button>
            </div>
        </div>
    </div>
</body>
</html>
