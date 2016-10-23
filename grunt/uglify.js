// ============================================================================================= //
//                                        GRUNT - UGLIFY                                         //
// ============================================================================================= //

module.exports = {
    options: {
        mangle: false,
        sourceMap: true,
        sourceMapName: 'assets/js/app.map'
    },

    app: {
        files: {
            'assets/js/app.min.js': 'resources/assets/js/app.js'
        }
    }
};
