<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

<div id="app">
    <div class="container d-flex justify-content-center">
        <div class="ms_wrapper">
            <h1 class="text-center">Todo List</h1>
            <ul class="list-group ">
                <li class="list-group-item d-flex justify-content-between" v-for="(todo,index) in arrayList" :class="(todo.todo == true) ? 'done' : '' " @click="toogleClass(todo)">
                    <span class="ms_text_description">{{todo.task}}</span>
                    <span><i class="fa-solid fa-trash ms_icon" @click="removeTask(index)"></i></span>
                </li>
            </ul>
            <div class="ms_wrapper_input mt-3">
                <input type="text" v-model="addToDo" class="px-4">
            </div>
            <div class="ms_button_wrapper mt-3">
                <button type="button" class="btn btn-primary px-5" @click="addToDoList">Aggiungi alla Lista</button>
            </div>
        </div>

    </div>



</div>




<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>