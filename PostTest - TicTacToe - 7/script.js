let scoreboard = []
let switching = 0
let won = 0
let isi = 0

function darkMode()
{
    document.getElementById("body").classList.toggle("darkMode")
    for (let i = 0; i < 9; i++) {
        document.getElementById(i).classList.toggle("darkBox")
        document.getElementById(i).classList.toggle("lightBox")
    }
}

function XorO() {
    console.log("ping")
    if (switching == 0) {
        console.log("pong")
        switching = 1
        return "X";
    }
    else {
        console.log("prank")
        switching = 0
        return "O";
    }
}
function reset(){
    scoreboard = []
    for (let i = 0; i < 9; i++) {
        document.getElementById(i).textContent =""
    }
    if(won == 1)
    {
        document.getElementById("win").classList.toggle("hidden")
    }
    won = 0;
    isi = 0;
    switching = 0;
    document.getElementById("win").textContent= "Selamat! Anda Menang!"
}
function move(index) {
    if (won != 1) {
        if (scoreboard[index] != undefined) {
            return;
        }
        else {
            let item = XorO()
            document.getElementById(index).textContent = item
            scoreboard[index] = item
            console.log(scoreboard)
            isi = isi +1
        }

        ////////////////////////////////////////////////////////////////////
        //TIE
        if (isi == 9) {
            console.log("3248973289473289")
            const elem = document.getElementById("win")
            elem.textContent = "Seri!"
            elem.classList.toggle("hidden")
            won = 1
            return
        }
        ///
        ///Horizontal
        if (scoreboard[0] === scoreboard[1] && scoreboard[1] === scoreboard[2]) {
            if (scoreboard[0] == undefined || scoreboard[1] == undefined || scoreboard[2] == undefined) {
                
            }
            else {

                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        else if (scoreboard[3] === scoreboard[4] && scoreboard[4] === scoreboard[5]) {
            if (scoreboard[3] == undefined || scoreboard[4] == undefined || scoreboard[5] == undefined) {
                
            }
            else {

                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        else if (scoreboard[6] === scoreboard[7] && scoreboard[7] === scoreboard[8]) {
            if (scoreboard[6] == undefined || scoreboard[7] == undefined || scoreboard[8] == undefined) {
                
            }
            else {

                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        ///
        ///Vertical
        else if (scoreboard[0] === scoreboard[3] && scoreboard[3] === scoreboard[6]) {
            if (scoreboard[0] == undefined || scoreboard[3] == undefined || scoreboard[6] == undefined) {

            }
            else {

                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        else if (scoreboard[1] === scoreboard[4] && scoreboard[4] === scoreboard[7]) {
            if (scoreboard[1] == undefined || scoreboard[4] == undefined || scoreboard[7] == undefined) {

            }
            else {
                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        else if (scoreboard[2] === scoreboard[5] && scoreboard[5] === scoreboard[8]) {
            if (scoreboard[2] == undefined || scoreboard[5] == undefined || scoreboard[8] == undefined) {

            }
            else {
                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        ///
        ///Diagonal
        else if (scoreboard[0] === scoreboard[4] && scoreboard[4] === scoreboard[8]) {
            if (scoreboard[0] == undefined || scoreboard[4] == undefined || scoreboard[8] == undefined) {

            }
            else {
                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
        else if (scoreboard[2] === scoreboard[4] && scoreboard[4] === scoreboard[6]) {
            if (scoreboard[2] == undefined || scoreboard[4] == undefined || scoreboard[6] == undefined) {

            }
            else {
                const elem = document.getElementById("win")
                elem.classList.toggle("hidden")
                won = 1
            }
        }
    }
}
