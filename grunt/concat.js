// ============================================================================================= //
//                                        GRUNT - CONCAT                                         //
// ============================================================================================= //

module.exports = {
    options: {
        separator: ';'
    },
    libs: {
        src: [
            '<%= npm_vendor %>/jquery/dist/jquery.js'
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
