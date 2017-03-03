function goPage(page) {
    window.location = page;
}
function goPage(page, param) {
    var win = window.open(page+'?'+param, '_blank');
    win.focus();
}















































