const { src, dest } = require('gulp')
const pug = require('gulp-pug')
const config = require('../config.js')


module.exports = function pugtohtml() {
  return  src('src/**/*.html')
    .pipe(dest('dist'))
}