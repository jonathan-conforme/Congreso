// Establecer la fecha objetivo (cuenta regresiva)
var targetDate = new Date("2023-08-23T00:00:00-05:00");

// Función para actualizar el reloj
function updateCountdown() {
  var currentDate = new Date();
  var timeDifference = targetDate - currentDate;

  // Calcular los días, horas, minutos y segundos restantes
  var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

  // Mostrar los valores en los elementos correspondientes
  document.getElementById("days").textContent = days;
  document.getElementById("hours").textContent = hours;
  document.getElementById("minutes").textContent = minutes;
  document.getElementById("seconds").textContent = seconds;

  // Verificar si la cuenta regresiva ha terminado
  if (timeDifference < 0) {
    // Detener la cuenta regresiva y mostrar un mensaje
    clearInterval(countdownInterval);
    document.getElementById("countdown").textContent = "¡El congreso ha comenzado!";
  }
}

// Iniciar el reloj al cargar la página
updateCountdown();

// Actualizar el reloj cada segundo
var countdownInterval = setInterval(updateCountdown, 1000);

