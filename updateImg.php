<?php
require_once('includes/head.php');
require_once('configs/database.php');
?>
<div class="content">
    <div class="container">
        <div class="card p-5 mt-5">
            <div class="text-center">
                <h2><b>Atualizar Manual</b></h2>
            </div>
            <hr>
            <?php
            if (isset($_GET['id'])) {
                $id = mysqli_escape_string($connect, $_GET['id']);
                $sql = "SELECT * FROM teste WHERE id = '$id'";
                $result = mysqli_query($connect, $sql);
                $arr = mysqli_fetch_assoc($result);
            }
            ?>
            <div class="text-center">
                <form action="configs/actionsImg" method="POST" enctype="multipart/form-data">
                    <img src="assets/imgs/imgDatabase/<?= $arr['img'] ?>" width="250">
                    <input name="id" type="hidden" value="<?= $id ?>">
                    <div class="mb-4 mt-2">
                        <label for="formFile" class="form-label">Selecione uma Imagem</label>
                        <input class="form-control" name="arquivo" required type="file" id="formFile">
                    </div>
                    <button type="submit" name="update" class="btn btn-success px-5">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>