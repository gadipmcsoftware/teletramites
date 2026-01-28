let contador = 0;

function iniciarContador() {
    contador++;
    postMessage(contador); // Enviar el valor del contador al hilo principal
    setTimeout(iniciarContador, 1000); // Llamada recursiva para actualizar el contador cada segundo
}

iniciarContador(); // Iniciar el contador

