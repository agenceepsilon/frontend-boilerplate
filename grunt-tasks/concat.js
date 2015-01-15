// ============================================================================================= //
//                                        GRUNT - CONCAT                                         //
// ============================================================================================= //

module.exports = {
    options: {
        separator: ';'
    },
    libs: {
        src: [
            '<%= assets.vendor %>/jquery/dist/jquery.js',
            '<%= assets.vendor %>/jquery.notready/dist/jquery.ready.min.js'
        ],
        dest: '<%= assets.js.dist %>/libs.js'
    },
    theme: {
        src: [
            '<%= assets.js.main %>/main.js'
        ],
        dest: '<%= assets.js.dist %>/theme.js'
    }
};