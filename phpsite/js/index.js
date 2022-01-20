"use strict";

function toggleMenu() {
  document.getElementsByTagName("NAV")[0].classList.toggle("open");
}
const x = document.getElementById('theButton');
x.onclick = toggleMenu; 

const setActive = (el, active) => {
    const formField = el?.parentNode?.parentNode
    if (active) {
      formField.classList.add('form-field--is-active')
    } else {
      formField?.classList.remove('form-field--is-active')
      el?.value === '' ? 
        formField?.classList.remove('form-field--is-filled') : 
        formField?.classList.add('form-field--is-filled')
    }
}
  
[].forEach.call(
    document.querySelectorAll('.form-field__input, .form-field__textarea'),
    (el) => {
      el.onblur = () => {
        setActive(el, false)
      }
      el.onfocus = () => {
        setActive(el, true)
      }
    }
)

function setActiveNav() {
    console.log('set active nav')
}

document.querySelectorAll("form .form-field__label").onClick = setActive()
