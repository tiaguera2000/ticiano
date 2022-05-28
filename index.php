<?php
$user = new \App\Repositories\UserRepository();
    if(isset($_POST["login"])){
        if($user->authenticate($_POST["email"])) echo "logou";
        else echo "não logou";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./App/Style/style.css">
    <?php require_once("./App/Style/style.php") ?>
    <title>Projeto</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12"></div>
            <div class="col-sm-4 col-12">
                <h1 class="text-center">Seja bem vindo</h1>
                <h3 class="text-center">Informe seu email</h3>
                <form method="post">
                    <input id="input" class="form-control" type="email" name="email" required>
                    <button class="btn btn-success" name="login">Entrar</button>
                    <button class="btn btn-primary">Meu primeiro acesso</button>
                </form>
            </div>
            <div class="col-sm-4 col-12"></div>
            
        </div>
    </div>
</body>
<?php require_once("./Views/Template/footer.php"); ?>

</html>