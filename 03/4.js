const input = document.querySelector("input")
const table = document.querySelector("table")

// for (let i = 0; i < 20; i++){
//     const tr = document.createElement("tr")
//     for (let j = 0; j < 20; j++){
//         const td = document.createElement("td")
//         tr.appendChild(td)
//     }
//     table.appendChild(tr)
// }
table.innerHTML =
    Array(20).fill(0).map(() => `<tr>${
        Array(20).fill(0).map(() => `<td></td>`).join("")
    }</tr>`).join("")

function paint(e){
    if (!e.target.matches("td")) return;
    if (e.type == "click" || (e.type == "mousemove" && e.buttons === 1))
        e.target.style.backgroundColor = input.value
}

table.addEventListener("click", paint)
table.addEventListener("mousemove", paint)
 