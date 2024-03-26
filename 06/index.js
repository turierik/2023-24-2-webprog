const canvas = document.querySelector('canvas')
const ctx = canvas.getContext('2d')

ctx.fillStyle = 'orange'
ctx.fillRect(80, 100, 90, 60)

ctx.strokeStyle = 'blue'
ctx.lineWidth = 4
ctx.strokeRect(40, 60, 70, 80)

ctx.font = '16px Arial'
ctx.fillText('HÉTFŐ ESTE VAN', 20, 20)

ctx.fillStyle = 'yellow'
ctx.beginPath()
ctx.moveTo(100, 100)
ctx.lineTo(150, 100)
ctx.lineTo(150, 150)
// ctx.lineTo(100, 100)
ctx.closePath()
ctx.fill()