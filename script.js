function redirectUser() {
    var id = document.querySelector('input[type="text"]').value;
    var password = document.querySelector('input[type="password"]').value;

    if (id === "" || password === "") {
        alert("Tanpri ranpli ID ak modpas ou.");
    } else {
        window.location.href = "nextPage.html"; // Ranplase ak paj ou vle a
    }
}