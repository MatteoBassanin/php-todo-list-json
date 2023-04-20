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
</head>
<body>
    

<div id="app">
    <ul>
        <li v-for="todo in arrayList" :class="(todo.todo == true) ? 'done' : '' ">{{todo.task}}</li>
    </ul>
    <input type="text" v-model="addToDo">
    <button type="button" class="btn btn-primary" @click="addToDoList">Aggiungi alla Lista</button>



</div>




<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>