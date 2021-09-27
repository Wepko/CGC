const { src, dest} = require('gulp')
const webpack = require('webpack-stream')
const rename = require('gulp-rename')

const webpackConfig = {
  mode: 'production',
  performance: { hints: false },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /(node_modules)/,
        loader: 'babel-loader',
        query: {
          presets: ['@babel/env'],
          plugins: ['babel-plugin-root-import']
        }
      }
    ]
  }
}


// module.exports = function scripts() {
//   return src('src/js/*.js')
//     .pipe(webpack())
//     .pipe(rename('main.min.js'))
//     .pipe(dest('dist/js'))
// }

module.exports = function scripts() {
	return src('src/js/*.js')
		.pipe(webpack({
			mode: 'production',
			performance: { hints: false },
			module: {
				rules: [
					{
						test: /\.(js)$/,
						exclude: /(node_modules)/,
						loader: 'babel-loader',
					}
				]
			}
		})).on('error', function handleError() {
			this.emit('end')
		})
		.pipe(rename('main.min.js'))
		.pipe(dest('dist/js'))
}