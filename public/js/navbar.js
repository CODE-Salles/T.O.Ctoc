window.onscroll = function() {navBarClassChange()};

var navbar = document.getElementById("navbar");
var navbar_logo = document.getElementById("navbar-logo");
var footer = document.getElementById("footerbar");
var sharepage_button = document.getElementById("sharepage-button");
var socials = document.querySelectorAll('.footerbar-link-social');

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
    let navbar = document.getElementById('navbar-links')
    navbar.classList.toggle('active');    
}

function changePageColor(layout){
  switch(layout){
    case 'green':
      navbar.classList = 'navbar navbar-g';  
      footer.classList = 'footerbar footerbar-g';  
      navbar_logo.style.backgroundColor = 'var(--verde)';
      sharepage_button.classList = 'sharepage-button-g sharepage-button';
      socials.forEach(link =>{link.classList = 'footerbar-link-social footerbar-link-social-g'});
      break;
    case 'orange':
      navbar.classList = 'navbar';  
      footer.classList = 'footerbar';  
      navbar_logo.style.backgroundColor = 'var(--laranja)';  
      socials.forEach(link =>{link.classList = 'footerbar-link-social'});

      break;
    case 'yellow':
      navbar.classList = 'navbar navbar-y';  
      footer.classList = 'footerbar footerbar-y';  
      navbar_logo.style.backgroundColor = 'var(--amarelo)';
      socials.forEach(link =>{link.classList = 'footerbar-link-social footerbar-link-social-y'});
      break;
    default:
  }
}