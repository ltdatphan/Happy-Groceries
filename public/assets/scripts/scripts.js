function search() {
    var search = document.getElementById("search-bar").value;
    window.location.href = "?page=products&item=" + search;
}