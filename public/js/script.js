const openMenuButton = document.getElementById('open-menu-button');
const closeMenuButton = document.getElementById('close-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

openMenuButton.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
});

closeMenuButton.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
});