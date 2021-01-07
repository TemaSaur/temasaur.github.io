window.onload = () => {
	
	let cursor;
	if (! mobile()) {
		cursor = document.querySelector("#cursor");
	} else {
		cursor = null;
	}

	const hover = document.querySelectorAll(".js-cursor-hover, .link, .ts-git");
	const block = 200, k = 50, url = window.location.href;

	let height = document.body.offsetHeight;
	let width = document.body.offsetWidth;

	// try {setPlanetPosition(height)} catch {}

	setPlanetPosition(height, url);

	addStars(width, height, block, k);
	setPlanetPosition(height, url);

	window.onresize = () => {
		updateStars(width, height, block, k);
		
		height = document.body.offsetHeight;
		width = document.body.offsetWidth;
		
		// try {getTextHeight(height)} catch {}
	};

	const sun = document.querySelector(".ts-sun");
	if (sun) {
		sun.onclick = () => {
			setTimeout(() => {removeHash();}, 5)
		}
	}
	
	onmousemove = e => {
		if (! mobile())
			cursorMove(cursor, e)
		moveStars(e, k);
	};
	

	document.onclick = () => {
		if (! mobile())
			cursorExpand(cursor)
	}

	if (! mobile()) {
		hover.forEach(i => {
			i.onmouseover = () => {
				cursorChange(cursor);
			}
			i.onmouseout = () => {
				cursorBack(cursor)
			}
		})
	}
	
}

function removeHash() {
	history.replaceState('', document.title, window.location.pathname)
}

function mobile() {
	let a = /Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)
	if (a) {document.querySelector("#cursor").style.display = "none"}
	return a;
}