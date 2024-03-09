import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




//funcion para calcular el iva
function calcularIva() {
    // Obtener el valor neto
    const neto = document.getElementById('neto').value;

    // Obtener el porcentaje de IVA
    const vatPercentage = document.getElementById('iva').value;

    // Calcular el monto del IVA
    const iva = (neto) * 0.19;

    // Calcular el total
    const total = parseFloat(neto) + iva;

    // Actualizar el valor de entrada de IVA
    document.getElementById('iva').value = iva.toFixed();

    // Actualizar el valor de entrada total
    document.getElementById('total').value = total.toFixed();


  

}

// Llamar a calcularIva cuando cambia el valor de neto o IVA
document.getElementById('neto').addEventListener('input', calcularIva);
document.getElementById('iva').addEventListener('input', calcularIva);
document.getElementById("total").addEventListener('input', formattedTotal);



