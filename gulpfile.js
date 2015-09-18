var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('default', function () {
    // place code for your default task here
});

gulp.task('sass', function () {
    gulp.src([
        'assets/sass/style.scss',
        'assets/sass/oldie.scss',
        'assets/sass/tiny.scss'
    ])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/css'));
});

gulp.src('assets/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass)
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('assets/css'));