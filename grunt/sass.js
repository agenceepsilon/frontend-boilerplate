// ============================================================================================= //
//                                         GRUNT - SASS                                          //
// ============================================================================================= //

module.exports = {
    options: {
        outputStyle: 'expanded',
        precision: 3,
        sourcemap: false
    },
    theme: {
        files: {
            '<%= css %>/style.css': '<%= assets %>/sass/style.scss',
            '<%= css %>/oldie.css': '<%= assets %>/sass/oldie.scss',
            '<%= css %>/tiny.css': '<%= assets %>/sass/tiny.scss'
        }
    }
};