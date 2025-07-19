// Display header search when user scroll top 200px
window.onscroll = function (e) {
    if( window.scrollY >= 200 ){
        document.getElementById('header__scroll').style.display = "block";
    }else{
        document.getElementById('header__scroll').style.display = "none";
    }
};