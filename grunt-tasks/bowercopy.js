// ============================================================================================= //
//                                      GRUNT - BOWER COPY                                       //
// ============================================================================================= //

module.exports = {
    options: {
        runBower: true
    },
    libs: {
        options: {
            destPrefix: '<%= assets.js.vendor %>'
        },
        files: {
            'jquery.js': 'jquery/dist/jquery.js',
            'jquery.notready.min.js': 'jquery.notready/dist/jquery.notready.min.js',
            'jquery.ready.min.js': 'jquery.notready/dist/jquery.ready.min.js',
            'modernizr.js': 'modernizr/modernizr.js'
        }
    },
    sass: {
        options: {
            destPrefix: '<%= assets.sass.vendor %>'
        },
        files: {
            '<%= assets.sass.vendor %>/sass-mercury': 'sass-mercury'
        }
    }
};