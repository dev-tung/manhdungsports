// Modal category
document.getElementById('header-nav__catbtn').onclick = () => {
    document.getElementById('modal__category').style.display = "block";
}

// Modal menu
document.querySelectorAll('.header-middle-right__icon--menu').forEach( e => {
    e.onclick = () => {
        document.getElementById('modal__menu').style.display = "block";
    }
});

// Modal search
document.querySelectorAll('.header-middle-right__icon--search').forEach( e => {
    e.onclick = () => {
        document.getElementById('modal__search').style.display = "block";
    }
});

// Modal cart
document.querySelectorAll('.header-middle-right__icon--cart').forEach( e => {
    e.onclick = () => {
        document.getElementById('modal__cart').style.display = "block";
    }
});

// Modal product filter
document.querySelectorAll('.product-filter__btn').forEach( e => {
    e.onclick = () => {
        document.getElementById('modal__productfilter').style.display = "block";
    }
});


document.querySelectorAll('.modal__clsicon, .modal__overlay').forEach( e => {
    e.onclick = () => {
        document.querySelectorAll('.modal').forEach((e) => {
            e.style.display = "none";
        });
    }
});