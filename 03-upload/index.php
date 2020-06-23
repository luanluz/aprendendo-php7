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
            // Tipos de arquivos que serão permitidos
            $formatosPermitidos = array('png', 'jpg', 'jpeg', 'gif');

            // var_dump($_FILES);

            // Percorrendo o array de arquivos
            for($i = 0; $i < count($_FILES['arquivos']['name']); $i++):
                // Obtendo a tipo do arquivo do arquivo enviado
                $extensao = pathinfo($_FILES['arquivos']['name'][$i], PATHINFO_EXTENSION);

                // Se o arquivo enviado for do tipo de arquivo autorizado
                // salvará o arquivo 
                if(in_array($extensao, $formatosPermitidos)):
                    // Definindo o diretório onde salvará os arquivos
                    $dir = "arquivos/";
                    // Definindo um nome temporário para o arquivo
                    $tmp = $_FILES['arquivos']['tmp_name'][$i];
                    // Definindo um novo nome único para o arquivo
                    $novoNome = uniqid().".$extensao";

                    // Movendo o arquivo para o diretório com o novo nome
                    if(move_uploaded_file($tmp, $dir.$novoNome)):
                        // Imprimindo a mensagem de sucesso
                        echo "Upload feito com sucesso para $dir$novoNome! <br>";
                    else:
                        // Imprimindo mensagem de erro
                        echo "Erro ao enviar o arquivo $tmp. <br>";
                    endif;
                else:
                    // Informando que o arquivo não é aceito
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