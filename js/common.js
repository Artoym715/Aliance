const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
window.addEventListener("scroll", () => {
	if (this.scrollY > 1) {
		navbar.classList.add("navber-light");
		logo.href.baseVal = "img/sprite.svg#logo";
	} else {
		navbar.classList.remove("navber-light");
		logo.href.baseVal = "img/sprite.svg#logo-light";
	}
});