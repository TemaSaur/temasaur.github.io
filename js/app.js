window.onload = () => {
	const cursor = document.querySelector("#cursor");
	const hover = document.querySelectorAll(".js-cursor-hover")
	const block = 250, k = 50, url = window.location.href;

	let height = document.body.offsetHeight;
	let width = document.body.offsetWidth;

	// try {setPlanetPosition(height)} catch {}

	setPlanetPosition(height, url);

	addStars(width, height, block, k);

	window.onresize = () => {
		updateStars(width, height, block, k);
		
		height = document.body.offsetHeight;
		width = document.body.offsetWidth;
		
		setPlanetPosition(height, url);
		// try {getTextHeight(height)} catch {}
	};

	const sun = document.querySelector(".ts-sun");
	if (sun) {
		sun.onclick = () => {
			setTimeout(() => {removeHash();}, 5)
		}
	}
	
	onmousemove = e => {
		cursorMove(cursor, e)
		moveStars(e, k);
	};

	document.onclick = () => {
		cursorExpand(cursor)
	}

	hover.forEach(i => {
		i.onmouseover = () => {
			cursorChange(cursor);
		}
		i.onmouseout = () => {
			cursorBack(cursor)
		}
	})
	
}

function removeHash() {
	history.replaceState('', document.title, window.location.pathname)
}