window.onload = function() {

    var menuIcon = document.getElementById("menu-icon");
    var slideOutMenu = document.getElementById("slideout-menu");
    var searchIcon = document.getElementById("search-icon");
    var searchBox = document.getElementById("searchbox");

    searchIcon.addEventListener('click', function() {
        if (searchBox.style.top == '72px') {
            searchBox.style.top = '24px';
            searchBox.style.pointerEvents = 'none';
        } else {
            searchBox.style.top = '72px';
            searchBox.style.pointerEvents = 'auto';
        }
    });

    menuIcon.addEventListener('click', function() {
        if (slideOutMenu.style.opacity == "1") {
            slideOutMenu.style.opacity = '0';
            slideOutMenu.style.pointerEvents = 'none';
        } else {
            slideOutMenu.style.opacity = '1';
            slideOutMenu.style.pointerEvents = 'auto';
        }
    })

}