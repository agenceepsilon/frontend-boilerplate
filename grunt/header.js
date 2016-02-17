// ============================================================================================= //
//                                        GRUNT - HEADER                                         //
// ============================================================================================= //

module.exports = {
    options: {
        text: '/*! <%= package.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\r'
    },
    css: {
        files: {
            '<%= css %>/style.css': '<%= css %>/style.css',
            '<%= css %>/oldie.css': '<%= css %>/oldie.css',
            '<%= css %>/tiny.css': '<%= css %>/tiny.css'
        }
    }
};
