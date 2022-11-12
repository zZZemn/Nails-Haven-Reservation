const dropDownbutton = document.querySelectorAll('.drop-down-button');
const dropDown = document.querySelectorAll('.drop-down');

const dropDownActivate = () => {
    dropDownbutton.addEventListener('mouseenter', () => {
        dropDown.classList.add('.activate');
});
}

dropDownActivate();
//dropDownbutton.classlist.add("hover");