// ============================================================================================= //
//                                        GRUNT - UGLIFY                                         //
// ============================================================================================= //

module.exports = {
    options: {
        mangle: false,
        sourceMap: true,
        sourceMapName: '<%= assets.js %>/app.map'
    },

    dist: {
        files: {
            '<%= assets.js %>/app.min.js': '<%= resources.js %>/app.js'
        }
    }
};
