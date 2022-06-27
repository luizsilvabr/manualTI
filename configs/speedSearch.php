<?php
    require_once('database.php');
    $query = "SELECT * FROM manual WHERE titulo like '%".$_POST['value']."%' ORDER BY id ASC;";
    $result = mysqli_query($connect, $query);
    $verfy = 1;
    while ($rowSearch = mysqli_fetch_array($result)) { ?>
        <a class="manualCard" id="search_results" href="manual?id=<?= $rowSearch['id'] ?>">
            <div style="box-shadow: rgb(50 50 93 / 43%) 0px 1px 6px -1px, rgb(0 0 0 / 20%) 0px 1px 3px -1px" class="col-md-12 mb-4 px-4 py-4 rounded row">
                <div class="col-md-12">
                    <span style="font-size: 20px; font-weight: bold;"><?= $rowSearch['titulo'] ?></span>
                    <hr>
                </div>
                <div class="col-md-9 mb-2">
                    <div style="margin-left:1px; margin-top: 4px">
                        <small>
                            <i class="fas fa-calendar-alt"></i>&nbsp;
                            <?php
                            $newDate = date("d/m/y", strtotime($rowSearch['data']));
                            echo $newDate;
                            ?>
                        </small>
                    </div>
                    <p style="font-size: 15px; margin-top: 15px;margin-left:4px ;border-left:2px solid; padding-left: 5px; margin-bottom:0"><?= $rowSearch['subtitulo'] ?></p>
                </div>
                <div class="col-md-3 d-flex justify-content-end align-items-end mb-2">
                    <div><span class="circle rounded-circle px-2 py-1 bg-dark"><i class="fas fa-user text-white"></i></span>&nbsp;<small"><?= $rowSearch['criadoPor'] ?></small></div>
                </div>
            </div>
        </a>
    <?php } ?>