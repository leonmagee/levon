const { task, watch, series, parallel, src, dest } = require('gulp');
const sass = require('gulp-sass');
const minifycss = require('gulp-clean-css');
const log = require('fancy-log');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

const scss_src = 'assets/scss/**/*.scss';
const css_dest = 'assets/css';
const css_name = 'main.min.css';
const scss_message = '⚡️ 🦕 ⚡️ 🦕 ⚡️ 🦕 ⚡️ 🦕 ⚡️  SCSS has compiled! ⚡️ 🦕 ⚡️ 🦕 ⚡️ 🦕 ⚡️ 🦕 ⚡️'

//const js_src = 'assets/js/scripts.js';


function watcher() {
    watch(scss_src, css);
}

function js() {
    return true;
}

function css() {
    return src([
        'assets/css/normalize.css',
        'assets/css/style.css',
        'assets/css/flaticon.css',
        'assets/css/fontello.css',
        'assets/css/fontawesome-all.css',
        'assets/scss/import.scss'
        ])
        .pipe(sass({style: 'compressed', errLogToConsole: true}))
        .pipe(concat(css_name))
        .pipe(minifycss())
        .pipe(dest(css_dest))
        //.pipe(browserSync.stream())
        .pipe(browserSync.reload({stream:true}))
        .on('end', function(){ log(scss_message); });
    //return log('Compiled!');
}

function callBrowserSync() {
    return browserSync.init({
        proxy: "https://levon.test", // this proxys my dev site to localhost:{port}
        open: false,
        port: 9999,
        https: {
          key: '/Users/cci/local_ssl/localhost.key',
          cert: '/Users/cci/local_ssl/localhost.crt'
        }
    });
}

task('css', css);

task('callBrowserSync', callBrowserSync);

const build = parallel(callBrowserSync, css, watcher);

task('default', build);







// function scss() {
//     gulp.src([
//         'assets/css/normalize.css',
//         'assets/css/style.css',
//         'assets/css/flaticon.css',
//         'assets/css/fontello.css',
//         'assets/css/fontawesome-all.css',
//         'assets/scss/import.scss'
//         ])
//         .pipe(sass({style: 'compressed', errLogToConsole: true}))
//         .pipe(concat('main.min.css'))
//         .pipe(minifycss())
//         .pipe(gulp.dest('assets/css'))
//         //.pipe(browserSync.stream());
//         .pipe(browserSync.reload({stream:true}));
//     log('Compiled!');
// }

// function callBrowserSync() {
//     browserSync.init({
//         proxy: "https://levon.test", // this proxys my dev site to localhost:{port}
//         open: false,
//         port: 9999,
//         https: {
//             key: "/Users/leonmagee/.localhost-ssl/localhost.key",
//             cert: "/Users/leonmagee/.localhost-ssl/localhost.crt"
//         }
//     });
// }

// function watch() {

//     /**
//      *  Watch PHP files for changes
//      */
//     var php = '**/*.php';
//     gulp.watch(php).on('change', function (file) {
//         gulp.src(php).pipe(browserSync.reload({stream:true}));
//         log('[ ' + file.path + ' ]');
//     });

//     var js = 'assets/js/**/*.js';
//     gulp.watch(js).on('change', function (file) {
//         gulp.src(js).pipe(browserSync.reload({stream:true}));
//         log('[ ' + file.path + ' ]');
//     });

//     /**
//      *  Watch SCSS files for changes - trigger 'scss' function
//      */
//     gulp.watch('assets/scss/**/*.scss', function() {
//         //console.log('watching?');
//         return scss;
//     });
//         // Endless stream mode
//     // return watch('assets/scss/**/*.scss', { ignoreInitial: false })
//     //         .pipe(gulp.dest('build'));
// }

// // gulp.task('callback', function () {
// //     // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
// //     return watch('css/**/*.css', function () {
// //         gulp.src('css/**/*.css')
// //             .pipe(gulp.dest('build'));
// //     });
// // });

// //var build = gulp.series(callBrowserSync, scss, watch);
// var build = gulp.series(watch);

// gulp.task('default', build);
