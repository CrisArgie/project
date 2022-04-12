const menuIconButton = document.querySelector("[data-menu-icon-btn]")
const sidebar = document.querySelector("[data-slider]")


menuIconButton.addEventListener("click", () => {
    sidebar.classList.toggle("open")
})

document.addEventListener("click", e => {
    const isDropdownButton = e.target.matches("[data-dropdown-button]")
    if (!isDropdownButton && e.target.closest("[data-dropdown-menu]") != null) return

    let currentDropdown
    if (isDropdownButton) {
        currentDropdown = e.target.closest("[data-dropdown-menu]")
        currentDropdown.classList.toggle("active")
    }

    document.querySelectorAll("[data-dropdown-menu].active").forEach(dropdown => {
        if (dropdown === currentDropdown) return
        dropdown.classList.remove("active")
    })
})


var ScrollMsg = document.title;
var CharacterPosition = 0;

function StartScrolling() {
    document.title = ScrollMsg.substring(CharacterPosition, ScrollMsg.length) +
        ScrollMsg.substring(0, CharacterPosition);
    CharacterPosition++;
    if (CharacterPosition > ScrollMsg.length) CharacterPosition = 0;
    window.setTimeout("StartScrolling()", 150);
}

StartScrolling();