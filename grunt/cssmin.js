// ============================================================================================= //
//                                        GRUNT - CSSMIN                                         //
// ============================================================================================= //

module.exports = {
    options: {
        roundingPrecision: 3
    },
    css: {
        files: {
            '<%= css %>/style.min.css': '<%= css %>/style.css',
            '<%= css %>/oldie.min.css': '<%= css %>/oldie.css',
            '<%= css %>/tiny.min.css': '<%= css %>/tiny.css'
        }
    }
};