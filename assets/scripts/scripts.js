function search() {
    var item = document.getElementById("search-bar").value;
    window.location.href = "?page=products&item=" + item;
}

document.getElementById('search-bar').addEventListener('keyup', function(event) {
    if (event.code === 'Enter') {
        event.preventDefault();
        search();
    }
  });