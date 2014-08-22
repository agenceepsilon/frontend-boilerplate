module.exports = {
    options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    css: {
        files: {
            "assets/css/style.min.css": "assets/css/style.css",
            "assets/css/oldie.min.css": "assets/css/oldie.css",
            "assets/css/tiny.min.css": "assets/css/tiny.css"
        }
    }
};