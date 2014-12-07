// ============================================================================================= //
//                                        GRUNT - CONCAT                                         //
// ============================================================================================= //

module.exports = {
    options: {
        separator: ';'
    },
    libs: {
        src: [
            '<%= assets.js %>/vendors/jquery.js',
            '<%= assets.js %>/vendors/jquery.ready.min.js'
        ],
        dest: '<%= assets.js %>/dist/bower.js'
    },
    theme: {
        src: [
            '<%= assets.js %>/main.js'
        ],
        dest: '<%= assets.js %>/dist/build.js'
    }
};