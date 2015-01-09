// ============================================================================================= //
//                                       GRUNT - GRUNTFILE                                       //
// ============================================================================================= //

module.exports = function(grunt){
    // ------------------------------------------- //
    // PLUGIN - TIME GRUNT
    // ------------------------------------------- //

    require('time-grunt')(grunt);

    // ------------------------------------------- //
    // CONFIGURATION
    // ------------------------------------------- //

    var config = {
        pkg: grunt.file.readJSON('package.json'),
        env: process.env,
        assets: {
            sass: {
                main: "assets/sass",
                vendor: "assets/sass/vendors"
            },
            css: "assets/css",
            js: {
                main: "assets/js",
                dist: "assets/js/dist",
                vendor: "assets/js/vendors"
            },
            medias: "assets/medias"
        }
    };
    grunt.util._.extend(config, loadConfig('./grunt-tasks/'));
    grunt.initConfig(config);

    function loadConfig(path){
        var glob = require('glob');
        var object = {};
        var key;

        glob.sync('*', {cwd: path}).forEach(function(option){
            key = option.replace(/\.js$/, '');
            object[key] = require(path + option);
        });

        return object;
    }

    // ------------------------------------------- //
    // GLOBAL PLUGINS LOADING
    // ------------------------------------------- //

    require('load-grunt-tasks')(grunt);

    // ------------------------------------------- //
    // TASK - Default
    // Grunt default task
    // ------------------------------------------- //

    grunt.registerTask('default', [
        'watch'
    ]);

    // ------------------------------------------- //
    // TASK - Bower
    // Generate CSS files
    // ------------------------------------------- //

    grunt.registerTask('bower', [
        'bowercopy'
    ]);

    // ------------------------------------------- //
    // TASK - Theme
    // Generate CSS files
    // ------------------------------------------- //

    grunt.registerTask('theme', [
        'sass',
        'cssmin',
        'version'
    ]);

    // ------------------------------------------- //
    // TASK - MinCSS
    // Minify CSS files.
    // ------------------------------------------- //

    grunt.registerTask('mincss', [
        'cssmin',
        'version'
    ]);

    // ------------------------------------------- //
    // TASK - MinJS
    // Minify the JavaScript files.
    // ------------------------------------------- //

    grunt.registerTask('minjs', [
        'concat',
        'uglify',
        'clean',
        'version'
    ]);

    // -------------------------------------------- //
    // TASK - Version
    // Generate file with number for assets version
    // -------------------------------------------- //

    grunt.registerTask('version', function(){
        grunt.file.write('assets/.version', (new Date()).getTime());
    });
};