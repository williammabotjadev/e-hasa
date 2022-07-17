import 'bootstrap';

// *** JS Typewriter Effect ***

let i = 0;
let target = document.getElementById("typewriter");
let text = target.innerHTML;
target.innerHTML = 'Welcome to e-Hasa';
let speed = 75; 

typeWriter();
function typeWriter() {
    if (i < text.length) {
        target.innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

