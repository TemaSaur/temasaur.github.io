window.onload = () => {
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

	onmousemove = e => moveStars(e, k);
}