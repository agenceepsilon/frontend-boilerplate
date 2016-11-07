// ============================================================================================= //
//                                         GRUNT - WATCH                                         //
// ============================================================================================= //

module.exports = {
    options: {
        livereload: false
    },

    styles: {
        files: [
            '<%= resources.sass %>/**/*.scss'
        ],
        tasks: [
            'sass'
        ]
    },

    scripts: {
        files: [
            '<%= resources.js %>/**/*.js'
        ],
        tasks: [
            'uglify'
        ]
    }
};
