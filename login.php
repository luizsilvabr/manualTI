<?php
session_start();
unset($_SESSION['nomeUsuario'], $_SESSION['sobrenomeUsuario']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/iziToast.min.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="titleSection">
            <div class="text-center">
                <img src="assets/imgs/lpnet-logo.png" width="300px">
                <span class="titleLogin">Manual TI</span>
            </div>
        </div>
        <div class="inputSection">
            <form action="configs/login/loginValidate" method="post">
                <h1 class="text-center mb-5"><b>Bem Vindo!</b></h1>
                <input type="text" name="usuario" required class="form-controlP mb-5" placeholder="Username:">
                <input type="password" name="senha" required class="form-controlP mb-5" placeholder="Senha:">
                <input type="checkbox">
                <label for="manterLogado"><b>Manter Logado</b></label>
                <?php if (isset($_SESSION['msg'])) { ?>
                    <div class="errorLogin mt-3">
                        <ul>
                            <p><b>
                            <?php 
                            if($_SESSION['msg'] == "Erro ao Efetuar Login...") {
                                echo "Usuário ou Senha Incorretos!"; }
                            else if($_SESSION['msg'] == "Atenção!"){
                                echo "Você Precisa Estar Logado <br> para acessar está página!";
                            } ?>
                            </b></p>
                        </ul>
                    </div>
                <?php } ?>
                <div class="centerButton">
                    <button type="submit" class="btn btn-personLogin mt-4">Entrar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/iziToast.min.js"></script>
    <script>
        <?php if (isset($_SESSION['msg'])) { ?>
            var description = '<?php print $_SESSION['msg'] ?>'
            if (description == '') {
                pass
            } else {
                if (description.includes('Erro')) {
                    iziToast.error({
                        id: 'error',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }else if (description.includes('Sucesso')){
                    iziToast.success({
                        id: 'success',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }else if (description.includes('Atenção')){
                    iziToast.warning({
                        id: 'warning',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }
            }
        <?php
        unset($_SESSION['msg']);
        } ?>
    </script>
</body>

</html>