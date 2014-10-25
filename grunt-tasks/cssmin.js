module.exports = {
    options: {
        banner: '/*! <%= pkg.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    css: {
        files: {
            "<%= assets.css %>/dist/style.min.css": "<%= assets.css %>/style.css",
            "<%= assets.css %>/dist/oldie.min.css": "<%= assets.css %>/oldie.css",
            "<%= assets.css %>/dist/tiny.min.css": "<%= assets.css %>/tiny.css"
        }
    }
};