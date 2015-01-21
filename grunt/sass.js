// ============================================================================================= //
//                                         GRUNT - SASS                                          //
// ============================================================================================= //

module.exports = {
    options: {
        debugInfo: false,
        noCache: true,
        precision: 3,
        style: 'expanded',
        sourcemap: 'none'
    },
    theme: {
        files: {
            '<%= css %>/style.css': '<%= assets %>/sass/style.scss',
            '<%= css %>/oldie.css': '<%= assets %>/sass/oldie.scss',
            '<%= css %>/tiny.css': '<%= assets %>/sass/tiny.scss'
        }
    }
};