var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

function openSidebar(){
    let contents = document.getElementsByClassName("sidebar-link-content");
    let sidebar_button = document.getElementById('sidebar-button');
    let links = document.getElementById("sidebar-links");

    links.classList.toggle('sidebar-links-active');
    sidebar_button.classList.toggle('sidebar-button-active');
    for(i=0; i<5; i++){
       contents[i].classList.toggle('sidebar-link-content-active');
    }
}


if (screenWidth > 768) {
    openSidebar()
}