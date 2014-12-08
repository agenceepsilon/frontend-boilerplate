// ============================================================================================= //
//                                        GRUNT - UGLIFY                                         //
// ============================================================================================= //

module.exports = {
    options: {
        banner: '/*! <%= pkg.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    libs: {
        files: {
            "<%= assets.js.dist %>/libs.min.js": "<%= assets.js.dist %>/libs.js"
        }
    },
    theme: {
        files: {
            "<%= assets.js.dist %>/build.min.js": "<%= assets.js.dist %>/build.js"
        }
    }
};