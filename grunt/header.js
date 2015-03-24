// ============================================================================================= //
//                                        GRUNT - HEADER                                         //
// ============================================================================================= //

module.exports = {
    options: {
        text: '/*! <%= package.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\r'
    },
    css: {
        files: {
            '<%= css %>/style.min.css': '<%= css %>/style.min.css',
            '<%= css %>/oldie.min.css': '<%= css %>/oldie.min.css',
            '<%= css %>/tiny.min.css': '<%= css %>/tiny.min.css'
        }
    },
    js: {
        files: {
            '<%= js %>/dist/libs.min.js': '<%= js %>/dist/libs.min.js',
            '<%= js %>/dist/theme.min.js': '<%= js %>/dist/theme.min.js'
        }
    }
};