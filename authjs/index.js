const singleElementSelector = element => document.querySelector(element) // Html single element selector
const multiElementSelector = element => document.querySelectorAll(element) // Html multiple element selector

const logo = singleElementSelector('.logo') 
const writeUp = singleElementSelector('.write-up')  
const hamburgerMenuIcon = singleElementSelector('.menuIcon')
const detailsBtn = singleElementSelector('#detailsBtn') 

const links = multiElementSelector('#nav-link') 

//********** Change Navbar background on scroll **********
window.addEventListener('scroll', () => {

  if (window.scrollY > 8) {
    logo.classList.add('scrollColor')
    singleElementSelector('header').classList.add('scroll')
    
  }else{
    logo.classList.remove('scrollColor')
    singleElementSelector('header').classList.remove('scroll')
  }
      
  change_link_color(links)
})


// *************** Hamburger menu function ***************
let hamburerIndicator = 'false';
const hamburger = () => {
  let x = singleElementSelector('.mobile')

  if (x.style.display === 'block') {
    x.style.display = 'none'; 
    hamburgerMenuIcon.setAttribute('class', 'fa fa-bars text-times text-white fa-2x')
    
    
  }else{
    x.style.display = 'block';
    hamburgerMenuIcon.setAttribute('class', 'fa fa-times text-times text-white fa-2x')
  }
}
    
    
//************* Change link and hamburger menu color on scroll *************
const change_link_color = (arrayOfLinks) => { 
  arrayOfLinks.forEach(link => {
   
    if (window.scrollY > 8) {
      link.style.color = 'black'
      hamburgerMenuIcon.classList.add('scrollColor')
      
    }else{
      link.style.color = 'white'
      hamburgerMenuIcon.classList.remove('scrollColor')
    }
  });
}


//****************** Fly-in Effect ******************
const Observer = new IntersectionObserver(entries => { 
  entries.forEach(entry => {
    if (entry.isIntersecting) {
        entry.target.classList.add('show')
        
    }else{
        entry.target.classList.remove('show')

    }
  })
}) 

const hiddenElements = multiElementSelector('.hidden')
hiddenElements.forEach(ele => Observer.observe(ele))



//*********** Donation Page See details functionality ***********
let clicked = 'false'

const see_details = () => {
  if (clicked == 'false') {
    writeUp.setAttribute('class', 'write-up my-4')
    detailsBtn.innerHTML = 'Read less'
    clicked = 'true'
    
  }else{
    writeUp.setAttribute('class', 'write-up my-4 text-truncate')
    detailsBtn.innerHTML = 'Read more'
    clicked = 'false'
  }
}




















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
 