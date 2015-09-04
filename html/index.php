<?php
session_start();

require_once('../includes/helpers.php');

// determine which page to render
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 'index';

// show page
switch ($page) 
{
case 'index':
    render('templates/header', array());
    render('index');
    render('templates/footer');
    break;

case 'main_menu':
    render('templates/header', array('title' => 'Main Menu'));
    render('menu');
    render('templates/footer');
    break;

case 'contact':
    render('templates/header', array('title' => 'Contact'));
    render('contact');
    render('templates/footer');
    break;
}

?>

