
function openSidebar(){
    let contents = document.getElementsByClassName("sidebar-link-content");
    
    let links = document.getElementById("sidebar-links");

    links.classList.toggle('sidebar-links-active');

    for(i=0; i<3; i++){
       contents[i].classList.toggle('sidebar-link-content-active');
    }
}