const button = document.querySelector("button")
//const body = document.querySelector("body")
const p = document.querySelector("p")

let last = null

function changeBgColor(e){
    document.body.style.backgroundColor = 'yellow'
    console.log(e)
    if (last === null){
        p.innerText = "Várom a második kattintást..."
    } else {
        p.innerText = (e.timeStamp - last.timeStamp) / 1000
    }
    last = e
}

button.addEventListener("click", changeBgColor)
