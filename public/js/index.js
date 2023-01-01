document.getElementById("tog").addEventListener("click", aside);

function aside() {
    let elem = document.getElementById("aside");
    let nav = document.getElementById("bod");
    let name = document.getElementById("name");
    console.log(elem.classList);
    elem.classList.toggle("col-md-1");
    name.classList.toggle("tim");
    nav.classList.toggle("col-md-11");
    const el = document.querySelectorAll(".side-icon");
    el.forEach((box) => {
        box.classList.toggle("order");
    });
}
