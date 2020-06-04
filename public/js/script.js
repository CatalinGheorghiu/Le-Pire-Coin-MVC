const alert = document.getElementById("msg-flash");

if (alert) {
    setTimeout(() => {
        alert.remove();
    }, 7000);
}
