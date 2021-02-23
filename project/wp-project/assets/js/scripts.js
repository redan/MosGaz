jQuery.noConflict();
jQuery(document).ready(function () {
    jQuery('.header_img').slick({
        arrows: true,
        infinite: true,
        autoplaySpeed: 4000,
        autoplay: true,
        dots: false,
        speed: 1200,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '.left_arrow',
        nextArrow: '.rigth_arrow',
    })

    var i = 0;
    jQuery('.promo_info').each(function () {
        i++;
        jQuery(this).attr('data-slick-index', i);
    });

    jQuery('.header_img').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var nextSlideNum = nextSlide + 1;
        jQuery('.promo_info').removeClass('current');
        jQuery('.promo_info[data-slick-index="' + nextSlideNum + '"]').addClass('current');
    });


    // jQuery(window).scroll(function () {
    //     if (jQuery(window).scrollTop() > 60) {
    //         jQuery('.header_fixer').addClass("sticky");
    //         logo.src = logo.src.replace(/Logo.png/i, 'Logo_black.png');
    //     } else {
    //         jQuery('.header_fixer').removeClass("sticky");
    //         logo.src = logo.src.replace(/Logo_black.png/i, 'Logo.png');
    //     }
    // })

    mybutton = document.getElementById("top_btn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
})

function ChangePhoto(e, i){
    let mainPhoto = document.getElementById(`modal_main_photo${i}`);
    mainPhoto.src = e.srcElement.currentSrc
}

// Функция переключает вкладки
function openTab(evt, tabName, tabDescrName) {
    // Declare all variables
    var i, tabcontent, tablinks, tabdescriptor;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName('tabcontent');
    tabdescriptor = document.getElementsByClassName('tabdescriptor')
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabdescriptor[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName('tablinks');
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "flex";
    document.getElementById(tabDescrName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click().addClass('active');


function scrollTopAnimated() { 
    jQuery("html, body").animate({ scrollTop: "0" }, 1000); 
}

function openHamburger(e) {
    getElementsByClassName('navigation').toggleClass('nav_active')
}

function changeTab(e, type, key) {
    let sideBar = document.querySelectorAll('.services_sidebar_item_list');
    sideBar.forEach(elem => elem.classList.remove('open'));
    sideBar.forEach(elem => {if(elem.dataset.type == type){ elem.classList.add('open') }})
    let a = document.querySelectorAll('.services_main_info');
    a.forEach(elem => elem.classList.remove('active'))
    a.forEach(elem => {if(elem.dataset.type == type && elem.dataset.index == key){ elem.classList.add('active') }});
    let title = document.querySelector('#services-page_main_title');
    switch(type) {
        case 'heat':
            title.innerHTML = 'Монтаж отопления';
            break;
        case 'water':
            title.innerHTML = 'Водоснабжение';
            break;
        case 'plumb':
            title.innerHTML = 'Монтаж сантехники';
            break;
    };
}