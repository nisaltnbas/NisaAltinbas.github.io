let clickCount = 0;
let level = 1;
let timeout = 500;
let moving = false;

const button = document.getElementById("gameButton");
const info = document.getElementById("info");

function moveButton() {
  if (moving) return;

  moving = true;
  setTimeout(() => {
    const maxTop = window.innerHeight - button.offsetHeight;
    const maxLeft = window.innerWidth - button.offsetWidth;

    const top = Math.random() * maxTop + "px";
    const left = Math.random() * maxLeft + "px";

    button.style.marginTop = top;
    button.style.marginLeft = left;
    moving = false;
  }, timeout);
}

function buttonClicked() {
  clickCount++;

  if (clickCount >= 3) {
    level++;
    clickCount = 0;
    timeout = Math.max(0, timeout - 100);
    if (level > 6) {
      info.innerText = "You completed all levels!";
      button.disabled = true;
      return;
    }
    alert(`Level ${level} starts!`);
  }

  info.innerText = `Level: ${level} | Clicks: ${clickCount}/3`;
}
