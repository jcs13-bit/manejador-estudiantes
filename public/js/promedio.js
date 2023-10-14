document.addEventListener('DOMContentLoaded', function () {
    const nota1 = document.getElementById('nota_1');
    const nota2 = document.getElementById('nota_2');
    const nota3 = document.getElementById('nota_3');
    const promedioInput = document.getElementById('promedio');

    nota1.addEventListener('input', calcularPromedio);
    nota2.addEventListener('input', calcularPromedio);
    nota3.addEventListener('input', calcularPromedio);

    function calcularPromedio() {
        const nota1Value = parseFloat(nota1.value) || 0;
        const nota2Value = parseFloat(nota2.value) || 0;
        const nota3Value = parseFloat(nota3.value) || 0;

        const promedio = (nota1Value + nota2Value + nota3Value) / 3;
        promedioInput.value = promedio.toFixed(2);
    }
});