<?php


if (file_exists("database.json")){
    $string = file_get_contents("database.json");
    $arrayListToDo = json_decode($string,true);
} else {
    $arrayListToDo = [];
}

// $arrayListToDo = [ 
//         [
//             "task" => "HTML" ,
//             "todo" => true,
//         ],
//         [
//             "task" => "CSS" ,
//             "todo" => true,
//         ],
//         [
//             "task" => "JS" ,
//             "todo" => true,
//         ],
//         [
//             "task" => "PHP" ,
//             "todo" => false,
//         ],
//         [
//             "task" => "LARAVEL" ,
//             "todo" => false,
//         ],
//     ];
   

    

    if(isset($_POST["newTodo"])){
        $newTaskToDo = [
            "task" =>  $_POST["newTodo"],
            "todo" => false
        ];

        $arrayListToDo[] = $newTaskToDo;

        $myString = json_encode($arrayListToDo);
        file_put_contents("database.json", $myString);
    }

    
    header("Content-Type: application/json");
    
    
    echo json_encode($arrayListToDo);


    //  $json_string = json_encode($_POST["newTodo"]);


    // file_get_contents('arrayListToDo.json');
    //  file_put_contents('_POST["newTodo"].json', $json_string);