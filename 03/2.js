const ul = document.querySelector("ul")

function select(e){
    if (!e.target.matches("li"))
        return;
    e.target.classList.add("selected")
}

ul.addEventListener("click", select)
