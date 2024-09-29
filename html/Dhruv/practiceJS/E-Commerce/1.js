let icon = document.querySelector(".icon");
let input = document.querySelector("#text");

icon.addEventListener('click',()=>{
input.classList.toggle('show')
// console.log("hellow")

})


let btn1 = document.querySelector("#btn1");
let btn2 = document.querySelector("#btn2");
let body = document.querySelector("#body")


// go ahead

let btn = document.querySelectorAll(".btn");
let box = document.querySelectorAll(".box");

btn.forEach((e)=>{
    e.addEventListener('click',()=>{
        childClass = e.classList.item(1);
        box.forEach((x)=>{
            if(x.classList.contains(childClass) != true){
                x.style.display="none"
            }
            else{
                x.style.display="block";
                x.style.animation="book-anim .5s linear 0s 1 alternate forwards";

            }

        })
    })
})

let carts = document.querySelector(".carts");
let boxes = document.querySelectorAll(".container");
let image = document.getElementsByName("<img>")
image.forEach((a)=>{
    a.addEventListener('click',(b)=>{
        // carts.style.animation= "move-anim 5s linear 0s 1 alternate forwards";
        b.style.backgroundColor="red";
        // carts.style.color="red";
        // console.log(carts.children.length);
 console.log(a.children);

    })


})

