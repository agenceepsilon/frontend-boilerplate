module.exports = {
    options: {
        precision: 3,
        sourceMap: false,
        style: "nested",
        update: true
    },
    theme: {
        files: {
            'assets/css/style.css': 'assets/sass/style.scss',
            'assets/css/oldie.css': 'assets/sass/oldie.scss',
            'assets/css/tiny.css': 'assets/sass/tiny.scss'
        }
    }
};