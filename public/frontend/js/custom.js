// login page 
function toggleFrom(){
    container=document.querySelector('.content');
    container.classList.toggle('active');
}

// home page scroll Background color change

// window.addEventListener("scroll",function(){
//     var navmenu = document.getElementById('header');
//     var addpost = document.getElementById('addpost');


//     if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
//         navmenu.classList.add("cusnav");
//         addpost.classList.add("canaddpost")

//     }else{
//         navmenu.classList.remove("cusnav");
//         addpost.classList.remove("canaddpost")
//     }
// });
// Alert msg for delete

function myFunction() {
    if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
}