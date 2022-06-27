<?php
require_once('configs/database.php');
require_once('includes/head.php');
?>
<div class="content px-5">
    <div class="card mt-5 mb-5">
        <div style="background-color: #00bdc0;" class="text-center p-2">
            <h2 style="color: #FFF"><b>Gerenciar Manuais</b></h2>
        </div>
        <div class="p-4">
            <table class="table border shadow-sm table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Criado Por</th>
                        <th scope="col">Criado Em</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM manual ORDER BY id";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="text-center align-middle">
                            <th scope="row"><?= $row['id'] ?></th>
                            <td><?= $row['titulo'] ?></td>
                            <td><?= $row['criadoPor'] ?></td>
                            <td><?= $row['data'] ?></td>
                            <td>
                                <div>
                                    <a class="btn btn-warning" href="atualizarManual?id=<?= $row['id'] ?>"><img src="assets/imgs/pen.png" width="20"></a>
                                    <a class="btn btn-danger" href="configs/controller?id=<?= $row['id'] ?>&action=delete"><img src="assets/imgs/trash.png" width="20"></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>