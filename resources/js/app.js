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
    // Llamar a calcularIva cuando cambia el valor de neto o IVA
    document.getElementById('neto').addEventListener('input', calcularIva);
    document.getElementById('iva').addEventListener('input', calcularIva);
    document.getElementById("total").addEventListener('input', formattedTotal);
}






// Dark mode toggle functionality
var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Update icons based on initial preference (use Tailwind classes)
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden'); // Use Tailwind's `hidden` class
    document.documentElement.classList.add('dark'); // Use Tailwind's `dark` class for dark mode styles
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {

    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'light');
        }
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
});



//hora actual
const horaActual = document.getElementById("hora-actual");

function mostrarHora() {
  const opciones = {
    hour: "numeric",
    minute: "numeric",
    second: "numeric",
    hour12: false,
  };

  const formateador = new Intl.DateTimeFormat("es-ES", opciones);
  const fecha = new Date();

  horaActual.textContent = formateador.format(fecha);
}

mostrarHora();

setInterval(mostrarHora, 1000); // Actualiza la hora cada segundo