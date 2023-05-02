const filterButton = document.querySelector('.filter');
const filterOptions = document.querySelectorAll('.filter-options');

filterButton.addEventListener('click', () => {
    filterOptions.forEach((option) => {
        option.classList.toggle('show');
    });
});
