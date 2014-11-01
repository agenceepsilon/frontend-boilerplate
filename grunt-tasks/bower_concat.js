// ============================================================================================= //
//                                     GRUNT - BOWER CONCAT                                      //
// ============================================================================================= //

module.exports = {
    all: {
        dest: '<%= assets.js %>/dist/bower.js',
        exclude: [
            'modernizr',
            'sass-mercury'
        ],
        mainFiles: {
            'jquery': 'dist/jquery.js',
            'jquery.notready': 'dist/jquery.ready.min.js'
        },
        bowerOptions: {
            relative: false
        }
    }
};