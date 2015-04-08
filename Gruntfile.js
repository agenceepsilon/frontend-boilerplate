// ============================================================================================= //
//                                       GRUNT - GRUNTFILE                                       //
// ============================================================================================= //

module.exports = function (grunt) {
    // ------------------------------------------------------------------------- //
    // PLUGIN - TIME GRUNT
    // ------------------------------------------------------------------------- //

    require('time-grunt')(grunt);

    // ------------------------------------------------------------------------- //
    // CONFIGURATION
    // ------------------------------------------------------------------------- //

    require('load-grunt-config')(grunt, {
        data: {
            assets: 'assets',
            css: 'assets/css',
            js: 'assets/js',
            vendor: 'assets/vendor'
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
     * Task: theme
     * Description: Generate CSS files.
     */
    grunt.registerTask('theme', [
        'newer:csscomb:sass',
        'sass',
        'cssmin',
        'header:css',
        'version'
    ]);

    /**
     * Task: mincss
     * Description: Minify CSS files.
     */
    grunt.registerTask('mincss', [
        'cssmin',
        'header:css',
        'version'
    ]);

    /**
     * Task: minjs
     * Description: Minify the JavaScript files.
     */
    grunt.registerTask('minjs', [
        'jshint',
        'newer:concat',
        'newer:uglify',
        'version'
    ]);

    /**
     * Task: version
     * Description: Generate file with number for assets version.
     */
    grunt.registerTask('version', function () {
        grunt.file.write('assets/.version', (new Date()).getTime());
    });
};