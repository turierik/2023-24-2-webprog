const table = document.querySelector("table");

function increase(e) {
    if (!e.target.matches("td")) return;

    e.target.innerText = parseInt(e.target.innerText) + 1;
}

table.addEventListener("click", increase);

function delegate(parent, type, selector, handler) {
    parent.addEventListener(type, function (event) {
        const targetElement = event.target.closest(selector);

        if (this.contains(targetElement)) {
            handler.call(targetElement, event);
        }
    });
}

delegate(table, "mouseover", "tr", function(){
    this.style.backgroundColor = 'orange'
})

delegate(table, "mouseout", "tr", function(){
    this.style.backgroundColor = ''
})
