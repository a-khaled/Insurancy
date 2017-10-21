function myFunction() {
    "use strict";
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) { "use strict";
    if (!event.target.matches('.dropbtn')) {

        var i, dropdowns = document.getElementsByClassName("dropdown-contentUni"),
            openDropdown = dropdowns[i];
        
        
        for (i = 0; i < dropdowns.length; i += 1) {
            
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
    };






  