let t = [6, 5, 3, 10, 0, 7, -3]
let u = []

for (let i = 0; i < t.length; i++){
    if (t[i] % 2 === 0){
        // u.push(t[i])
        u[u.length] = t[i]
    }
}

u = []
for (const el of t){
    if (el % 2 === 0){
        u.push(el)
    }
}

function isEven(n){
    return n % 2 === 0;
}

u = t.filter(isEven)

u = t.filter(n => n % 2 === 0)

console.log(u)

// Feladat: tömb köbre emelése
// 1. for
// 2. for-of
// 3. tömbfüggvény

// Köbre emelés:
// n * n * n
// Math.pow(n, 3)
// n ** 3

u = []
for (let i = 0; i < t.length; i++)
    u.push(t[i] ** 3)

u = []
for (const el of t)
    u.push(el ** 3)

u = t.map(n => n ** 3)

console.log(u)

let people = [
    {
        name: "Béla",
        year: 2025,
        married: true
    },
    {
        name: "Józsi",
        year: 1937,
        married: false
    },
    {
        name: "Kata",
        year: 2001,
        married: true
    },
    {
        name: "Gabi",
        year: 1996,
        married: false
    },
]

// Egy nem házas ember neve
console.log(
    people.find(p => !p.married).name
)

// Mikor született a legfiatalabb ember?
console.log(
    Math.max(...people.map(p => p.year))
)