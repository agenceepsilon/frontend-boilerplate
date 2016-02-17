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
            npm_vendor: 'node_modules'
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
        'scsslint',
        'newer:sass',
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
     * Task: version
     * Description: Generate file with number for assets version.
     */
    grunt.registerTask('version', function () {
        grunt.file.write('assets/.version', (new Date()).getTime());
    });
};
