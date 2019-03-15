/**
 *  Initialize Gulp
 */
var gulp = require('gulp');

/**
 *  Load Gulp Dependencies
 */
var sass = require('gulp-sass');
var minifycss = require('gulp-clean-css');
//var rename = require('gulp-rename');
var log = require('fancy-log');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();

function scss() {
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
}

function callBrowserSync() {
    browserSync.init({
        proxy: "https://levon.test", // this proxys my dev site to localhost:{port}
        open: false,
        port: 9999,
        https: {
            key: "/Users/leonmagee/.localhost-ssl/localhost.key",
            cert: "/Users/leonmagee/.localhost-ssl/localhost.crt"
        }
    });
}

function watch() {

    /**
     *  Watch PHP files for changes
     */
    var php = '**/*.php';
    gulp.watch(php).on('change', function (file) {
        gulp.src(php).pipe(browserSync.stream());
        log('[ ' + file.path + ' ]');
    });

    var js = 'assets/js/**/*.js';
    gulp.watch(js).on('change', function (file) {
        gulp.src(js).pipe(browserSync.stream());
        log('[ ' + file.path + ' ]');
    });

    /**
     *  Watch SCSS files for changes - trigger 'scss' function
     */
    gulp.watch('assets/scss/**/*.scss', function() {
        console.log('watching?');
        return scss;
    });
        // Endless stream mode
    // return watch('assets/scss/**/*.scss', { ignoreInitial: false })
    //         .pipe(gulp.dest('build'));
}

gulp.task('callback', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch('css/**/*.css', function () {
        gulp.src('css/**/*.css')
            .pipe(gulp.dest('build'));
    });
});

var build = gulp.series(callBrowserSync, scss, watch);

gulp.task('default', build);