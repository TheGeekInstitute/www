function side_bar_open() {
    document.getElementById("side-bar").style.display = "block";
    document.getElementById("slide-open").style.display = "none";
    document.getElementById("slide-close").style.display = "block";
}

function side_bar_close() {
    document.getElementById("side-bar").style.display = "none";
    document.getElementById("slide-open").style.display = "block";
    document.getElementById("slide-close").style.display = "none";
}

function logout() {
    window.location.href = "login.php?logout=1";
}

function mail(id) {
    window.location.href = "mail.php?mail="+id;
    // console.log(id);
}