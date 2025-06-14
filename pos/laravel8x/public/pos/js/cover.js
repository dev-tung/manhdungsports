// SIDEBAR
document.getElementById('TopbarPage').addEventListener("click", function (e) {
    let sidebarClass = document.getElementById('App').classList;
    if( sidebarClass.contains('Sidebar_Hide') ) sidebarClass.remove('Sidebar_Hide');
    else sidebarClass.add('Sidebar_Hide');
});

// On mobile default Sidebar_Hide
if(window.innerWidth < 768){
    document.getElementById('App').classList.add('Sidebar_Hide');
}
// END SIDEBAR