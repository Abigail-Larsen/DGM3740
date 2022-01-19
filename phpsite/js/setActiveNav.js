"use strict";

const items =  document.querySelectorAll(".menu a");

let arr = location.href.split('/')
let currentPage = arr[arr.length-1];


for(let i = 0; i < items.length; i++){
    let myPage = items[i].getAttribute("href")
    let regex = myPage.replace(/[^a-zA-Z ]/, "")

    if(regex === currentPage){
        items[i].className="active"
    }
}

