module.exports = function(grunt){
    grunt.initConfig({
        // -------------------------------------------------------- //
        // Importer les métadonnées JSON stockées dans package.json
        // -------------------------------------------------------- //
        pkg: grunt.file.readJSON('package.json'),

        // ------------------------------------------------------- //
        // COMPASS
        // ------------------------------------------------------- //
        compass: {
            options: {
                cssDir: 'assets/css',
                sassDir: 'assets/css/sass',
                imagesDir: 'assets/css/images',
                fontsPath: 'assets/css/fonts',
                javascriptsDir: 'assets/js',
                outputStyle: 'expanded',
                relativeAssets: true,
                debugInfo: false,
                noLineComments: true,
                force: true
            },
            inte: {
                options: {
                    debugInfo: false,
                    outputStyle: 'expanded'
                }
            }
        },

        // ------------------------------------------------------------------ //
        // WATCH
        // ------------------------------------------------------------------ //
        watch: {
            options: {
                livereload: false
            },
            css: {
                files: [
                    'assets/css/sass/**/*.scss'
                ],
                tasks: [
                    'compass:inte'
                ]
            }
        },

        // ------------------------------------------------------------------ //
        // BROWSER SYNC
        // ------------------------------------------------------------------ //
        browser_sync: {
            files: {
                src: [
                    'assets/css/*.css',
                    'assets/css/images/*.jpg',
                    'assets/css/images/*.png',
                    'assets/js/*.js'
                ]
            },
            options: {
                watchTask: true,
                server: {
                    baseDir: "app"
                }
            }
        }
    });

    // ------------------------------------------ //
    // CHARGEMENT DES PLUGINS
    // ------------------------------------------ //
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // ------------------------------------------ //
    // TACHES PAR DEFAUTS
    // ------------------------------------------ //
    grunt.registerTask('default', ['browser_sync', 'watch']);

};