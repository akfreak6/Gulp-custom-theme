var {gulp, series, parallel, src, dest, task, watch}= require('gulp');
var browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
var scsslint = require('gulp-scss-lint');
 
function browseSync() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
};
task(browseSync);

function sas(){
    return src('./web/app/scss/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest('./web/app/css'))
};
task(sas);

function scssLint() {
    return src('./web/app/scss/work.scss')
      .pipe(scsslint());
  };
task(scssLint);

function watchFile(){
    watch(('./app/scss**/*.scss'), sas);
}

task('watch', watchFile);

exports.default = series(parallel(browseSync,sas, scssLint),watchFile);

