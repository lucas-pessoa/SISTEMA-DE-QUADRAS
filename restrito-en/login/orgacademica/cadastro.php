<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acesso Restrito - Organização Acadêmica</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/orgacad.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <h4 class="text-center"><strong>Registration Form</strong></h3>
            <h4 class="text-center"><strong>to Academic Organizations</strong></h3>
            <hr>
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method="post" action="cadastrar.php">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Full name" required autofocus>
                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail address" required>
                <input type="text" id="CNPJ" name="CNPJ" class="form-control" placeholder="CNPJ" required> 
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
                <?php
                    $erro = (isset($_GET['erro']) ? $_GET['erro'] : null);
                    switch($erro){
                        case 1:
                            echo "<span class='erro'>The field full name is required.</span>";
                            break;
                        case 2:
                            echo "<span class='erro'>The field e-mail is required.</span>";
                            break;
                        case 3:
                            echo "<span class='erro'>The field CNPJ is required.</span>";
                            break;
                        case 4:
                            echo "<span class='erro'>This e-mail is already registered.</span>";
                            break;
                        case 5:
                            echo "<span class='erro'>This CNPJ is already registered.</span>";
                            break;
                        case 6:
                            echo "<span class='erro'>Registration problem. Contact us.</span>";
                            break;
                    }
                ?>
                <hr>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>