// ============================================================================================= //
//                                       GRUNT - SCSSLINT                                        //
// ============================================================================================= //

module.exports = {
    scss: [
        '<%= assets %>/sass/**/*.scss'
    ],
    options: {
        config: '.scss-lint.yml',
        reporterOutput: 'scss-lint-report.xml',
        colorizeOutput: true,
        force: true,
        exclude: [
            '<%= assets %>/sass/boilerplate.scss',
            '<%= assets %>/sass/_global/_print.scss',
            '<%= assets %>/sass/vendor/*.scss'
        ]
    }
};
