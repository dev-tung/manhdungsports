// Modal category
document.getElementById('HeaderNavCatbtn').onclick = () => {
    document.getElementById('Modalcategory').style.display = "block";
}

// Modal menu
document.querySelectorAll('.header-middle-right__icon--menu').forEach( e => {
    e.onclick = () => {
        document.getElementById('Modalmenu').style.display = "block";
    }
});

// Modal search
document.querySelectorAll('.header-middle-right__icon--search').forEach( e => {
    e.onclick = () => {
        document.getElementById('ModalSearch').style.display = "block";
    }
});

// Modal cart
document.querySelectorAll('.header-middle-right__icon--cart').forEach( e => {
    e.onclick = () => {
        document.getElementById('ModalCart').style.display = "block";
    }
});

// Modal product filter
document.querySelectorAll('.product-filter__btn').forEach( e => {
    e.onclick = () => {
        document.getElementById('Modalproductfilter').style.display = "block";
    }
});


document.querySelectorAll('.ModalCloseIcon, .ModalOverlay').forEach( e => {
    e.onclick = () => {
        document.querySelectorAll('.modal').forEach((e) => {
            e.style.display = "none";
        });
    }
});