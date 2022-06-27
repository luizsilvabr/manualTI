<?php
require_once('configs/database.php');
require_once('includes/head.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM manual WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="content px-5">
    <div class="card mt-5 mb-5">
        <div style="background-color: #00bdc0;" class="text-center p-2">
            <h2 style="color: #FFF"><b>Atualizar Manual</b></h2>
        </div>
        <form class="p-2" action="configs/controller.php" method="POST">
            <div class="form-group mb-4 mt-4 px-3">
                <input type="hidden" name="id" value="<?= $id ?>">
                <h5 for="exampleInputTitulo" class="form-label"><b>Título:</b></h5>
                <input name="titulo" id="exampleInputTitulo" value="<?= $row['titulo'] ?>" placeholder="insira o título..." type="text" class="form-control">
                <small>Insira um título para o manual</small>
            </div>
            <div class="form-group mb-4 mt-4 px-3">
                <h5 for="exampleInputSubitulo" class="form-label"><b>Subtítulo:</b></h5>
                <input name="subtitulo" id="exampleInputSubitulo" value="<?= $row['subtitulo'] ?>" placeholder="insira o subtítulo..." type="text" class="form-control">
                <small>Insira um subtítulo para o manual</small>
            </div>
            <textarea required name="items" id="summernote"><?= $row['items'] ?></textarea>
            <div class="col-md-12 text-center mt-4 mb-3"><button name="update" class="btn btn-success px-5">Enviar</button></div>
            <hr>
        </form>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>