const display = () => {
    const burger = document.querySelector('.burger')
    const sub_navbar = document.querySelector('.sub_navbar')

    burger.addEventListener('click', () => {

        sub_navbar.classList.toggle('sub_navbar_burger')

    });
}

display();