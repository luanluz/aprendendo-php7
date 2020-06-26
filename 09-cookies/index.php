<?php
// Cookie ser para o servidor salvar
// dados na máquina do cliente

// Criando cookie
// Função que recebe a chave, o valor,
// e o tempo de validade em segundos
setcookie('user', 'Luan Luz', time() + 3600);
setcookie('cor', 'Azul', time() + 3600);

// Removendo cookie
// Altera o time para o valor negativo
setcookie('cor', 'Azul', time() - 3600);

// Imprimindo todos os cookies do site
print_r($_COOKIE);