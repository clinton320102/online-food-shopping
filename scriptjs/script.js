let btn = document.querySelector(".btn-menu");
let icon = document.querySelector(".fa-bars");
let menu = document.querySelector(".menu-link");
let overlay = document.querySelector(".overlay");

// toggle menu button and open close menu
btn.addEventListener('click', function(){
  if(icon.classList.contains("fa-bars")) {
    icon.classList.replace("fa-bars", "fa-times");
    menu.classList.toggle("active");
  } else {
    icon.classList.replace("fa-times", "fa-bars");
    menu.classList.remove("active");
  }
});

// change color of the link
function activeLink() {
  const curPage = document.URL;
  const links = document.getElementsByTagName('a');
  for(let link of links) {
    if(link == curPage) {
      link.classList.add("current");
    }
  }
}

document.onreadystatechange = () => {
  if(document.readyState === 'complete') {
    activeLink();
  }
}

// click button to view the order 
const viewOrderBtn = document.querySelector(".btn-view-order");
const closeViewOrder = document.querySelector("#closeViewOrder");

viewOrderBtn.addEventListener('click', function() {
  document.querySelector(".order-form").style.display = "block";
});

closeViewOrder.addEventListener('click', function() {
  document.querySelector(".order-form").style.display = "none";
});