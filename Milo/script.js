// Code JS du lab : à rendre dynaimque avec connexion BDD pour la map

let maze = [
   [0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0],
   [0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0],
   [0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0],
   [0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0],
   [0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0],
   [1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0],
   [0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
   [0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0],
   [0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0],
   [0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0],
   [0, 1, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0],
   [0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 3],
]

const ROWS = 12
const COLS = 12




let player = [0, 0]
let bag = 0

const EMPTY = 0
const WALL = 1
const PLAYER = 2
const EXIT = 3
const TELEPORT = 10
const PASSED = 11
const EXIT_READY = 6
const DIAMOND = 4
const DIAMOND_COUNT = 12

const DOWN = 40
const UP = 38
const LEFT = 37
const RIGHT = 39

window.onload = () => {
   generateDiamond()
   createBoard()
   renderMaze()
}

function generateDiamond(){
   let count = 0

   do {
      let row = Math.floor(Math.random() * ROWS)
      let col = Math.floor(Math.random() * COLS)
      if (maze[row][col] === EMPTY &&
         row !== 0 && col !== 0 &&
         row !== ROWS - 1 && col !== COLS - 1) {
         maze[row][col] = DIAMOND
         count++
      }

   } while (count !== DIAMOND_COUNT)
}

function createBoard(){
   for (let row = 0; row < ROWS; row++) {
      for (let col = 0; col < COLS; col++) {
         const block = document.createElement('div')
         block.id = `id-${col}-${row}`
         document.querySelector(".board").appendChild(block);
      }
   }
}

function renderMaze(){
   var remainder = 0

   for (let row = 0; row < ROWS; row++) {
      for (let col = 0; col < COLS; col++) {
         let itemClass = ''
         switch (maze[row][col]) {
            case PLAYER:
               itemClass = 'player'; break
            case WALL:
               itemClass = 'wall'; break
            case PASSED:
               itemClass = 'passed'; break
            case EXIT:
               itemClass = 'exit'; break
            case EXIT_READY:
               itemClass = 'end'; break
            // case DIAMOND:
            //    itemClass = 'diamond'; break
            default:
               itemClass = 'empty'
               remainder += 1
            
         }
         const id = `#id-${col}-${row}`
         // document.getElementById(id).style.transform = ""
         // document.getElementById(id).style.transition = ""
         if (itemClass != "player"){
            document.querySelector(id).className = `block ${itemClass}`
         }

      }
   }
   console.log(remainder)

   if (remainder > 0) {
      document.querySelector('.info').textContent = 'Passez sur toutes les cases !'
   } else {
      maze[ROWS - 1][COLS - 1] = EXIT_READY
      maze[ROWS - 1][COLS - 1].itemClass = 'end' // ne marche pas ?
      document.querySelector('.info').textContent = "Bravo ! Go sur l'arrivée"
   }

   const id = `#id-${player[1]}-${player[0]}`
   // if (!(bag === DIAMOND_COUNT && player[1] === COLS - 1 && player[0] === ROWS - 1)) {
   //    document.querySelector(id).className = 'block player'
   // }
   if (!(remainder === 0 && player[1] === COLS - 1 && player[0] === ROWS - 1)) {
      document.querySelector(id).className = 'player'
      document.querySelector('.score').textContent = `Encore `+remainder+' case(s) !'
   }
   else {
      document.querySelector('.score').textContent = 'Vous avez toutes les cases !';
      document.querySelector(id).className = 'player bye'
      document.querySelector('.info').textContent = 'bye!'
   }
}

window.onkeydown = (event) => {
   switch (event.keyCode) {
      case DOWN:
         direction = DOWN; break
      case UP:
         direction = UP; break
      case LEFT:
         direction = LEFT; break
      case RIGHT:
         direction = RIGHT; break
      default:
         direction = 0
   }

   if (direction !== 0) {
      changePlayerPos(player[1],player[0],player[1],player[0],direction)
      // changePlayerPos(direction)
   }
}


//Version non anime qui marche TROP BIEN
function changePlayerPos(oldX, oldY, x, y, direction){
   
   let dy = 0
   let dx = 0

   // if (maze[y][x] === DIAMOND) {
   //    maze[y][x] = EMPTY
   //    bag++
   // }
   if (maze[y][x] !== (EXIT || EXIT_READY)) {
      maze[y][x] = PASSED
   }

   // console.log(x, y, dx, dy, direction)
   switch (direction) {
      case UP:
            dy -= 1;
         break;
      case RIGHT:
            dx += 1;
         break;
      case LEFT:
            dx -= 1;
         break;
      case DOWN:
            dy += 1;
         break;
      default:
         return state
   }
   x = x + dx
   y = y + dy
   player[y, x]
   // console.log(x, y, direction)
   if(x >= 0 && x < COLS && y >= 0 && y < ROWS && maze[y][x] !== WALL){
      // setTimeout(function() {changePlayerPos(x, y, direction);}, 90);
      changePlayerPos(oldX, oldY, x, y, direction);
   }
   else{
      switch (direction) {
         case UP:       
            y = y + 1
            obj = document.getElementsByClassName("player")[0]
            // console.log(obj)
            obj.style.transform = "translateY(-"+(35*(oldY-y))+"px)";
            obj.style.transition = "500ms ease-in-out";
            break;
         case RIGHT:
            x = x - 1
            obj = document.getElementsByClassName("player")[0]
            // console.log(obj)
            obj.style.transform = "translateX("+(-35*(oldX-x))+"px)";
            obj.style.transition = "500ms ease-in-out";
            break;
         case LEFT:
            x = x + 1
            obj = document.getElementsByClassName("player")[0]
            // console.log(obj)
            obj.style.transform = "translateX(-"+(35*(oldX-x))+"px)";
            obj.style.transition = "500ms ease-in-out";
            break;
         case DOWN:
            y = y - 1
            obj = document.getElementsByClassName("player")[0]
            // console.log(obj)
            obj.style.transform = "translateY("+(-35*(oldY-y))+"px)";
            obj.style.transition = "500ms ease-in-out";
            break;
      }
      // console.log(x,y)
      player = [y, x]
      // renderMaze()
      setTimeout(function() {renderMaze();}, 500);

   }
}


// //Version non animé qui marche mais moyen
// const changePlayerPos = (direction) => {
//    let [dy, dx] = [0, 0];
//    let x = 0
//    let y = 0
//    switch (direction) {
//       case UP:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dy -= 1; 
//             x = player[1] + dx
//             y = player[0] + dy         
//          }
//          y = player[0] + (dy+1)
//          break;
//       case RIGHT:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dx += 1; 
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          x = player[1] + (dx-1)
//          break;
//       case LEFT:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dx -= 1; 
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          x = player[1] + (dx+1)
//          break;
//       case DOWN:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dy += 1
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          y = player[0] + (dy-1)
//          break;
//       default:
//          return state
//    }
//    player = [y, x]

//    if (maze[y][x] === DIAMOND) {
//       maze[y][x] = EMPTY
//       bag++
//    }
//    renderMaze()
// }


// // Version animé qui marche pas <3
// const changePlayerPos = (direction) => {
//    let [dy, dx] = [0, 0];
//    let x = 0
//    let y = 0

//    let px = player[1]
//    let py = player[0]
//    // console.log(px,py)

//    let obj;
//    switch (direction) {
//       case UP:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dy -= 1; 
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          y = player[0] + (dy+1)

//          obj = document.getElementById("id-"+px+"-"+py+"");
//          console.log(obj)
//          console.log(obj.className === "player" )
//          // if ("player" in obj.classList){
//             obj.style.transform = "translateY("+(35*(dy+1))+"px)";
//             obj.style.transition = "330ms ease-in-out";
//          // }
//          break;


//       case RIGHT:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dx += 1; 
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          x = player[1] + (dx-1)

//          obj = document.getElementById("id-"+px+"-"+py+"");
//          console.log(obj)
//          console.log(obj.className === "player" )
//          if ("player" in obj.classList){
//             obj.style.transform = "translateX("+(35*(dx-1))+"px)";
//             obj.style.transition = "330ms ease-in-out";
//          }
//          break;


//       case LEFT:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dx -= 1; 
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          x = player[1] + (dx+1)

//          obj = document.getElementById("id-"+px+"-"+py+"");
//          console.log(obj)
//          console.log(obj.className === "player" )
//          if ("player" in obj.classList){
//             obj.style.transform = "translateX("+(35*(dx+1))+"px)";
//             obj.style.transition = "330ms ease-in-out";
//          }
//          break;


//       case DOWN:
//          while(x >= 0 && x < COLS && y >= 0 && y < ROWS &&maze[y][x] !== WALL){
//             dy += 1
//             x = player[1] + dx
//             y = player[0] + dy
//          }
//          y = player[0] + (dy-1)

//          obj = document.getElementById("id-"+px+"-"+py+"");
//          console.log(obj)
//          console.log(obj.className === "player" )
//          if ("player" in obj.classList){
//             obj.style.transform = "translateY("+(35*(dy-1))+"px)";
//             obj.style.transition = "330ms ease-in-out";
//          // }
//          break;
//       default:
//          return state
//    }
//    player = [y, x]
//    renderMaze()
// }


// //Version mouvement 1 par 1
// const changePlayerPos = (direction) => {
//    let [dy, dx] = [0, 0];
//    switch (direction) {
//       case UP:
//          dy = -1; break;
//       case RIGHT:
//          dx = 1; break;
//       case LEFT:
//          dx = -1; break;
//       case DOWN:
//          dy = 1; break;
//       default:
//          return state
//    }
//    const x = player[1] + dx
//    const y = player[0] + dy

//    if (x >= 0 && x < COLS && y >= 0 && y < ROWS &&
//       maze[y][x] !== WALL) {
//       player = [y, x]

//       if (maze[y][x] === DIAMOND) {
//          maze[y][x] = EMPTY
//          bag++
//       }
//       renderMaze()
//    }
// }