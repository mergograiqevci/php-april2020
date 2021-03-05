var canvas = document.getElementById('game');
var context = canvas.getContext('2d');
var grid = 16;
var count = 0;
var snake = {
  x: 160,
  y: 160,

  dx: grid,
  dy: 0,

  cells: [],
  maxCells: 4
};

var fruti = {
  x: 320,
  y: 320
};

var score = 0;
document.getElementById('score').innerHTML = 0;
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function loop() {
  requestAnimationFrame(loop);

  if (++count < 6) {
    return;
  }
  count = 0;
  context.clearRect(0, 0, canvas.width, canvas.height);

  snake.x += snake.dx;
  snake.y += snake.dy;

  if (snake.x < 0) {
    snake.x = canvas.width - grid;
  }
  else if (snake.x >= canvas.width) {
    snake.x = 0;
  }

  if (snake.y < 0) {
    snake.y = canvas.height - grid;
  }
  else if (snake.y >= canvas.height) {
    snake.y = 0;
  }

  snake.cells.unshift({ x: snake.x, y: snake.y });

  if (snake.cells.length > snake.maxCells) {
    snake.cells.pop();
  }

  context.fillStyle = 'yellow';
  context.fillRect(fruti.x, fruti.y, grid - 1, grid - 1);
  context.fillStyle = 'blue';
  snake.cells.forEach(function (cell, index) {

    context.fillRect(cell.x, cell.y, grid - 1, grid - 1);

    if (cell.x === fruti.x && cell.y === fruti.y) {
      snake.maxCells++;
      fruti.x = getRandomInt(0, 25) * grid;
      fruti.y = getRandomInt(0, 25) * grid;
      score += 10;
      document.getElementById('score').innerHTML = score;
    }

    for (var i = index + 1; i < snake.cells.length; i++) {

      if (cell.x === snake.cells[i].x && cell.y === snake.cells[i].y) {
        snake.x = 160;
        snake.y = 160;
        snake.cells = [];
        snake.maxCells = 4;
        snake.dx = grid;
        snake.dy = 0;
        fruti.x = getRandomInt(0, 25) * grid;
        fruti.y = getRandomInt(0, 25) * grid;
        document.getElementById('score').innerHTML = 0;
        score = 0;
      }
    }
  });
}

document.addEventListener('keydown', function (e) {

  if (e.which === 37 && snake.dx === 0) {
    snake.dx = -grid;
    snake.dy = 0;
  }
  else if (e.which === 38 && snake.dy === 0) {
    snake.dy = -grid;
    snake.dx = 0;
  }
  else if (e.which === 39 && snake.dx === 0) {
    snake.dx = grid;
    snake.dy = 0;
  }
  else if (e.which === 40 && snake.dy === 0) {
    snake.dy = grid;
    snake.dx = 0;
  }
});

// Ndalimi i scroll te faqes me arrow keys (up ose down)
var keys = {};
window.addEventListener("keydown",
    function(e){
        keys[e.keyCode] = true;
        switch(e.keyCode){
            case 37: case 39: case 38:  case 40: // Arrow keys
            case 32: e.preventDefault(); break; // Space
            default: break; // do not block other keys
        }
    },
false);
window.addEventListener('keyup',
    function(e){
        keys[e.keyCode] = false;
    },
false);

requestAnimationFrame(loop);