const changeThemeButton = document.querySelector(".header__button");
const changeThemeButtonIcon = document.querySelector(".header__button__icon");
const emptySpace = document.querySelector(".empty-space");
const emptySpaceText = document.querySelector(".empty-space__text");
const entries = document.querySelector(".entries");
const entriesListItem = document.querySelectorAll(".entries__list__item");
const newEntryContainer = document.querySelector(".new-entry-container__text")
const siteHeaderImage = document.querySelector(".bg-img");

var isDarkTheme = false;

function changeTheme() {
  changeThemeButtonIcon.src = isDarkTheme
    ? "static/images/icon-sun.svg"
    : "static/images/icon-moon.svg";
  changeThemeButtonIcon.alt = isDarkTheme ? "Sun Icon" : "Moon Icon";

  if (isDarkTheme) {
    siteHeaderImage.classList.remove("light");
    siteHeaderImage.classList.add("dark");
    emptySpace.classList.add("dark");
    entries.classList.add("dark");
    entriesListItem.forEach(element => {
        element.classList.add("dark");
    });
    newEntryContainer.classList.add("dark");
  } else {
    siteHeaderImage.classList.remove("dark");
    siteHeaderImage.classList.add("light");
    emptySpace.classList.remove("dark");
    entries.classList.remove("dark");
    entriesListItem.forEach(element => {
        element.classList.remove("dark");
    });
    newEntryContainer.classList.remove("dark");
  }

  isDarkTheme = !isDarkTheme;
}

changeThemeButton.addEventListener("click", changeTheme);
