let searchBtn = document.querySelector("#search-btn");
let searchForm = document.querySelector(".search-form") ;
let loginForm = document.querySelector(".login-form");
let menuBar = document.querySelector("#menu-bar");
let amenu = document.querySelector(".navbar");

const toggleBtn = document.getElementById("toggle-btn");
const theme = document.querySelector("body");




function showbar(){
    searchBtn.classList.toggle("fa-times")
    searchForm.classList.toggle("active")
}
function showform(){
    loginForm.classList.add("active")
}
function hideform(){
    loginForm.classList.remove("active")

}
function showmenu(){
    menuBar.classList.toggle("fa-times")
    amenu.classList.toggle("active")
}
vidBtn.forEach(slide =>{
    slide.addEventListener("click" , function(){
        document.querySelector(".controls .blue").classList.remove("blue");
        slide.classList.add("blue");
        let src = slide.getAttribute("data-src");
        document.querySelector("#video-slider").src = src;
    })
})

const notificationIcon = document.querySelector('.notification-icon');
const notificationBadge = document.querySelector('.badge');

// إضافة استماع حدث النقر لعرض الإشعارات
notificationIcon.addEventListener('click', function() {
  // اعرض قائمة الإشعارات هنا
  // يمكن استخدام AJAX لجلب البيانات من الخادم وعرضها
  notificationBadge.style.display = 'none'; // إخفاء الشارة
});
