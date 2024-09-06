document.getElementById("loadEmployees").addEventListener("click", function () {
    const response = fetch('/load_employees')
    if (response){
        alert('Успешно!');
        setTimeout(function() {
            location.reload();
        }, 100);
    }
});

document.getElementById("getEmployees").addEventListener("click", function () {
    const element = document.getElementById("infoEmployees");

    if (element.style.display === 'none') {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
});
