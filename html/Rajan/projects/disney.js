let icon=document.querySelector('.icon');
let box=document.querySelector('.box');
let one=document.querySelector('.one');
icon.addEventListener("mouseenter",()=>{
    box.style.display="block";
    one.style.display="none";
        })
        box.addEventListener("mouseleave",()=>{
            box.style.display="none";
            one.style.display="block";
        })

       
