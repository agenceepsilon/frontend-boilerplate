// --------------------------------------------------------------------------------------------- //
// CHECK INSTANCE
// --------------------------------------------------------------------------------------------- //
if(typeof teq == 'undefined' || !teq){
    var teq = {};
}
if(typeof teq.BOILERPLATE == 'undefined' || !teq.BOILERPLATE){
    teq.BOILERPLATE = {};
}
teq.BOILERPLATE.Main = function(){
    this.init();
};

// --------------------------------------------------------------------------------------------- //
// PROTOTYPE
// --------------------------------------------------------------------------------------------- //
teq.BOILERPLATE.Main.prototype = {
    init: function(){
        jQuery(document).ready(jQuery.proxy(this, 'onDocumentReady'));
        jQuery(window).load(jQuery.proxy(this, 'onWindowLoad'));
        jQuery(window).resize(jQuery.proxy(this, 'onWindowResize'));
    },
    // ----------------------------------------------------------------------------------------- //
    // Script à lancer au chargement de la page
    // ----------------------------------------------------------------------------------------- //
    onDocumentReady: function(){
    },
    // ----------------------------------------------------------------------------------------- //
    // Script à lancer au chargement de la page, après l'affichage des images
    // ----------------------------------------------------------------------------------------- //
    onWindowLoad: function(){
    },
    // ----------------------------------------------------------------------------------------- //
    // Script à lancer au resize de la page
    // ----------------------------------------------------------------------------------------- //
    onWindowResize: function(){
    }
};

// --------------------------------------------------------------------------------------------- //
// RUN INSTANCE
// --------------------------------------------------------------------------------------------- //
var teqBOILERPLATE = new teq.BOILERPLATE.Main();