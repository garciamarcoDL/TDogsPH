window.addEventListener("scroll",function(){

    const nav=document.querySelector(".tdogs-navbar");

    if(window.scrollY>40){

        nav.classList.add("scrolled");

    }else{

        nav.classList.remove("scrolled");

    }

});