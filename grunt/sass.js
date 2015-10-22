// ============================================================================================= //
//                                         GRUNT - SASS                                          //
// ============================================================================================= //

module.exports = {
    options: {
        outputStyle: 'nested',
        precision: 3,
        sourceMap: false
    },
    theme: {
        files: {
            '<%= css %>/style.css': '<%= assets %>/sass/style.scss',
            '<%= css %>/oldie.css': '<%= assets %>/sass/oldie.scss',
            '<%= css %>/tiny.css': '<%= assets %>/sass/tiny.scss'
        }
    }
};
