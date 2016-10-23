// ============================================================================================= //
//                                       GRUNT - GRUNTFILE                                       //
// ============================================================================================= //

module.exports = function (grunt) {
    // ------------------------------------------------------------------------- //
    // TIME GRUNT
    // ------------------------------------------------------------------------- //

    require('time-grunt')(grunt);

    // ------------------------------------------------------------------------- //
    // CONFIGURATION
    // ------------------------------------------------------------------------- //

    require('load-grunt-config')(grunt, {
        data: {
            assets: {
                css: 'assets/css',
                js: 'assets/js'
            },
            resources: {
              js: 'resources/assets/js',
              sass: 'resources/assets/sass'
            },
            npm_vendor: 'node_modules'
        }
    });

    // ------------------------------------------------------------------------- //
    // TASKS
    // ------------------------------------------------------------------------- //

    /**
     * Task: default
     * Description: Grunt default task.
     */
    grunt.registerTask('default', [
        'watch'
    ]);

    /**
     * Task: js
     * Description: Generate JS file.
     */
    grunt.registerTask('js', [
        'uglify',
        'modernizr'
    ]);

    /**
     * Task: theme
     * Description: Generate CSS files.
     */
    grunt.registerTask('theme', [
        'scsslint',
        'sass',
        'js'
    ]);
};
