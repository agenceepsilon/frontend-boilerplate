// ============================================================================================= //
//                                        GRUNT - CSSMIN                                         //
// ============================================================================================= //

module.exports = {
    options: {
        banner: '/*! <%= package.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    css: {
        files: {
            '<%= css %>/style.min.css': '<%= css %>/style.css',
            '<%= css %>/oldie.min.css': '<%= css %>/oldie.css',
            '<%= css %>/tiny.min.css': '<%= css %>/tiny.css'
        }
    }
};