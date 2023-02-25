let searchBox = document.querySelector('.search-box')
let searchBtn = document.querySelector('.search-link')
let searchInput = document.querySelector('.search-input')
let stickyMenu = document.querySelector('.sticky-menu')
let vhdiv = document.querySelector('.vhdiv')

// console.log(searchBtn);
searchBtn.addEventListener('click', () => {
    searchInput.classList.remove('hidden')
    searchBox.style.border = '1px solid black'
})

// ---------------------------------- humburger menu --------------------------------- 
let humBurgerDiv = document.querySelector('.humBurgerDiv')
let humMenu = document.querySelector('#humburger')
let forResp = document.querySelector('.for-respon')
let nocross = document.querySelector('.nocross')
let cross = document.querySelector('.cross')

// console.log(cross);
humMenu.addEventListener('click', (e) => {
    if(e.target.checked){
        // forResp.style.display = 'block'
        // forResp.style.display = 'block'
        forResp.style.right = '0rem'
        nocross.style.display = 'none'
        cross.style.display = 'flex'
        stickyMenu.classList.add('displayNone')
        vhdiv.style.zIndex = 11
    }else{
        forResp.style.right = '-80rem'
        // forResp.style.display = 'none'
        cross.style.display = 'none'
        nocross.style.display = 'flex'
        stickyMenu.classList.remove('displayNone')
        setTimeout(() => {
            vhdiv.style.zIndex = 1
            
        }, 1000);

    }
    console.log(e.target);
})
// console.log(humMenu.checked);






// smooth scroll 





// --------------------------- about section program hover effect ----------------------------------- 
