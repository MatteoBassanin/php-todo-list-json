<?php

$arrayListToDo = [
    [
        "HTML" => "Done",
        "CSS" => "Done",
        "JS" => "Done",
        "PHP" => "todo",
        "Laravel" => "todo",
    ]
    ];

    header("Content-Type: application/json");


    echo json_encode($arrayListToDo);