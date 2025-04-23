<?php
require_once 'init.php';

function loadPortfolioData() {
    $json_data = file_get_contents('data/portfolio.json');
    return json_decode($json_data, true);
}

function renderHeader() {
    $dati = loadPortfolioData();
    include 'includes/header.php';
}

function renderFooter() {
    $dati = loadPortfolioData();
    include 'includes/footer.php';
}

function validateContactForm() {
    $errors = [];
    $fields = ['name', 'email', 'subject', 'message'];
    
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = 'Questo campo è obbligatorio';
        }
    }
    
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !isset($errors['email'])) {
        $errors['email'] = 'Inserisci un indirizzo email valido';
    }
    
    return $errors;
}

function getProjectById($id) {
    $dati = loadPortfolioData();
    foreach ($dati['portfolio'] as $progetto) {
        if ($progetto['id'] == $id) {
            return $progetto;
        }
    }
    return null;
}