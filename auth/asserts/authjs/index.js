// Html single element selecotr 
const singleElementSelector = element => document.querySelector(element)

// Html multiple element selecotr 
const multiElementSelector = element => document.querySelectorAll(element)


let links = multiElementSelector('#nav-link') 
// Change Navbar background on scroll 
window.addEventListener('scroll', () => {

    if (window.scrollY > 8) {
        singleElementSelector('header').classList.add('scroll')
        
    }else{
        singleElementSelector('header').classList.remove('scroll')
    }
        
    change_link_color(links)
})
    
    
// Change link color on scroll 
const change_link_color = (arrayOfLinks) => {
    arrayOfLinks.forEach(link => {
        {window.scrollY > 8 ? link.style.color = 'black' : link.style.color = 'white'}
    });
}



// Fly-in Effect
const Observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show')
            
        }else{
            entry.target.classList.remove('show')

        }
    })
}) 

// show
const hiddenElements = multiElementSelector('.hidden')
hiddenElements.forEach(ele => Observer.observe(ele))