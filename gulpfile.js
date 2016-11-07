/**
 *  Initialize Gulp
 */
var gulp = require('gulp');

/**
 *  Load Gulp Dependencies
 */
var sass = require('gulp-sass');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var util = require('gulp-util');
var browserSync = require('browser-sync').create();

// chalk colors: red | blue | yellow | green | cyan | magenta | white

/**
 *  I need to figure out how to get live reload working... this is such a PITA...
 *  I can either switch to browser sync or else try the new method outlined in the video...
 */

gulp.task('scss', function () {
    gulp.src(['assets/scss/import.scss'])
        .pipe(sass({style: 'compressed', errLogToConsole: true}))
        .pipe(rename('main.min.css'))
        .pipe(minifycss())
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
    util.log(util.colors.red('Compiled!'));
});

gulp.task('default', ['scss', 'watch', 'browser-sync']);


gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "www.levon.dev", // this proxys my dev site to localhost:3000
        open: false,
        port: 9999
    });
});

gulp.task('watch', function () {

    /**
     *  Watch PHP files for changes
     */
    var php = '**/*.php';

    gulp.watch(php).on('change', function (file) {

        gulp.src(php).pipe(browserSync.stream());

        util.log(util.colors.blue('[ ' + file.path + ' ]'));
    });

    /**
     *  Watch SCSS files for changes - trigger 'scss' task
     */
    gulp.watch('assets/scss/**/*.scss', ['scss']);
});
