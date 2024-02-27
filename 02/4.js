const animals = ["vaddisznó", "mókus", "sertés", "mangalica", "macska", "tengerimalac", "kutya", "Róka"]

const ul = document.querySelector("ul")

for (const animal of animals){
    const li = document.createElement("li")
    li.innerText = animal
    ul.appendChild(li)
}

ul.innerHTML = animals.map(animal => `<li>${animal}</li>`).join('')