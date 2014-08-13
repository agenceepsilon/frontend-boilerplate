module.exports = {
    options: {
        cssDir: "assets/css",
        sassDir: "assets/sass",
        imagesDir: "assets/css/images",
        fontsPath: "assets/css/fonts",
        javascriptsDir: "assets/js",
        assetCacheBuster: false,
        outputStyle: "expanded",
        relativeAssets: true,
        noLineComments: true,
        force: true
    },
    theme: {
        /**
         * The "sourcemap" option replaces the "debug", it is only compatible with Chrome and "dev tool" native Firefox with Firebug not yet.
         * Choose the "debug" if you're running Firefox with Firebug and FireSass, a mandatory option.
         */
        options: {
            //debug: false,
            sourcemap: false
        }
    }
};