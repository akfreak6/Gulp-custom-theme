var {gulp, series, parallel, src, dest, task, watch}= require('gulp');
var browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
var csslint = require('gulp-csslint');

 
function browseSync() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
};
task(browseSync);

function sas(){
    return src('./app/scss/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest('./app/css'))
};
task(sas);

  function lintCss() {
    gulp.src('client/css/*.css')
      .pipe(csslint())
      .pipe(csslint.formatter());
  };
task(lintCss)

function watchFile(){
    watch(('./app/scss**/*.scss'), sas);
}

task('watch', watchFile);

exports.default = series(parallel(browseSync,sas,lintCss),watchFile);