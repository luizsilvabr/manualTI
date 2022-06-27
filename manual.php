<?php
require_once('configs/database.php');
require_once('includes/head.php');
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $query = "SELECT * FROM manual WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="content px-5">
    <div class="card mt-5 mb-5">
        <div style="background-color: #00bdc0;" class="text-center p-2">
            <h2 style="color: #FFF"><b><?= $row['titulo'] ?></b></h2>
        </div>

        <div class="m-2 p-2 row">
            
            <div class="col-md-12">
                <hr><?= $row['items'] ?>
                <hr>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
                <div><i class="fas fa-calendar-alt"></i>&nbsp;<?php $newDate = date("d/m/y", strtotime($row['data']));
                                                                echo $newDate; ?>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-end">
                <div><span class="circle rounded-circle px-2 py-1 bg-dark"><i class="fas fa-user text-white"></i></span>&nbsp;<small"><?= $row['criadoPor'] ?></small></div>
            </div>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>