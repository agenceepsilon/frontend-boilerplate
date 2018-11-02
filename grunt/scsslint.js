// ============================================================================================= //
//                                       GRUNT - SCSSLINT                                        //
// ============================================================================================= //

module.exports = {
    options: {
        config: '.scss-lint.yml',
        reporterOutput: 'scss-lint-report.xml',
        colorizeOutput: true,
        force: true,
        exclude: [
            '<%= resources.sass %>/_boilerplate.scss',
            '<%= resources.sass %>/_global/_print.scss',
            '<%= resources.sass %>/vendor/*.scss'
        ]
    },

    dist: [
        '<%= resources.sass %>/**/*.scss'
    ]
};
