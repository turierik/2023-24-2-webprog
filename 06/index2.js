const canvas = document.querySelector('canvas')
const ctx = canvas.getContext('2d')

// Feladatok:
// 1. minden labda működjön :)
// 2. canvasre kattintáskor a kattintás helyén jelenjen meg egy új labda, random r és szín
// 3. a canvas aljáról pattanjon vissza a leeső labda

canvas.addEventListener('click', function(e){
    balls.push({
        x: e.clientX,
        y: e.clientY,
        r: Math.floor(10 + 10 * Math.random()),
        c: `rgb(${255 * Math.random()}, ${255 * Math.random()}, ${255 * Math.random()} )`,
        vy: 0,
        ay: 0.0001
    })
})

const balls = [
    {
        x: 200,
        y: 50,
        r: 20,
        c: 'red',
        vy: 0,
        ay: 0.0001
    },
    {
        x: 50,
        y: 30,
        r: 15,
        c: 'blue',
        vy: 0,
        ay: 0.0001
    }
]

function update(dt){
    for (const ball of balls){
        ball.y += ball.vy * dt

        if (ball.y + ball.r > canvas.height && ball.vy > 0)
            ball.vy = -ball.vy
        else
            ball.vy += ball.ay * dt
    }
}

function render(){
    ctx.clearRect(0, 0, canvas.width, canvas.height)
    for (const ball of balls){
        ctx.beginPath()
        ctx.arc(ball.x, ball.y, ball.r, 0, 2*Math.PI)
        ctx.fillStyle = ball.c
        ctx.fill()
    }
}

let last = performance.now()

function gameLoop(){
    const now = performance.now()
    const dt = now - last
    last = now
    update(dt)
    render()
    requestAnimationFrame(gameLoop)
}

gameLoop()