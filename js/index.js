const slideLeft = () => {
	var slider = document.getElementById("carousel-div");
	slider.scroll({
		left: slider.scrollLeft - 300,
		behavior: "smooth",
	});
};

const slideRight = () => {
	var slider = document.getElementById("carousel-div");
	slider.scroll({
		left: slider.scrollLeft + 300,
		behavior: "smooth",
	});
};
