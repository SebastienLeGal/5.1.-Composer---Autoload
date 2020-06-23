<?php

// Ton code est sur un repo personnel sur github.
// Ton arborescence correspond à ce qui a été demandé dans le challenge
// Ton composer.json contient une section autoload avec la déclaration de ton namespace racine App\
// Ton fichier index.php instancie et utilise un objet App\Wcs\Hello

namespace App\Wcs\Hello;

spl_autoload_register(function ($class) {
    require '../src/' . str_replace('Wcs\\', '', $class) . '.php';
});

$hello = new \Wcs\Hello();