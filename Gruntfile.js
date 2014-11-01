// ============================================================================================= //
//                                       GRUNT - GRUNTFILE                                       //
// ============================================================================================= //

module.exports = function(grunt){
    var config = {
        pkg: grunt.file.readJSON('package.json'),
        env: process.env,
        assets: {
            sass: "assets/sass",
            css: "assets/css",
            js: "assets/js",
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

    // --------------------------------------- //
    // GLOBAL PLUGINS LOADING
    // --------------------------------------- //

    require('load-grunt-tasks')(grunt);

    // --------------------------------------- //
    // TASK - Default
    // Grunt default task
    // --------------------------------------- //

    grunt.registerTask('default', [
        'watch'
    ]);

    // --------------------------------------- //
    // TASK - Theme
    // Generate CSS files
    // --------------------------------------- //

    grunt.registerTask('theme', [
        'sass',
        'version'
    ]);

    // --------------------------------------- //
    // TASK - MinCSS
    // Minify CSS files.
    // --------------------------------------- //

    grunt.registerTask('mincss', [
        'cssmin',
        'version'
    ]);

    // --------------------------------------- //
    // TASK - MinJS
    // Minify the JavaScript files.
    // --------------------------------------- //

    grunt.registerTask('minjs', [
        'bower_concat',
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