<?php
require_once 'init.php';
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
        
        header('Location: index.php?success=1#contact');
        exit;
    } else {
        $_SESSION['form_data'] = $_POST;
        $_SESSION['form_errors'] = $errors;
        header('Location: index.php#contact');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}