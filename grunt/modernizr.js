// ============================================================================================= //
//                                        GRUNT - JSHINT                                         //
// ============================================================================================= //

module.exports = {
    dist: {
        "crawl": false,
        "customTests": [],
        "dest": "<%= assets.js %>/modernizr.min.js",
        "tests": [
            "touchevents"
        ],
        "options": [
            "html5printshiv",
            "setClasses"
        ],
        "uglify": true
    }
};
