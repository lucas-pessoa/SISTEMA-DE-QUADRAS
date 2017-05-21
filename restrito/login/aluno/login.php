<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acesso Restrito - Aluno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/login.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <!--<img id="profile-img" class="profile-img-card" src="avatar_2x.png" />-->
            <h1 class="text-center">Aluno</h1>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputRA" name="RA" class="form-control" placeholder="R.A." required autofocus>
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar senha
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Acessar</button>
            </form>
            <a href="#" class="forgot-password">Esqueceu sua senha?</a>
            <hr>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastre-se</button>
        </div>
    </div>
</body>
</html>
