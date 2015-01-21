// ============================================================================================= //
//                                        GRUNT - CONCAT                                         //
// ============================================================================================= //

module.exports = {
    options: {
        separator: ';'
    },
    libs: {
        src: [
            '<%= vendor %>/vendor/jquery/dist/jquery.js',
            '<%= vendor %>/vendor/jquery.notready/dist/jquery.ready.min.js'
        ],
        dest: '<%= js %>/dist/libs.js'
    },
    theme: {
        src: [
            '<%= js %>/main.js'
        ],
        dest: '<%= js %>/dist/theme.js'
    }
};