// ============================================================================================= //
//                                         GRUNT - SASS                                          //
// ============================================================================================= //

module.exports = {
    options: {
        outputStyle: 'nested',
        precision: 3,
        sourceMap: true
    },

    app: {
        files: {
            '<%= assets.css %>/boilerplate.css': '<%= resources.sass %>/boilerplate.scss',
            '<%= assets.css %>/app.css': '<%= resources.sass %>/app.scss',
            '<%= assets.css %>/oldie.css': '<%= resources.sass %>/oldie.scss',
            '<%= assets.css %>/tiny.css': '<%= resources.sass %>/tiny.scss'
        }
    }
};
