<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = validateContactForm();
    
    if (empty($errors)) {
        $nome = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $messaggio = htmlspecialchars($_POST['message']);
        $data = date('Y-m-d H:i:s');
        
        $dati_contatto = "Data: $data\nNome: $nome\nEmail: $email\nArgomento: $subject\nMessaggio: $messaggio\n\n";
        
        file_put_contents('data/contatti.txt', $dati_contatto, FILE_APPEND);
        
        header('Location: index.php?success=1');
        exit;
    } else {
        $query = http_build_query([
            'error' => 1,
            'error_name' => isset($errors['name']) ? 1 : null,
            'error_email' => isset($errors['email']) ? ($errors['email'] === 'Inserisci un indirizzo email valido' ? 'invalid' : 1) : null,
            'error_subject' => isset($errors['subject']) ? 1 : null,
            'error_message' => isset($errors['message']) ? 1 : null,
        ]);
        
        header("Location: index.php#$query");
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>