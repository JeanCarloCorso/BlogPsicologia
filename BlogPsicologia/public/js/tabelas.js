document.addEventListener("DOMContentLoaded", function() {
    var dropdownTriggers = document.querySelectorAll('.dropdown-trigger');

    dropdownTriggers.forEach(function(dropdownTrigger) {
        dropdownTrigger.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });
});