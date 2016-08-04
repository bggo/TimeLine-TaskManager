<?php
session_start();
include('formidable/autoload.php');

// Formidable will parse the form and use it to check integrity
// on the server-side
$form = new Gregwar\Formidable\Form('index.html');

$form->handle(function() {
    echo "Form OK!";
}, function($errors) {
    echo "Errors: <br/>";
    foreach ($errors as $error) {
        echo "$error<br />";
    }
});

echo $form;