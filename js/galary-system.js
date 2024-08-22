let img = document.querySelectorAll(".galary-image")
let modal = document.querySelector(".big-galary-image")
let modalClose = document.querySelector(".big-galary-close")

img.forEach((e)=>{
    e.addEventListener('click', ()=>{
        let modalImage = modal.getElementsByTagName("img")
        modalImage[0].src = e.src
        modal.style.display = "flex"
    })
})

modalClose.addEventListener('click', ()=>{
    modal.style.display = "none"
})