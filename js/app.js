//DOM Element.
const navLinks = document.querySelector('.nav-links')
const menu = document.querySelector('.menu')

const form = document.getElementById('form')
const studioNameInput = document.querySelector('#studio-name')
const projectNameInput = document.querySelector('#project-name')
const projectLinkInput = document.querySelector('#project-link')
const projectTypeInput = document.querySelector('#project-type')
const packagesInput = document.querySelector('#packages')
const email = document.querySelector('#email')
const message = document.querySelector('#text-area')

// eventListener for slide bar menu
menu.addEventListener('click', () => {
    navLinks.classList.toggle('active-nav')

    if (navLinks.classList.contains('active-nav')) {
        menu.src = '../Assets/close.png'
    } else {
        menu.src = '../Assets/menu.png';
    }
})

//window Scroll
function changeBg() {
    let header = document.querySelector('header')
    let scrollValue = window.scrollY
    if (scrollValue < 150) {
        header.classList.remove('bgScroll')
    } else {
        header.classList.add('bgScroll')
    }
}



//Window eventListener
window.addEventListener('scroll', changeBg)



//show Success Message
function showSuccess(input) {
    const inputHolder = input.parentElement
    inputHolder.className = 'input-holder success'
}

//Show Error message
function showError(input, message) {
    const inputHolder = input.parentElement
    inputHolder.className = 'input-holder error'
    const small = inputHolder.querySelector('small')
    small.innerText = message
}

//Function is valid Email
function checkEmail(input) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (re.test(input.value.trim())) {
        showSuccess(input)
    } else {
        showError(input, 'Email is not valid')
    }
}

//Check required function
function checkRequired(inputArr) {
    inputArr.forEach(input => {
        if (input.value.trim() === '') {
            showError(input, `${getFieldName(input)} is required`)
        } else {
            showSuccess(input)
        }
    })
}

// Check Field Name
function checkedLength(input, min, max) {
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters`);
    } else {
        showSuccess(input)
    }
}

//Get Field Name
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkRequired([studioNameInput, projectNameInput, projectLinkInput, projectTypeInput, packagesInput])
    checkedLength(studioNameInput, 5, 30)
    checkedLength(projectNameInput, 5, 50)
    checkedLength(projectTypeInput, 5, 50)
    checkedLength(email, 5, 20)
    checkedLength(message, 5, 300)
    checkEmail(email)
})