var game = document.getElementById("game");
var cells = game.getElementsByTagName("td");
var currentPlayer = "X";
var gameOver = false;
var filledCells = 0;
// Tic Tac Toe logika
for (var i = 0; i < cells.length; i++) {
    cells[i].addEventListener("click", function () {
        if (!gameOver && this.textContent === "") {
            this.textContent = currentPlayer;
            checkForWin();
            checkForDraw();
            if (currentPlayer === "X") {
                currentPlayer = "O";
            } else {
                currentPlayer = "X";
            }
            filledCells++;
        }
        
    });
}
// Ellenőrzi a nyertes sorokat
function checkForWin() {
    var winningCombinations = [[0, 1, 2], [3, 4, 5], [6, 7, 8], // sorok
    [0, 3, 6], [1, 4, 7], [2, 5, 8], // oszlopok
    [0, 4, 8], [2, 4, 6] // átlók
    ];
    for (var i = 0; i < winningCombinations.length; i++) {
        if (
            //3 cella egyenlő-e a currentPlayerrel(X/O)
            cells[winningCombinations[i][0]].textContent === currentPlayer &&
            cells[winningCombinations[i][1]].textContent === currentPlayer &&
            cells[winningCombinations[i][2]].textContent === currentPlayer
        ) {
            gameOver = true;
            alert(currentPlayer + " játékos nyer!");
        }
    }
}
function checkForDraw() {
    var filled = true;
    for (var i = 0; i < cells.length; i++) {
        if (cells[i].textContent === "") {
            filled = false;
            break;
        }
    }
    if (filled) {
        alert("Döntetlen!");
        gameOver = true;
    }
}


// Újrakezdés gomb eseménykezelése
var restart = document.getElementById("restart");
restart.addEventListener("click", function () {
    for (var i = 0; i < cells.length; i++) {
        cells[i].textContent = "";
    }
    currentPlayer = "X";
    gameOver = false;
});

