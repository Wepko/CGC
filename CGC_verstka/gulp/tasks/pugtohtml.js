const { src, dest } = require('gulp')
const pug = require('gulp-pug')
const config = require('../config.js')
//const include = require('gulp-file-include');


const plumber = require('gulp-plumber')
const pugLinter = require('gulp-pug-linter')

//const bemValidator = require('gulp-html-bem-validator');

//const { htmlValidator } = require('gulp-w3c-html-validator');


module.exports = function pug2html() {
  return src('src/pages/*.pug')
    .pipe(plumber())
    .pipe(pug())
    // .pipe(htmlValidator.analyzer())
    // .pipe(htmlValidator.reporter())
   // .pipe(bemValidator())
    .pipe(dest('dist'))
}

// includes
// module.exports = function pugtohtml() {
//   return  src('src/**/**.html')
//     .pipe(include({prefix: '@@'}))
//     .pipe(dest('dist'))
// }