const clientListSlide = document.querySelectorAll(".p-clientList__slide");
if (clientListSlide[0]) {
	clientListSlide.forEach((el) => {
		const slider = new Swiper(el, {
			loop: true,
			slidesPerView: "auto",
			speed: 7000,
			allowTouchMove: false,
			autoplay: {
				delay: 0,
			},
		});
	});
}

const caseArchive = document.querySelectorAll(".p-caseArchive");
if (caseArchive[0]) {
	caseArchive.forEach((el) => {
		const slide = el.querySelector(".p-caseArchive__slide");
		const progressbar = el.querySelector(
			".p-caseArchive__pagination__line__fill"
		);
		const progressArrow = el.querySelector(".p-caseArchive__pagination__arrow");
		const prevEl = el.querySelector(".p-caseArchive__arrow.--prev");
		const nextEl = el.querySelector(".p-caseArchive__arrow.--next");
		const currentCount = el.querySelector(
			".p-caseArchive__pagination__count.--current"
		);
		const totalCount = el.querySelector(
			".p-caseArchive__pagination__count.--index"
		);
		totalCount.textContent = (
			"0" + slide.querySelectorAll(".p-caseArchive__slide__item").length
		).slice(-2);
		function updateCounter(swiper) {
			let currentIndex = swiper.realIndex + 1;
			currentCount.textContent = ("0" + currentIndex).slice(-2);
		}
		function updateProgressBar(swiper) {
			gsap.to(progressbar, {
				scaleX: 0,
				duration: 0,
				ease: "linear",
			});
			gsap.to(
				progressArrow,
				{
					x: 0,
					duration: 0,
					ease: "linear",
				},
				"<"
			);
			gsap.to(progressbar, {
				scaleX: 1,
				duration: 4,
				ease: "linear",
			});
			gsap.to(
				progressArrow,
				{
					x: "100%",
					duration: 4,
					ease: "linear",
				},
				"<"
			);
		}
		function initProgressBar(swiper) {
			gsap.to(progressbar, {
				scaleX: 1,
				duration: 4,
				ease: "linear",
			});
			gsap.to(
				progressArrow,
				{
					x: "100%",
					duration: 4,
					ease: "linear",
				},
				"<"
			);
		}

		const slider = new Swiper(slide, {
			loop: true,
			slidesPerView: "auto",
			allowTouchMove: true,
			navigation: {
				prevEl: prevEl,
				nextEl: nextEl,
			},
			speed: 700,
			autoplay: {
				delay: 4000,
			},
			on: {
				init: function () {
					updateCounter(this);
					initProgressBar(this);
				},
				slideChange: function () {
					updateCounter(this);
					updateProgressBar(this);
				},
			},
		});
	});
}

const postArchive = document.querySelectorAll(".p-postArchive");
if (postArchive[0]) {
	postArchive.forEach((el) => {
		const slide = el.querySelector(".p-postArchive__slide");
		const progressbar = el.querySelector(
			".p-postArchive__pagination__line__fill"
		);
		const progressArrow = el.querySelector(".p-postArchive__pagination__arrow");
		const prevEl = el.querySelector(".p-postArchive__slide__arrow.--prev");
		const nextEl = el.querySelector(".p-postArchive__slide__arrow.--next");
		const currentCount = el.querySelector(
			".p-postArchive__pagination__count.--current"
		);
		const totalCount = el.querySelector(
			".p-postArchive__pagination__count.--index"
		);
		totalCount.textContent = (
			"0" + slide.querySelectorAll(".p-postArchive__slide__item").length
		).slice(-2);
		function updateCounter(swiper) {
			let currentIndex = swiper.realIndex + 1;
			currentCount.textContent = ("0" + currentIndex).slice(-2);
		}
		function updateProgressBar(swiper) {
			gsap.to(progressbar, {
				scaleX: 0,
				duration: 0,
				ease: "linear",
			});
			gsap.to(
				progressArrow,
				{
					x: 0,
					duration: 0,
					ease: "linear",
				},
				"<"
			);
			gsap.to(progressbar, {
				scaleX: 1,
				duration: 4,
				ease: "linear",
			});
			gsap.to(
				progressArrow,
				{
					x: "100%",
					duration: 4,
					ease: "linear",
				},
				"<"
			);
		}
		function initProgressBar(swiper) {
			gsap.to(progressbar, {
				scaleX: 1,
				duration: 4,
				ease: "linear",
			});
			gsap.to(
				progressArrow,
				{
					x: "100%",
					duration: 4,
					ease: "linear",
				},
				"<"
			);
		}

		const slider = new Swiper(slide, {
			loop: true,
			slidesPerView: "auto",
			allowTouchMove: true,
			navigation: {
				prevEl: prevEl,
				nextEl: nextEl,
			},
			speed: 700,
			autoplay: {
				delay: 4000,
			},
			on: {
				init: function () {
					updateCounter(this);
					initProgressBar(this);
				},
				slideChange: function () {
					updateCounter(this);
					updateProgressBar(this);
				},
			},
		});
	});
}

const postArchive02 = document.querySelectorAll(".p-postArchive02");
if (postArchive02[0]) {
	postArchive02.forEach((el) => {
		const slide = el.querySelector(".p-postArchive02__slide");
		const prevEl = el.querySelector(".p-postArchive02__slide__arrow.--prev");
		const nextEl = el.querySelector(".p-postArchive02__slide__arrow.--next");
		const slider = new Swiper(slide, {
			loop: true,
			slidesPerView: "auto",
			allowTouchMove: true,
			navigation: {
				prevEl: prevEl,
				nextEl: nextEl,
			},
		});
	});
}

const tab = document.querySelectorAll(".p-tab");
if (tab[0]) {
	tab.forEach((el) => {
		const btns = el.querySelectorAll(".p-tab__button__item");
		const panels = el.querySelectorAll(".p-tab__panel__item");

		// let currentBtn = el.querySelector(".p-tab__button__item.--open");
		// let currentPanel = el.querySelector(".p-tab__panel__item.--open");
		btns.forEach((btn, index) => {
			btn.addEventListener("click", () => {
				if (btn.classList.contains("--open")) {
					btn.classList.remove("--open");
					panels[index].classList.remove("--open");
					gsap.to(panels[index], {
						height: 0,
						// autoAlpha: 0,
					});
				} else {
					let currentBtn = el.querySelector(".p-tab__button__item.--open");
					if (currentBtn) {
						currentBtn.classList.remove("--open");
						el.querySelector(".p-tab__panel__item.--open").classList.remove(
							"--open"
						);
					}
					btn.classList.add("--open");
					panels[index].classList.add("--open");
					gsap.to(panels[index], {
						height: "auto",
						// autoAlpha: 1,
					});
				}
			});
		});
	});
}

const headerHumberger = document.querySelector(".l-header__humberger");
if (headerHumberger) {
	const headerContents = document.querySelector(".l-header__contents");
	headerHumberger.addEventListener("click", () => {
		headerHumberger.classList.toggle("--open");
		if (headerHumberger.classList.contains("--open")) {
			headerContents.classList.add("--open");
		} else {
			headerContents.classList.remove("--open");
		}
	});
}

// const postSortItem = document.querySelectorAll(".p-postSort__item");
// if (postSortItem[0]) {
// 	postSortItem.forEach((el) => {
// 		const postSortButton = el.querySelector(".p-postSort__button");
// 		const postSortPanel = el.querySelector(".p-postSort__panel");
// 		postSortButton.addEventListener("click", () => {
// 			postSortButton.classList.toggle("--open");
// 			if (postSortButton.classList.contains("--open")) {
// 				gsap.to(postSortPanel, {
// 					height: "auto",
// 				});
// 			} else {
// 				gsap.to(postSortPanel, {
// 					height: 0,
// 				});
// 			}
// 		});
// 	});
// }
const postSort = document.querySelectorAll(".p-postSort");
if (postSort[0]) {
	postSort.forEach((el) => {
		const postSortButtons = el.querySelectorAll(".p-postSort__button");
		const postSortPanels = el.querySelectorAll(".p-postSort__panel");
		postSortButtons.forEach((button, index) => {
			button.addEventListener("click", () => {
				const openPanel = el.querySelector(".p-postSort__panel.--open");
				const openButton = el.querySelector(".p-postSort__button.--open");
				const panel = postSortPanels[index];

				if (openButton == button) {
					button.classList.remove("--open");
					openPanel.classList.remove("--open");
					gsap.to(panel, {
						height: 0,
					});
				} else if (openButton != button && openButton) {
					gsap.to(openPanel, {
						height: 0,
					});
					openButton.classList.remove("--open");
					openPanel.classList.remove("--open");

					button.classList.add("--open");
					panel.classList.add("--open");
					gsap.to(panel, {
						height: "auto",
					});
				} else {
					button.classList.add("--open");
					panel.classList.add("--open");
					gsap.to(panel, {
						height: "auto",
					});
				}
			});
		});
	});
}

const postSort02 = document.querySelectorAll(".p-postSort02");
if (postSort02[0]) {
	postSort02.forEach((el) => {
		const postSortButtons = el.querySelectorAll(".p-postSort02__button");
		const postSortPanels = el.querySelectorAll(".p-postSort02__panel");
		postSortButtons.forEach((button, index) => {
			button.addEventListener("click", () => {
				button.classList.toggle("--open");
				const panel = postSortPanels[index];
				if (button.classList.contains("--open")) {
					gsap.to(panel, {
						height: "auto",
					});
				} else {
					gsap.to(panel, {
						height: 0,
					});
				}
			});
		});
	});
}

const postLayout = document.querySelectorAll(".p-postLayout");
if (postLayout[0]) {
	postLayout.forEach((el) => {
		const paginations = el.querySelectorAll(".page-numbers");
		const buttons = el.querySelectorAll(".p-postLayout__button__item");
		const currentButton = el.querySelector(
			".p-postLayout__button__item.--current"
		);
		const target = el.querySelector(".p-postLayout__contents");

		let url = new URL(window.location.href);
		let params = url.searchParams;

		if (params.get("col")) {
			currentButton.classList.remove("--current");
			target.dataset.col = params.get("col");
			document
				.getElementById(`layoutButton${params.get("col")}`)
				.classList.add("--current");
			// paginations.forEach((item) => {
			// 	let href = item.getAttribute("href");
			// 	item.setAttribute("href", `${href}?col=${params.get("col")}`);
			// });
		}

		// 列数変更ボタンのクリックイベント
		buttons.forEach((button) => {
			button.addEventListener("click", () => {
				const currentButton = el.querySelector(
					".p-postLayout__button__item.--current"
				);
				const colNumber = button.dataset.col;
				if (button != currentButton) {
					currentButton.classList.remove("--current");
					button.classList.add("--current");
					target.dataset.col = colNumber;
				}
			});
		});
	});
}

const moive = document.querySelectorAll(".p-movie");
if (moive[0]) {
	moive.forEach((el) => {
		const trigger = el.querySelector(".p-movie__thumbnail");
		const video = el.querySelector(".p-movie__popup__movie video");
		const popup = el.querySelector(".p-movie__popup");
		const popupCloseTrigger = el.querySelectorAll(
			".p-movie__popup__closeTrigger"
		);
		trigger.addEventListener("click", () => {
			el.classList.add("--open");
			video.play();
		});
		popupCloseTrigger.forEach((trigger) => {
			trigger.addEventListener("click", () => {
				video.pause();
				el.classList.remove("--open");
			});
		});
	});
}
