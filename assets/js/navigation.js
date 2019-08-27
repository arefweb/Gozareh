
// Open and close search bar over menu
function openSearch(a) {
  let m = document.querySelector(".header-nav").clientHeight;
  a.nextElementSibling.style.height = m + "px" ;
  a.nextElementSibling.style.top = "0" ;
}

function closeSearch(){
  let s = document.getElementById("search-box");
  s.style.height = null ;
  s.style.visibility = null ;
  s.style.top = null ;
}

// Open Mobile Menu
function openMenu() {
  let u = document.querySelector("ul.menu");
  if(u.style.display){
    u.style.display = null ;
    u.style.height = null ;
  }else{
    u.style.display = "block" ;
    u.style.height = u.scrollHeight + "px";
  }
}

// Add angle down icon to sub-menu holders
window.addEventListener("load", addIcon);
window.addEventListener("resize", addIcon);
function addIcon() {
  let w = window.innerWidth;
  let angle = $("ul.menu .fa-angle-down") ;
  let a = $(".menu-item-has-children > a") ;
  if(w <= 768 && angle.length==0 ){
    for(let i=0; i<a.length ; i++){
      a[i].insertAdjacentHTML('beforeend', '<i class="fas fa-angle-down"></i>');
    }
  }else if(w > 768 && angle.length >0){
    for(let i=0; i<a.length ; i++){
      a[i].removeChild(a[i].children[0]);
    }
  }
}

// Accordion sub-menu holders
document.querySelector("ul.menu").addEventListener("click", openSubs);
function openSubs(event){
  let t = event.target ;
  let tag = t.tagName;
  let cl = t.classList;
  if(tag == "svg" || tag == "path"){
    event.preventDefault();
    if(cl[1] == "fa-angle-down"){
      t.classList.replace("fa-angle-down", "fa-angle-up");
      let a = t.closest("a");
      a.style.backgroundColor = "#484747" ;
      let sub = a.nextElementSibling ;
      let h = sub.scrollHeight ;
      sub.style.height = sub.clientHeight + h + "px" ;
      let ulz = $(t).parents("ul");
      for(let i=0; i<ulz.length ; i++){
        ulz[i].style.height = ulz[i].clientHeight + h + "px" ;
      }
    }else if(cl[1] == "fa-angle-up"){
      t.classList.replace("fa-angle-up", "fa-angle-down" );
      let a = t.closest("a");
      a.style.backgroundColor = null ;
      let sub = a.nextElementSibling ;
      let h = sub.scrollHeight ;
      sub.style.height = sub.clientHeight - h + "px" ;
      let ulz = $(t).parents("ul");
      for(let i=0; i<ulz.length ; i++){
        ulz[i].style.height = ulz[i].clientHeight - h + "px" ;
      }
    }

  }
}
