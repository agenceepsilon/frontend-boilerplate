module.exports = {
    options: {
        separator: ';'
    },
    js: {
        src: [
            'assets/js/**.js',
            '!assets/js/dist/build.js',
            '!assets/js/dist/build.min.js'
        ],
        dest: 'assets/js/dist/build.js'
    }
};