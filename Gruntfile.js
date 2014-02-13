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
                sassDir: 'assets/css/sass',
                imagesDir: 'assets/css/images',
                fontsPath: 'assets/css/fonts',
                javascriptsDir: 'assets/js',
                relativeAssets: true,
                noLineComments: true,
                force: true
            },
            inte: {
                options: {
                    cssDir: 'assets/css',
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
                src: 'assets/css/style.css'
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
    grunt.loadNpmTasks('grunt-bowercopy');

    // ------------------------------------------ //
    // TACHES PAR DEFAUTS
    // ------------------------------------------ //
    grunt.registerTask('default', ['browser_sync', 'watch']);

};