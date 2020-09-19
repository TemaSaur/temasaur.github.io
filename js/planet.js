setPlanetPosition = (height, url) => {

	if (url.indexOf("about") * url.indexOf("projects") * url.indexOf("contact") < 0) {
		return;
	}

	const txtBlock = document.querySelector(".ts-txt-wrap");
	const footer = document.querySelector(".ts-footer-planet");

	if (txtBlock.clientHeight + 100 > height) {
		// block too big
		
		footer.style.position = "relative";
		return
	}
	footer.style.position = "absolute";
	return
}