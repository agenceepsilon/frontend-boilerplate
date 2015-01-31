// --------------------------------------------------------------------------------------------- //
// CHECK INSTANCE
// --------------------------------------------------------------------------------------------- //
if(typeof app === 'undefined' || !app){
    var app = {};
}
if(typeof app.FRONTEND === 'undefined' || !app.FRONTEND){
    app.FRONTEND = {};
}
app.FRONTEND.Main = function(){
    this.init();
};

// --------------------------------------------------------------------------------------------- //
// PROTOTYPE
// --------------------------------------------------------------------------------------------- //
app.FRONTEND.Main.prototype = {
    init: function(){
        jQuery(document).ready(jQuery.proxy(this, 'onDocumentReady'));
        jQuery(window).load(jQuery.proxy(this, 'onWindowLoad'));
        jQuery(window).resize(jQuery.proxy(this, 'onWindowResize'));
    },

    // ----------------------------------------------------------------------------------------- //
    // Script to start loading the page
    // ----------------------------------------------------------------------------------------- //
    onDocumentReady: function(){
    },

    // ----------------------------------------------------------------------------------------- //
    // Script to start loading the page, after loading all images
    // ----------------------------------------------------------------------------------------- //
    onWindowLoad: function(){
    },

    // ----------------------------------------------------------------------------------------- //
    // Script to run in resize the page
    // ----------------------------------------------------------------------------------------- //
    onWindowResize: function(){
    }
};

// --------------------------------------------------------------------------------------------- //
// RUN INSTANCE
// --------------------------------------------------------------------------------------------- //
var appFRONTEND = new app.FRONTEND.Main();