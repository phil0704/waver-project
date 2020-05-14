$(document).ready(function() { // wait for document ready
    // init
    const controller = new ScrollMagic.Controller();

    // get all slides
    const slides = document.querySelectorAll("section.waver");

    // create scene for every slide
    for (let i = 0; i < slides.length; i++) {
        new ScrollMagic.Scene({
                triggerElement: slides[i],
                offset: 50, // start a little later
                triggerHook: 1,
                reverse: false
            })
            .setClassToggle(".waver", "visible") // add class toggle
            //	.addIndicators() // add indicators (requires plugin)
            .addTo(controller);
    }

    const waverImages = document.getElementsByClassName("pic");
    for (let i = 0; i < waverImages.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
                triggerElement: waverImages[i], // y value not modified, so we can use element as trigger as well
                offset: 50, // start a little later
                triggerHook: 0.9,
            })
            .setClassToggle(waverImages[i], "visible") // add class toggle
            //	.addIndicators({name: "digit " + (i+1) }) // add indicators (requires plugin)
            .addTo(controller);
    }
});