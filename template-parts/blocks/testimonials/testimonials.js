document.querySelectorAll(".testimonials").forEach((testimonial) => {
  const items = testimonial.querySelectorAll(".testimonial");
  const buttonsHtml = Array.from(items, () => {
    return `<span class="testimonial__button"></span>`;
  });

  testimonial.insertAdjacentHTML(
    "beforeend",
    `
		<div class="testimonial__nav">
			${buttonsHtml.join("")}
		</div>
	`
  );

  const buttons = testimonial.querySelectorAll(".testimonial__button");

  buttons.forEach((button, i) => {
    button.addEventListener("click", () => {
      // un-select all the items
      items.forEach((item) =>
        item.classList.remove("selected")
      );
      buttons.forEach((button) =>
        button.classList.remove("selected")
      );

      items[i].classList.add("selected");
      button.classList.add("selected");
    });
  });

  // Select the first item on page load
  items[0].classList.add("selected");
  buttons[0].classList.add("selected");
  console.log(items, buttons)
});
