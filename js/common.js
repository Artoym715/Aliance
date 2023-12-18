const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
	if (this.scrollY > 1) {
		navbar.classList.add("navber-light");
	} else {
		navbar.classList.remove("navber-light");
	}
});