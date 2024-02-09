function toggleSidebar() {
    var sidebar = document.querySelector('.sidebar');
    var content = document.querySelector('.content');
    var arrowIcon = document.querySelector('.bottom-arrow i');

    sidebar.classList.toggle('collapsed');
    content.classList.toggle('expanded');
    arrowIcon.classList.toggle('fa-angle-double-left');
    arrowIcon.classList.toggle('fa-angle-double-right');
}