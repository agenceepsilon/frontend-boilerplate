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
                outputStyle: 'expanded',
                relativeAssets: true,
                noLineComments: true,
                force: true
            },
            theme: {
                cssDir: 'assets/css',
                sassDir: 'assets/sass',
                imagesDir: 'assets/css/images',
                fontsPath: 'assets/css/fonts',
                javascriptsDir: 'assets/js',
                debugInfo: false
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
                    'assets/sass/**/*.scss'
                ],
                tasks: [
                    'compass'
                ]
            }
        },

        // ------------------------------------------------------------------ //
        // BROWSER SYNC
        // ------------------------------------------------------------------ //
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        'assets/css/*.css',
                        'assets/css/images/*.jpg',
                        'assets/css/images/*.png',
                        'assets/js/*.js'
                    ]
                }},
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
    grunt.registerTask('default', [
        'browserSync',
        'watch'
    ]);

};