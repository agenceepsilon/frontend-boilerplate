module.exports = {
    all: {
        dest: 'assets/js/dist/bower.js',
        exclude: [
            'modernizr',
            'sass-mercury'
        ],
        mainFiles: {
            'jquery': 'dist/jquery.js',
            'jquery.notready': 'assets/js/jquery.ready.js'
        },
        bowerOptions: {
            relative: false
        }
    }
};