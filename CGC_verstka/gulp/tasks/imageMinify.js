const { src, dest} = require('gulp')
const imagemin = require('gulp-imagemin')

// module.exports = function imageMinify() {
//   return src('src/img/**/*.{gif,png,jpg,svg,webp}')
//     .pipe(imagemin([
//       imagemin.gifsicle({ interlaced: true }),
//       imagemin.mozjpeg({
//         quality: 75,
//         progressive: true
//       }),
//       imagemin.optipng({ optimizationLevel: 5 }),
//       imagemin.svgo({
//         plugins: [
//           { removeViewBox: true },
//           { cleanupIDs: false }
//         ]
//       })
//     ]))
//     .pipe(dest('dist/img'))
// }



module.exports = function imageMinify() {
  return src('src/img/**/*.{gif,png,jpg,svg,webp}')
    .pipe(dest('dist/img'))
}