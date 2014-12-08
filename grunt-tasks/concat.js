// ============================================================================================= //
//                                        GRUNT - CONCAT                                         //
// ============================================================================================= //

module.exports = {
    options: {
        separator: ';'
    },
    libs: {
        src: [
            '<%= assets.js.vendor %>/jquery.js',
            '<%= assets.js.vendor %>/jquery.ready.min.js'
        ],
        dest: '<%= assets.js.dist %>/bower.js'
    },
    theme: {
        src: [
            '<%= assets.js.main %>/main.js'
        ],
        dest: '<%= assets.js.dist %>/build.js'
    }
};