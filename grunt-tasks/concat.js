// ============================================================================================= //
//                                        GRUNT - CONCAT                                         //
// ============================================================================================= //

module.exports = {
    options: {
        separator: ';'
    },
    theme: {
        src: [
            '<%= assets.js %>/**.js',
            '!<%= assets.js %>/dist/*.js'
        ],
        dest: '<%= assets.js %>/dist/build.js'
    }
};