const btn_load = document.getElementById("loadEmployees");

btn_load.addEventListener("click", function () {
    const response = fetch('load_employees.php');
    if (response){
        alert('Успешно!');
    }
});

const btn_getData = document.getElementById("getEmployees");

btn_getData.addEventListener("click", function () {
    let element = document.getElementById("infoEmployees");

    if (element.style.display === 'none') {
        element.style.display = 'block';
      } else {
        element.style.display = 'none';
      }
});
