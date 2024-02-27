// ESEMÉNYKEZELÉS TUTORIÁL

// 1. kigyűjteni minden elemet, ami részt vesz (pl. bemenet, kimenet, trigger)
const p = document.querySelector("p")
const button = document.querySelector("button")

// 2. mi történjen? - egy fv.
function succ(){
    p.innerText = parseInt(p.innerText) + 1
}

// 3. eseményfigyelő regisztrálása
button.addEventListener("click", succ)
