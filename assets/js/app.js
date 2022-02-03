
// ANCHOR

jQuery(document).ready(function() {
  jQuery('.header-nav-link').click(function() {
    let elementClick = jQuery(this).attr("href")
    let destination = jQuery(elementClick).offset().top - 40;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
      return false; 
  });

  jQuery('.burger-menu_link').click(function() {
    let elementClick = jQuery(this).attr("href")
    let destination = jQuery(elementClick).offset().top - 0;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false; 
  });
});

// BURGER MENU

function burgerMenu(selector) {
  let menu = jQuery(selector);
  let button = menu.find('.burger-menu_button', '.burger-menu_lines');
  let links = menu.find('.burger-menu_link');
  let overlay = menu.find('.burger-menu_overlay');
  
  button.on('click', (e) => {
    e.preventDefault();
    toggleMenu();
  });
  
  links.on('click', () => toggleMenu());
  overlay.on('click', () => toggleMenu());
  
  function toggleMenu(){
    menu.toggleClass('burger-menu_active');
    jQuery('body').toggleClass('lock');
  }
}
burgerMenu('.burger-menu');

// SLIDER

let swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 20,
    stretch: 0,
    depth: 200,
    modifier: 1,
    slideShadows: true,
  },
  loop: true
});

// TRANSLATE

const select = document.querySelector('select');
const allLang = ['en', 'pl', 'ua', 'ru'];

select.addEventListener('change', changeURLLanguage);

function changeURLLanguage() {
  let lang = select.value;
  location.href = window.location.pathname + '#' + lang;
  location.reload();
}

function changeLanguage() {
  let hash = window.location.hash;
  hash = hash.substring(1);
  console.log(window.location.href)
  if (!allLang.includes(hash)) {
    location.href = window.location.pathname + '#en';
    // location.reload(); 
    return false
  }
  
  select.value = hash;
  // document.querySelector('title').innerHTML = langArr['   xxxx  '][hash];
  for (let key in langArr) {
    let elem = document.querySelector('.lang-' + key);
    if (elem) {
      elem.innerHTML = langArr[key][hash];
    }
  }
}

changeLanguage();

// PRINT

jQuery('#printButtom').click(function(){
  window.print();
});

//PRELOADER
 
document.body.onload = function() {
  setTimeout(function() {
    let preloader = document.getElementById('preloader')
    if( !preloader.classList.contains('done') )
    {
      preloader.classList.add('done');
    }
  }, 200)
}
