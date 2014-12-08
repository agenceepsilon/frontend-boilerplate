// ============================================================================================= //
//                                        GRUNT - UGLIFY                                         //
// ============================================================================================= //

module.exports = {
    options: {
        banner: '/*! <%= pkg.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    bower: {
        files: {
            "<%= assets.js.dist %>/bower.min.js": "<%= assets.js.dist %>/bower.js"
        }
    },
    theme: {
        files: {
            "<%= assets.js.dist %>/build.min.js": "<%= assets.js.dist %>/build.js"
        }
    }
};