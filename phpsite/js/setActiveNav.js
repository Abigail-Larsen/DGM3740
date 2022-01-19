"use strict";

const items =  document.querySelectorAll("nav a");

let arr = location.href.split('/')
let currentPage = arr[arr.length-1];


for(let i = 0; i < items.length; i++){
    let myPage = items[i].getAttribute("href")
    let regex = myPage.replace(/[^a-zA-Z ]/, "")

    if(currentPage ===''){
        const homeElement = document.getElementById("home-li");
        homeElement.className="active"
    }else if(regex === currentPage){
        items[i].className="active"
    }
}

