    <!-- footer -->
    <div class="footer">
        Desenvolvido por: &nbsp;<a href="https://intranet.lpnet.com.br/social/perfil/827" target="blank">Luíz Felipe</a>
    </div>
    <!-- end footer -->

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/iziToast.min.js"></script>
    <!-- SummerNote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- ---------- -->
    <script>
        $(document).ready(function() {
            $("#summernote").summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['style', 'color', 'bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph', 'table', 'hr']],
                    ['picture', ['picture', 'link', 'video']],
                    ['fontname', ['fontname', 'fontsize', 'fontsizeunit']],
                    ['font', ['height', 'strikethrough', 'superscript', 'subscript']],
                    ['strikethroug', ['strikethroug']],
                    ['supercript', ['supercript']],
                    ['undo', ['undo', 'redo']],
                    ['help', ['codeview', 'help']],
                ]
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <script>
        <?php if (isset($_SESSION['msg'])) { ?>
            var description = '<?php print $_SESSION['msg'] ?>'
            if (description == '') {
                pass
            } else {
                if (description.includes('Seja')) {
                    iziToast.success({
                        id: 'success',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                } else {
                    iziToast.error({
                        id: 'error',
                        title: description,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }
            }

        <?php
            unset($_SESSION['msg']);
        }
        if (isset($_SESSION['returnItems'])) { ?>
            var controller = '<?php print $_SESSION['returnItems'] ?>'
            if (controller == '') {
                pass
            } else {
                if (controller.includes('Sucesso')) {
                    iziToast.success({
                        id: 'success',
                        title: controller,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                } else {
                    iziToast.error({
                        id: 'error',
                        title: controller,
                        position: 'bottomRight',
                        timeout: 9000
                    });
                }
            }
        <?php
            unset($_SESSION['returnItems']);
        } ?>
    </script>

    <!-- JQuery - Para pesquisa Dinâmica -->
    <script type="text/javascript">
        $(function() {
            $("#pesquisa").keyup('submit', function() {
                var value = $('#pesquisaManual').val();
                $.post('configs/speedSearch.php', {
                    value: value
                }, function(data) {
                    $("#search_results").html(data);
                });
                return false;
            });
        });
        /*-- ------------------------------ --*/
        /*-- JQuery - Mostrar Pesquisa --*/
        var text = document.getElementById("pesquisaManual");
        var result = document.getElementById("result");
        var resultDefault = "Faça uma Pesquisa...";
        text.addEventListener("keyup", function() {
            var value = this.value;
            result.innerText = value !== "" ? value : resultDefault;
        })
        $(document).ready(function() {
            $("form").bind("keypress", function(e) {
                if (e.keyCode == 13) {
                    return false;
                }
            });
        });
    </script>
    <!-- end scripts -->
    </body>

    </html>