var {gulp, series, parallel, src, dest, task, watch}= require('gulp');
const sass = require('gulp-sass')(require('sass'));
var scsslint = require('gulp-scss-lint');

function sas(){
    return src('./web/themes/custom/hashirama/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest('./web/themes/custom/hashirama/css'))
};
task(sas);

function scssLint() {
    return src('./web/themes/custom/hashirama/scss/*.scss')
      .pipe(scsslint());
  };
task(scssLint);

function watchFile(){
    watch(('./web/themes/custom/hashirama/scss/**/*.scss'), sas);
}

task('watch', watchFile);

exports.default = series(parallel(sas, scssLint),watchFile);