const cursorMove = (cursor, e) => {
	let y = Math.min(e.pageY, document.body.scrollHeight - 25)
	let x = Math.min(e.pageX, document.body.scrollWidth - 25)
	let a = `top: ${y}px; left: ${x}px;`;
	cursor.setAttribute("style", a)
}

const cursorChange = (cursor) => {
	cursor.classList.add("mouseover");
}

const cursorBack = cursor => {
	cursor.classList.remove("mouseover")
}

const cursorExpand = cursor => {
	cursor.classList.add("expand");
	setTimeout(()=>{cursor.classList.remove("expand")}, 500)
}