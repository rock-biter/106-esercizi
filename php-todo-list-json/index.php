<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To do List</title>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="./css/app.css">
</head>

<body>

  <div id="app">
    <main>
      <section>
        <div class="container">
          <h1>{{ title }}</h1>
        </div>
        <div class="container">
          <input @keyup.enter="storeTodo" v-model="newTodo" type="text" placeholder="Nuova todo">
        </div>
      </section>

      <section>
        <div class="container">
          <ul class="todos">
            <li class="todos__item" :class="{
              done: todo.done
            }" v-for="(todo ,i) in todos" :key="i">
              <span>
                {{ todo.text }}
              </span>
              <span @click="destroyTodo(i)">
                elimina
              </span>
            </li>
          </ul>
        </div>
      </section>
    </main>
  </div>


  <script src="./js/app.js"></script>

</body>

</html>