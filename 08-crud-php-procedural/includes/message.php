<?php

// Inicia sessão
session_start();

// Verifica se existe mensagem na sessão
if ( isset($_SESSION['mensagem']) ): ?>
    <script>
        window.onload = () =>
            M.toast({html: '<?= $_SESSION['mensagem'] ?>'});
    </script>
<?php endif;

// Limpa sessão
session_unset();

?>