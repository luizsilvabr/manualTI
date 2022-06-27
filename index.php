<?php
require_once('includes/head.php');
require_once('configs/database.php');
?>
<div class="content p-5">
    <div class="card">
        <div style="background-color: #00bdc0;" class="text-center p-2 mb-4">
            <h2 style="color: #FFF"><b>Pesquisar Manual</b></h2>
        </div>
        <div class="inputSearch px-5 py-3">
            <form id="pesquisa">
                <input class="form-control" id="pesquisaManual" type="text" placeholder="Pesquise por um Manual..." name="pesquisaManual">
            </form>
            <div class="text-end mt-3"><small><b style="background-color: #00bdc0; color: #fff; padding: 5px 20px; border-radius: 3px" id="result">Faça uma Pesquisa...</b></small></div>
            <hr>
        </div>
        <div id="search_results" class="row px-5">
        </div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>