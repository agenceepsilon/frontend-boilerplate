// ============================================================================================= //
//                                         GRUNT - SASS                                          //
// ============================================================================================= //

module.exports = {
    options: {
        debugInfo: false,
        noCache: true,
        precision: 3,
        style: "expanded",
        sourcemap: "none"
    },
    theme: {
        files: {
            '<%= assets.css %>/style.css': '<%= assets.sass.main %>/style.scss',
            '<%= assets.css %>/oldie.css': '<%= assets.sass.main %>/oldie.scss',
            '<%= assets.css %>/tiny.css': '<%= assets.sass.main %>/tiny.scss'
        }
    }
};