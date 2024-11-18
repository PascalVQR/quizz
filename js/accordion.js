const accordionButton = document.querySelector("#accordion-button");
const accordionArrow = document.querySelector("#accordion-button span");
const bestScoresSection = document.querySelector("#best-scores");

console.log(accordionButton);
console.log(accordionArrow);
console.log(bestScoresSection);

accordionButton.addEventListener('click', () => {
    if (bestScoresSection.style.display == "none" || !bestScoresSection.style.display) {
        bestScoresSection.style.display = "grid";
        accordionArrow.innerText = "keyboard_arrow_up";
    } else {
        bestScoresSection.style.display = 'none';
        accordionArrow.innerText = "keyboard_arrow_down";
    }
});