// ============================================================================================= //
//                                       GRUNT - SASSLINT                                        //
// ============================================================================================= //

module.exports = {
    allFiles: [
        '<%= assets %>/sass/**/*.scss'
    ],
    options: {
        config: '.scss-lint.yml',
        reporterOutput: 'scss-lint-report.xml',
        colorizeOutput: true,
        exclude: [
            '<%= assets %>/sass/vendor/*.scss',
            '<%= assets %>/sass/_global/_print.scss'
        ]
    }
};
