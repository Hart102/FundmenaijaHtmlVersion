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


// Effects

  /**
   * Back to top button
   */
   let backtotop = select('.back-to-top')
   if (backtotop) {
     const toggleBacktotop = () => {
       if (window.scrollY > 100) {
         backtotop.classList.add('active')
       } else {
         backtotop.classList.remove('active')
       }
     }
     window.addEventListener('load', toggleBacktotop)
     onscroll(document, toggleBacktotop)
   }
 
   /**
    * Mobile nav toggle
    */
   on('click', '.mobile-nav-toggle', function(e) {
     select('#navbar').classList.toggle('navbar-mobile')
     this.classList.toggle('bi-list')
     this.classList.toggle('bi-x')
   })
 
   /**
    * Mobile nav dropdowns activate
    */
   on('click', '.navbar .dropdown > a', function(e) {
     if (select('#navbar').classList.contains('navbar-mobile')) {
       e.preventDefault()
       this.nextElementSibling.classList.toggle('dropdown-active')
     }
   }, true)
 
   /**
    * Scrool with ofset on links with a class name .scrollto
    */
   on('click', '.scrollto', function(e) {
     if (select(this.hash)) {
       e.preventDefault()
 
       let navbar = select('#navbar')
       if (navbar.classList.contains('navbar-mobile')) {
         navbar.classList.remove('navbar-mobile')
         let navbarToggle = select('.mobile-nav-toggle')
         navbarToggle.classList.toggle('bi-list')
         navbarToggle.classList.toggle('bi-x')
       }
       scrollto(this.hash)
     }
   }, true)
 
   /**
    * Scroll with ofset on page load with hash links in the url
    */
   window.addEventListener('load', () => {
     if (window.location.hash) {
       if (select(window.location.hash)) {
         scrollto(window.location.hash)
       }
     }
   });
 
   /**
    * Preloader
    */
   let preloader = select('#preloader');
   if (preloader) {
     window.addEventListener('load', () => {
       preloader.remove()
     });
   }
 