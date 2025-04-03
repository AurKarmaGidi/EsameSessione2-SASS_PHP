<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $messaggio = htmlspecialchars($_POST['message']);
    $data = date('Y-m-d H:i:s');
    
    $dati_contatto = "Data: $data\nNome: $nome\nEmail: $email\nMessaggio: $messaggio\n\n";
    
    file_put_contents('data/contatti.txt', $dati_contatto, FILE_APPEND);
    
    header('Location: index.php?success=1');
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>