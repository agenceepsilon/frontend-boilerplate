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
            '<%= css %>/boilerplate.css': '<%= resources.sass %>/boilerplate.scss',
            '<%= css %>/app.css': '<%= resources.sass %>/app.scss',
            '<%= css %>/oldie.css': '<%= resources.sass %>/oldie.scss',
            '<%= css %>/tiny.css': '<%= resources.sass %>/tiny.scss'
        }
    }
};
