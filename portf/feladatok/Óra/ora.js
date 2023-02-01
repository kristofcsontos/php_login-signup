// Clock
let clock = document.getElementById('clock');

function updateClock() {
  let date = new Date();
  let hours = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();
  clock.innerHTML = addZero(hours) + ':' + addZero(minutes) + ':' + addZero(seconds);
}

function addZero(time) {
  return (time < 10) ? '0' + time : time;
}

setInterval(updateClock, 1000);

// Stopwatch
let stopwatch = document.getElementById('stopwatch');
let startTime;
let updatedTime;
let difference;
let timerOn = false;

function startStop() {
  if (!timerOn) {
    timerOn = true;
    startTime = new Date().getTime();
    setInterval(getShowTime, 1000);
  } else {
    timerOn = false;
    clearInterval(updatedTime);
    startTime = null;
    stopwatch.innerHTML = '00:00:00';
  }
}

function getShowTime() {
  updatedTime = new Date().getTime();
  if (startTime != null) {
    difference = (updatedTime - startTime) / 1000;
    let hours = Math.floor(difference / 3600);
    difference = difference % 3600;
    let mins = Math.floor(difference / 60);
    difference = difference % 60;
    let secs = Math.floor(difference);
    difference = difference % 100;
    stopwatch.innerHTML = addZero(hours) + ':' + addZero(mins) + ':' + addZero(secs);
  }
}
