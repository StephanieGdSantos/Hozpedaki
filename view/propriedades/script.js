var conditions = document.querySelectorAll('.house-condition');

conditions.forEach(condition => {
    if (condition.innerText == "Disponível") 
    condition.style.backgroundColor = 'rgb(53,135,56)';
});