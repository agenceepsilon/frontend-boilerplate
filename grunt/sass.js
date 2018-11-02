// ============================================================================================= //
//                                         GRUNT - SASS                                          //
// ============================================================================================= //

const sass = require('node-sass');

module.exports = {
    options: {
        implementation: sass,
        outputStyle: 'nested',
        precision: 3,
        sourceMap: true
    },

    dist: {
        files: {
            '<%= assets.css %>/app.css': '<%= resources.sass %>/app.scss',
            '<%= assets.css %>/tiny.css': '<%= resources.sass %>/tiny.scss'
        }
    }
};
