

<?php
// Inicia a sessão
session_start();

// Destroi a sessão
session_destroy();

// Redireciona para a página de login
header("Location:../../../projeto/index/index.php");
exit;
?>