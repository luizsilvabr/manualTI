<?php
require_once('configs/database.php');
require_once('includes/head.php');
?>
<div class="content px-5">
    <div class="card mt-5 mb-5">
        <div style="background-color: #00bdc0;" class="text-center p-2">
            <h2 style="color: #FFF"><b>Adicionar Manual</b></h2>
        </div>
        <form class="px-4" action="configs/controller.php" method="POST">
            <div class="form-group mb-4 mt-4 px-3">
                <h5 for="exampleInputTitulo" class="form-label"><b>Título:</b></h5>
                <input name="titulo" id="exampleInputTitulo" placeholder="insira o título..." type="text" class="form-control">
                <small>Insira um título para o manual</small>
            </div>
            <div class="form-group mb-4 mt-4 px-3">
                <h5 for="exampleInputSub" class="form-label"><b>Subtítulo:</b></h5>
                <input required name="subtitulo" id="exampleInputSub" placeholder="insira o subtítulo..." type="text" class="form-control">
                <small>Insira um subtítulo para o manual</small>
            </div>
            <div style="background-color:inherit; box-shadow: none" class="form-control">
                <h5 class="form-label"><b>Manual:</b></h5>
                <textarea required name="items" id="summernote"></textarea>
            </div>
            <div class="col-md-12 text-center mt-4 mb-3"><button name="add" class="btn btn-success px-5">Enviar</button></div>
        </form>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>