//ADMIN PAGE SCRIPT
const ul = document.querySelector('.ul')
const ul_relative = document.querySelector('.ul_relative')
hide_profile = false;
const one = document.querySelector('.one') //ICON
const two = document.querySelector('.two')
const three = document.querySelector('.three') //ICON
const four = document.querySelector('.four')
const five = document.querySelector('.five') //ICON
const six = document.querySelector('.six')
const hide_ul = document.querySelector('.hide_ul')
const show_ul = document.querySelector('.show_ul')
const profile_li = document.querySelectorAll('.profile_li')
const home_content_container = document.querySelector('.home_content_container')
const users_content_container = document.querySelector('.users_content_container')
const show_hide_profile = document.querySelector('.show_hide_profile')
let transparent = false;




//click profile li to steady background color
profile_li.forEach((item) =>
    item.addEventListener('click', click_profile_li))

function click_profile_li() {
    profile_li.forEach((item) =>
        item.classList.remove('active'))
    this.classList.add('active')
}

show_hide_profile.addEventListener('click', () => {
    const profile_contents = document.querySelector('.profile_contents')
    const profile_container = document.querySelector('.profile_container')
    if (profile_contents.classList.contains('active')) {
        profile_contents.classList.remove('active')
        profile_li.forEach((item) =>
            item.classList.remove('active'))
    } else {
        profile_contents.classList.add('active')
    }
})

//First navigation
one.addEventListener('click', () => {
    two.classList.contains('active') ? two.classList.remove('active') : two.classList.add('active')
    four.classList.remove('active')
    six.classList.remove('active')
    two.classList.contains('active') ? ul.classList.add('active') : ul.classList.remove('active') // close and open ul
    ul.classList.contains('active') ? ul_relative.classList.add('active') : ul_relative.classList.remove('active') // Closing profile when opening menu
})
two.addEventListener('click', () => {
        home_content_container.classList.remove('active') //remove active to show homepage
        users_content_container.classList.add('active') //add active to hide homepage
    })
    //Second navigation
three.addEventListener('click', () => {
    four.classList.contains('active') ? four.classList.remove('active') : four.classList.add('active')
    two.classList.remove('active')
    six.classList.remove('active')
    four.classList.contains('active') ? ul.classList.add('active') : ul.classList.remove('active') // close and open ul
    ul.classList.contains('active') ? ul_relative.classList.add('active') : ul_relative.classList.remove('active') // Closing profile when opening menu

})
four.addEventListener('click', () => {
        home_content_container.classList.add('active') //add active to hide homepage
        users_content_container.classList.remove('active') //remove active to show homepage

    })
    //Third navigation
five.addEventListener('click', () => {
    six.classList.contains('active') ? six.classList.remove('active') : six.classList.add('active')
    two.classList.remove('active')
    four.classList.remove('active')
    six.classList.contains('active') ? ul.classList.add('active') : ul.classList.remove('active') // close and open ul
    ul.classList.contains('active') ? ul_relative.classList.add('active') : ul_relative.classList.remove('active') // Closing profile when opening menu
})
six.addEventListener('click', () => {
    home_content_container.classList.add('active') //add active to hide homepage
    users_content_container.classList.add('active') //add active to hide homepage
})

hide_ul.addEventListener('click', () => {
    hide_ul.style.display = "none"
    show_ul.style.display = "grid"
    ul.style.height = "60px"
    ul.classList.remove('active')
    ul_relative.style.width = "0px"
    two.classList.remove('active')
    four.classList.remove('active')
    six.classList.remove('active')
    transparent = true;
    console.log(transparent)
    check_transparent();
})
show_ul.addEventListener('click', () => {
        show_ul.style.display = "none"
        hide_ul.style.display = "grid"
        ul.style.height = "auto"
        ul_relative.style.width = "90px"
        transparent = false;
        check_transparent();
    })
    //CHECK MENU IF TRUE THEN TRANSPARENT
function check_transparent() {
    if (transparent) {

        ul.addEventListener('mouseover', mouse_over)
        ul.addEventListener('mouseout', mouse_out)

        function mouse_over() {
            ul.style.opacity = "1"
        }

        function mouse_out() {
            setTimeout(() => {
                if (transparent) ul.style.opacity = "0.2" //transparent after hovered
            }, 1000)
        }

        setTimeout(() => {
            if (transparent) ul.style.opacity = "0.2" //if it is really true
        }, 1000)
    } else {
        ul.style.opacity = "1"
    }

}