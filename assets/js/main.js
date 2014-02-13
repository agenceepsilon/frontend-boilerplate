// --------------------------------------------------------------------------------------------- //
// CHECK INSTANCE
// --------------------------------------------------------------------------------------------- //
if(typeof tep == 'undefined' || !tep){
    var tep = {};
}
if(typeof tep.MEDUSELDBUILD == 'undefined' || !tep.MEDUSELDBUILD){
    tep.MEDUSELDBUILD = {};
}
tep.MEDUSELDBUILD.Main = function(){
    this.init();
};

// --------------------------------------------------------------------------------------------- //
// PROTOTYPE
// --------------------------------------------------------------------------------------------- //
tep.MEDUSELDBUILD.Main.prototype = {
    init: function(){
        jQuery(document).ready(jQuery.proxy(this, 'onDocumentReady'));
        jQuery(window).load(jQuery.proxy(this, 'onWindowLoad'));
        jQuery(window).resize(jQuery.proxy(this, 'onWindowResize'));
    },
    // ----------------------------------------------------------------------------------------- //
    // Script à lancer au chargement de la page, après l'affichage des images
    // ----------------------------------------------------------------------------------------- //
    onDocumentReady: function(){
    },
    // ----------------------------------------------------------------------------------------- //
    // Script à lancer au chargement de la page
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
var tepMEDUSELDBUILD = new tep.MEDUSELDBUILD.Main();