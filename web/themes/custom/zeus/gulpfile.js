var {gulp, series, parallel, src, dest, task, watch}= require('gulp');
const sass = require('gulp-sass')(require('sass'));
var scsslint = require('gulp-scss-lint');

function saas(){
    return src('./scss/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(dest('./css'))
};
task(saas);

function scssLint() {
    return src('./scss/*.scss')
      .pipe(scsslint());
  };
task(scssLint);

function watchFile(){
    watch(('./scss/*.scss'), saas);
}

task('watch', watchFile);

exports.default = series(parallel(saas, scssLint),watchFile);