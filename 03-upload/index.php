<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <?php
        if(isset($_POST['enviar-formulario'])):
            $formatosPermitidos = array('png', 'jpg', 'jpeg', 'gif');

            // var_dump($_FILES);
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            for($i = 0; $i < count($_FILES['arquivos']['name']); $i++):
                $extensao = pathinfo($_FILES['arquivos']['name'][$i], PATHINFO_EXTENSION);
                if(in_array($extensao, $formatosPermitidos)):
                    $dir = "arquivos/";
                    $tmp = $_FILES['arquivos']['tmp_name'][$i];
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($tmp, $dir.$novoNome)):
                        echo "Upload feito com sucesso para $dir$novoNome! <br>";
                    else:
                        echo "Erro ao enviar o arquivo $tmp. <br>";
                    endif;
                else:
                    echo "$extensao não é permitido! <br>";
                endif;
            endfor;
        endif;
    ?>

    <!-- Formulário para obter os dados -->
    <!-- em action é enviado os dados para o script correspondente -->
    <form method="POST" enctype="multipart/form-data">
        <label for="arquivos[]">
            Arquivos:
            <!-- entrada dos arquivos -->
            <input type="file" name="arquivos[]" id="arquivos" multiple>
        </label>
        <br>
        <!-- botão que submete os dados -->
        <input type="submit" name="enviar-formulario" value="Enviar">
    </form>
</body>
</html>