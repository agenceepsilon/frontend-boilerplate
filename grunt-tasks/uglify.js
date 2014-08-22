module.exports = {
    options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    js: {
        files: {
            "assets/js/main.min.js": "assets/js/main.js"
        }
    }
};