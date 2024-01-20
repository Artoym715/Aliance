const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dilog");


const lightModeOn = (event) => {
	navbar.classList.add("navber-light");
	logo.href.baseVal = "img/sprite.svg#logo";
}

const lightModeOff = (event) => {
	navbar.classList.remove("navber-light");
	logo.href.baseVal = "img/sprite.svg#logo-light";
}

const openMenu = (event) => { // Открытие меню 
	menu.classList.add("is-open"); // Вешает класс is-open
	mMenuToggle.classList.add("close-menu");
	document.body.style.overflow = "hidden"; // Запрещаем прокрутку страницы
	lightModeOn();
};

const closeMenu = (event) => { // Закрытие меню 
	menu.classList.remove("is-open"); // Удаляет класс is-open
	mMenuToggle.classList.remove("close-menu");
	document.body.style.overflow = ""; // Разрешаем  прокрутку страницы
	lightModeOff();
};


window.addEventListener("scroll", () => {
	this.scrollY > 1 ? lightModeOn() : lightModeOff();
});
mMenuToggle.addEventListener("click", (event) => {
	event.preventDefault();
	menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiper = new Swiper('.features-slider', {
	// Optional parameters
	slidesPerView: 5,

	// Navigation arrows
	navigation: {
		nextEl: '.slider-button-next',
		prevEl: '.slider-button-prev',
	},
	// Responsive breakpoints
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 1,
		},
		// when window width is >= 576px
		576: {
			slidesPerView: 2,
		},
		// when window width is >= 768px
		768: {
			slidesPerView: 3,
		},
		// when window width is >= 1024px
		1024: {
			slidesPerView: 4,
		},
		// when window width is >= 1200px
		1200: {
			slidesPerView: 5,
		}
	},

});

const swiperSteps = new Swiper('.steps-slider', {
	// Optional parameters
	slidesPerView: 4,
	spaceBetween: 10,
	// Navigation arrows
	navigation: {
		nextEl: '.steps-button-next',
		prevEl: '.steps-button-prev',
	},
	// Responsive breakpoints
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 1,
		},
		// when window width is >= 576px
		425: {
			slidesPerView: 1,
		},
		// when window width is >= 576px
		576: {
			slidesPerView: 1,
		},
		// when window width is >= 768px
		768: {
			slidesPerView: 3,
		},
		// when window width is >= 1024px
		1024: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		// when window width is >= 1200px
		1200: {
			slidesPerView: 3,
			spaceBetween: 0,
		}
	},
});


const swiperBlog = new Swiper('.blog-slider', {
	// Optional parameters
	slidesPerView: 2,

	// Navigation arrows
	navigation: {
		nextEl: '.blog-button-next',
		prevEl: '.blog-button-prev',
	},
	// Responsive breakpoints
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 1,
		},
		// when window width is >= 576px
		576: {
			slidesPerView: 1,
		},
		// when window width is >= 768px
		768: {
			slidesPerView: 1,
		},
		// when window width is >= 1024px
		1024: {
			slidesPerView: 1,
		},
		// when window width is >= 1200px
		1200: {
			slidesPerView: 2,
			spaceBetween: 30
		}
	},

});

document.addEventListener("click", event => {
	if (
		event.target.dataset.toggle == "modal" || event.target.parentNode.dataset.toggle == "modal" ||
		!event.composedPath().includes(modalDialog) && modal.classList.contains("is-open")
	) {
		event.preventDefault();
		modal.classList.toggle("is-open");
	}
});
document.addEventListener("keyup", (event) => {
	if (event.key == "Escape" && modal.classList.contains("is-open")) {
		modal.classList.toggle("is-open");
	}
});