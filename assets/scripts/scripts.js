function search() {
    var search = document.getElementById("search-bar").value;
    window.location.href = "?page=products&item=" + search;
}

function focused() {
    var search = document.getElementById("search-bar").value;
    if (search == 'Search...') {
        document.getElementById("search-bar").value = '';
        document.getElementById("search-bar").style.color="black";
    }
}

function unfocused() {
    var search = document.getElementById("search-bar").value;
    if (search == '') {
        document.getElementById("search-bar").value = 'Search...';
        document.getElementById("search-bar").style.color="rgb(125,125,125)";
    }
}