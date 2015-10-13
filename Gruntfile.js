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
            assets: 'assets',
            css: 'assets/css',
            image: 'assets/css/images',
            js: 'assets/js',
            vendor: 'assets/vendor'
        }
    });

    // ------------------------------------------------------------------------- //
    // TASKS
    // ------------------------------------------------------------------------- //

    /**
     * Task: inint
     * Description: Init project.
     */
    grunt.registerTask('init', [
        'sass',
        'cssmin',
        'header:css',
        'newer:concat',
        'newer:uglify',
        'clean:js',
        'version'
    ]);

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
        'newer:imagemin',
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
        'clean:js',
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
