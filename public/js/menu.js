const   isScrolling = () => {
    const headerEl = document.querySelector('.primary-header');
    const LangSelect = document.getElementById('lang-select');
    let windowPosition = window.scrollY > 250;
    headerEl.classList.toggle('active', windowPosition);
    if (headerEl.classList.contains("active")){
        LangSelect.classList.add("option");
    }else{
        LangSelect.classList.remove("option");
    }
}


window.addEventListener('scroll', isScrolling);



var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

if(sPage === ""){
    document.getElementById("homepage").className = "activep";
}
else if(sPage  === "contact"){
    document.getElementById("contactpage").className = "activep";
}
else if(sPage  === "overons"){
    document.getElementById("overonspage").className = "activep";
}

const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach(
  function(menuItem) {
          menuItem.addEventListener("click", toggleMenu);
  }
)
