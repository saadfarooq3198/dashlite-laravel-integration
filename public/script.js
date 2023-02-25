let tabber = document.querySelector('.sticky-menu')
let tabCheckbox = tabber.querySelector('.tab-checkbox')
let stickyNavigation = document.querySelector('.sticky-navigation')
let hoverImg = document.querySelectorAll('.hoverImg')
let titleCont = document.querySelectorAll('.title-cont')
let title = document.querySelectorAll('.title')
let tabImg = document.querySelectorAll('.tab-img')


hoverImg.forEach(img => {
    img.addEventListener('mouseenter', (event) => {
        let titleId = event.target.dataset.titleId;
        let associatedTitleCont = document.getElementById(titleId);
        let associatedTitle = associatedTitleCont.querySelector('.title');
        let parentTabImg = associatedTitleCont.parentNode
        // console.log(parentTabImg);
        associatedTitle.style.right = '0px'
        // console.log(associatedTitleCont);
        associatedTitleCont.style.zIndex = '999'
        // console.log(associatedTitleCont);
        let tabUL = associatedTitleCont.querySelector('.tab-ul')
        associatedTitle.addEventListener('mouseenter', () => {
            tabUL.style.top = 0

        })

    })
    img.addEventListener('mouseleave', (event) => {
        let titleId = event.target.dataset.titleId;
        let associatedTitleCont = document.getElementById(titleId);
        let associatedTitle = associatedTitleCont.querySelector('.title');
        let parentTabImg = associatedTitleCont.parentNode
        let tabUL = associatedTitleCont.querySelector('.tab-ul')

        parentTabImg.addEventListener('mouseleave', () => {
            associatedTitle.style.right = '-28rem'
            tabUL.style.top = '-26rem'
            associatedTitleCont.style.zIndex = '8'
        })
    })
    
})







tabCheckbox.addEventListener('click', (e) => {
    if(e.target.checked){
        stickyNavigation.style.display = 'flex'
        // console.log(titleCont);
        titleCont.forEach(e => {
            e.style.display = 'block'
        })
        // stickyNavigation.classList.remove('displayNone')
        tabImg.forEach(e => {
            e.style.height = '11rem'
        })
    }else{
        titleCont.forEach(e => {
            e.style.display = 'none'
        })

        // stickyNavigation.style.display = "none"
        tabImg.forEach(e => {
            e.style.height = '0'
        })
    }
})
