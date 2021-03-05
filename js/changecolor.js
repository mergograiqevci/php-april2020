function time() {
    var currentTime = new Date().getHours();
    if (currentTime >= 0 && currentTime < 8) {

        document.body.style.backgroundColor = "rgb(250, 128, 114)";

    } else if (currentTime >= 8 && currentTime < 12) {

        document.body.style.backgroundColor = "rgb(130, 224, 170)";

    } else if (currentTime >= 12 && currentTime < 18) {

        document.body.style.backgroundColor = "rgb(187, 143, 206)";

    } else if (currentTime >= 18 && currentTime <= 23) {

        document.body.style.backgroundColor = "rgb(127, 179, 213)";

    }
}

setInterval(time, 100);
