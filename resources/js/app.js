/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.ScrollMagic = require('scrollmagic');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// init ScrollMagic Controller
const controller = new ScrollMagic.Controller();

$ (function(){
    // wait for document ready

const controller = new ScrollMagic.Controller({
    globalSceneOptions: {
        triggerHook:'onLeave',
        druration: "200%" // this works just fine with duration 0 as well
        // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
        // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause. 
    }
});

// get all slides
const slides = document.querySelectorAll("section.panel");

// create scene for every slide
for ( const i = 0; i<slides.length; i++ ) {
    new ScrollMagic.Scene({
        triggerElement: slides[i]
    })
    .setPin(slides[i], {pushFollowers: False})
    .addIndicators() // add indicators (requires plugin)
    .addTo(controller);
  }

});

