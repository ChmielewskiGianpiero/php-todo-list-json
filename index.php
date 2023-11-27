<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id='app'>
        <main>
            <section>
                <div class='container'>
                    <h1>TO DO LIST</h1>
                    <input type="text" placeholder='inserisci la task' v-model='newTodo' @keyup.enter='addTodo'>
                    <ul>
                        <li v-for='(todo,i) in todos' :key='i' :class='{done: todo.done}'>
                            {{ todo.text }}
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>