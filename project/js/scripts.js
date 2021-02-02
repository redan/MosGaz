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

