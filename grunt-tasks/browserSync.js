module.exports = {
    dev: {
        bsFiles: {
            src: [
                "assets/css/*.css",
                "assets/css/images/*.jpg",
                "assets/css/images/*.png",
                "assets/js/*.js"
            ]
        }},
    options: {
        watchTask: true,
        server: {
            baseDir: "app"
        }
    }
};