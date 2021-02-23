$(document).ready(function () {
    $('.header_img').slick({
        arrows: true,
        infinite: true,
        autoplaySpeed: 4000,
        autoplay: true,
        dots: true,
        speed: 1200,
        // variableWidth: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendDots: '.numbers_promo',
        prevArrow: '.left_arrow',
        nextArrow: '.rigth_arrow',
        customPaging: function (slider, i) {
            i = i + 1;
            return '<div class="current_slide_num">' + i + '</div><div class="count_slides">' + slider.slideCount + '</div>';
        }
    })

    var i = 0;
    $('.promo_info').each(function () {
        i++;
        $(this).attr('data-slick-index', i);
    });

    $('.header_img').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var nextSlideNum = nextSlide + 1;
        $('.promo_info').removeClass('current');
        $('.promo_info[data-slick-index="' + nextSlideNum + '"]').addClass('current');
    });
})

function ChangePhoto(e){
    let mainPhoto = document.getElementById('modal_main_photo');
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



function openHamburger(e) {
    $('.navigation').toggleClass('nav_active');
}