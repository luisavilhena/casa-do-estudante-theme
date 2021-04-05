//js functions

//menu
const menuButtonClose = document.querySelector('#mobile-menu-trigger')
const mainHeader = document.querySelector('#main-header')
console.log(menuButtonClose)

menuButtonClose.addEventListener('click', menuButtonOpen)

function menuButtonOpen() {
	mainHeader.classList.toggle("menu-open")
}