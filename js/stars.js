let starsdiv, X, Y, H;

addStars = (width, height, block, k) => {
	height = document.body.offsetHeight;
	H = window.innerHeight;
	width = document.body.offsetWidth;

	starsdiv = document.querySelector("#ts-stars");
	starsdiv.innerHTML = "";

	for (let y = 0; y < height / block; ++y) {
		for (let x = 0; x < width / block; ++x) {
			let id = `${y}_${x}`
			starsdiv.innerHTML +=
				`<span class="ts-circle ts-star" id="${id}"></span>`;

			document.getElementById(`${id}`).style.left = `${Math.min(
				x * block + Math.random() * block,
				width - (width / k) - 5
			)}px`;
			
			document.getElementById(`${id}`).style.top = `${Math.min(
				y * block + Math.random() * block,
				height - (height / k) - 5
			)}px`;
		}
	}
}

updateStars = (width, height, block, k) => {
	let newWidth = document.body.offsetWidth;
	let newHeight = document.body.offsetHeight;
	
	if (Math.floor(newHeight / block) != Math.floor(height / block)
	|| Math.floor(newWidth / block) != Math.floor(width / block))
		addStars(newWidth, newHeight, block, k); 
}


moveStars = (e, k) => {
	let x = e.clientX - window.innerWidth / 2;
	// let x = e.clientX - document.body.offsetWidth / 2;
	let y = e.clientY - window.innerHeight / 2;

	starsdiv.style.transform = `translate(${x / k}px, ${y / k}px)`;
}