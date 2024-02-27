const a = document.querySelector("#a")
const b = document.querySelector("#b")
const button = document.querySelector("button")
const output = document.querySelector("p")

function calculate(){
    output.innerText = parseFloat(a.value) + parseFloat(b.value)
}

button.addEventListener("click", calculate)
