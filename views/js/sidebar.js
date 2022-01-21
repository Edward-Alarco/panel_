let menutoggle = document.querySelector('.toggle')
let nav = document.querySelector('nav')
let main = document.querySelector('main')
menutoggle.onclick = (e) => {
    menutoggle.classList.toggle('active')
    nav.classList.toggle('active')
    main.classList.toggle('active')
}

let list = document.querySelectorAll('.list')
list.forEach(li => {
    li.onclick = (e) => {
        let j = 0;
        while (j < list.length) {
            list[j++].className = 'list'
        }
        li.className = 'list active'
    }
})