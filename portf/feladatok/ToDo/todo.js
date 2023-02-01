const form = document.getElementById("add-todo-form");
const todoList = document.getElementById("todo-list");

form.addEventListener("submit", function(e) {
  e.preventDefault();
  const newTodo = document.getElementById("new-todo").value;
  addTodo(newTodo);
});

function addTodo(todo) {
  // létrehozunk egy új li elemet
  const newTodo = document.createElement("li");
  // beállítjuk az elem html tartalmát
  newTodo.innerHTML = todo;
  newTodo.addEventListener("click", function() {
    this.classList.toggle("completed");
  });
  //contextmenu a jobb click eseménykezelő
  newTodo.addEventListener("contextmenu", function(e) {
    e.preventDefault();
    this.remove();
  });
  // hozzáadjuk az li elemet a listához
  todoList.appendChild(newTodo);
  // töröljük a input mező tartalmát
  document.getElementById("new-todo").value = "";
}
