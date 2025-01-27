document.addEventListener("DOMContentLoaded", function (event) {
  const button_html = `
	<button id="scroll-top" class="scroll-top">
		<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
			<path d="M23.677 18.52c.914 1.523-.183 3.472-1.967 3.472h-19.414c-1.784 0-2.881-1.949-1.967-3.472l9.709-16.18c.891-1.483 3.041-1.48 3.93 0l9.709 16.18z"></path>
		</svg>
		<span class="screen-reader-text">Scroll To Top</span>
	</button>`;

  document.body.insertAdjacentHTML("beforeend", button_html);

  const button = document.getElementById("scroll-top");

  button.addEventListener("click", function () {
    window.scrollTo(0, 0);
  });

  window.addEventListener("scroll", function () {
    if (window.scrollY == 0) {
      button.style.opacity = "0";
    } else {
      button.style.opacity = "1";
    }
  });
});
