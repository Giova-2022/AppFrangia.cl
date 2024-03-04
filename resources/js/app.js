import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



function calcularIVA() {
    const neto = parseFloat(document.getElementById('neto').value); // Ensure numerical value
    if (isNaN(neto)) {
      alert('Ingrese un valor numérico válido para el neto.');
      return;
    }
  
    const iva = neto * 0.19;
    const total = neto + iva;
  
    document.getElementById('iva').value = iva.toFixed(2);
    document.getElementById('total').value = total.toFixed(2);
  }