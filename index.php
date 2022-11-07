<?php
    include "inc.twig.php";
    include "data.php";

    $template = $twig->load('index.html.twig');
    $data = new data();
    $utilisateurs = $data->getData();
    
    echo $twig->render('index.html.twig', [
        'utilisateurs' => $utilisateurs
    ]);
    