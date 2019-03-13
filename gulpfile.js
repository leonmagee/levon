/**
 *  Initialize Gulp
 */
var gulp = require('gulp');

/**
 *  Load Gulp Dependencies
 */
var sass = require('gulp-sass');
var minifycss = require('gulp-clean-css');
var rename = require('gulp-rename');
var log = require('fancy-log');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();

// chalk colors: red | blue | yellow | green | cyan | magenta | white

/**
 *  I need to figure out how to get live reload working... this is such a PITA...
 *  I can either switch to browser sync or else try the new method outlined in the video...
 */

//gulp.task('default', 'scss');

gulp.task('scss', function () {
    gulp.src([
        'assets/css/normalize.css',
        'assets/css/style.css', 
        'assets/css/flaticon.css', 
        'assets/css/fontello.css', 
        'assets/css/fontawesome-all.css', 
        'assets/scss/import.scss'
        ])
        .pipe(sass({style: 'compressed', errLogToConsole: true}))
        .pipe(concat('main.min.css'))
        .pipe(minifycss())
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
    log('Compiled!');
});

// gulp.task('browser-sync', function() {
//     browserSync.init({
//         proxy: "https://levon.test", // this proxys my dev site to localhost:3000
//         open: false,
//         port: 9999,
//         https: {
//             key: "/Users/leonmagee/.localhost-ssl/key.pem",
//             cert: "/Users/leonmagee/.localhost-ssl/cert.pem"
//         }
//     });
// });

// gulp.task('watch', function () {

//     /**
//      *  Watch PHP files for changes
//      */
//     var php = '**/*.php';

//     gulp.watch(php).on('change', function (file) {

//         gulp.src(php).pipe(browserSync.stream());

//         log('[ ' + file.path + ' ]');
//     });

//     var js = 'assets/js/**/*.js';

//     gulp.watch(js).on('change', function (file) {

//         gulp.src(js).pipe(browserSync.stream());

//         log('[ ' + file.path + ' ]');
//     });

//     /**
//      *  Watch SCSS files for changes - trigger 'scss' task
//      */
//     gulp.watch('assets/scss/**/*.scss', ['scss']);
// });

//gulp.task('default', ['scss', 'watch', 'browser-sync']);
gulp.task('default', ['scss']);

