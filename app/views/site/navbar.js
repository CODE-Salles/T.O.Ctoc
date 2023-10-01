window.onscroll = function() {navBarClassChange()};

var navbar = document.getElementById("navbar");

var navbar_sticky = navbar.offsetTop;

function navBarClassChange() {
  if (window.pageYOffset > navbar_sticky) {
    navbar.classList.add("navbar-sticky");
  } else {
    navbar.classList.remove("navbar-sticky");
  }
}

function openMenu(element) {
    // let button = document.getElementById('navbar-menu-button');
    let menu = document.getElementById(element);

    let navbar = document.getElementById('navbar-links')
    let searchbox = document.getElementById('searchbox-form')

    if(element == 'navbar-links'){
        if(searchbox.classList.contains('active')){
            searchbox.classList.toggle('active');
        }
    }


    if(element == 'searchbox-form'){
        if(navbar.classList.contains('active')){
            navbar.classList.toggle('active');
        }
    }

    console.log(menu.classList)
    menu.classList.toggle('active');
    
}