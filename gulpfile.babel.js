'use strict';
import { dest, parallel, series, src, watch } from 'gulp';
import yargs from 'yargs';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpackStream from 'webpack-stream';
import browserSync from 'browser-sync';

const path = require('path');

const sass = require('gulp-sass')(require('sass'));
const server = browserSync.create();

const PRODUCTION = yargs.argv.prod;

const paths = {
	styles: {
		src: ['src/assets/scss/main.scss'],
		dest: 'dist/assets/css'
	},

	images: {
		src: 'src/assets/img/**/*.{jpg,jpeg,png,svg,gif}',
		dest: 'dist/assets/img'
	},
	other: {
		src: ['src/assets/**/*', '!src/assets/{img,js,scss}', '!src/assets/{img,js,scss}/**/*'],
		dest: 'dist/assets/'
	},
	scripts: {
		src: ['src/assets/js/main.js'],
		dest: 'dist/assets/js'
	}
}


export const clean = () => del(['dist']) 

export const serve = done => {
	server.init({
		proxy:'http://local.cgc:82/'
	});
	done();
}

export const reload = done => {
	server.reload();
	done();
}

export const style = (done) => {
	return src(paths.styles.src)
		.pipe(gulpif(!PRODUCTION, sourcemaps.init()))
		.pipe(sass().on('error', sass.logError))
		.pipe(gulpif(PRODUCTION, cleanCSS({compatibility: 'ie8'})))
		.pipe(gulpif(!PRODUCTION, sourcemaps.write()))
		.pipe(dest(paths.styles.dest))
		.pipe(server.stream());
}

export const images = () => {
	return src(paths.images.src)
		.pipe(gulpif(PRODUCTION, imagemin()))
		.pipe(dest(paths.images.dest))
}


export const watcher = () => {
	watch('src/assets/scss/**/*.scss', style);
	watch('src/assets/js/**/*.js', series(scripts, reload));
	watch('**/*.php', reload);
	watch(paths.images.src, series(images, reload));
	watch(paths.other.src, series(copy, reload));
}


export const copy = () => {
	return src(paths.other.src)
		.pipe(dest(paths.other.dest))
}

export const scripts = () => {
	return src (paths.scripts.src)
		.pipe(webpackStream({
			mode: 'production',
			performance: { hints: false },
			entry: {
				main : path.resolve(__dirname + "/src/assets/js/main.js"),
				slider : path.resolve(__dirname + "/src/assets/js/components/slider.js")
			},
			output: {
				path: path.resolve(__dirname + "/dist/assets/js"),
				filename: '[name].js'
			},
			module: {
				rules: [
					{
						test: /\.(js)$/,
						exclude: /(node_modules)/,
						loader: 'babel-loader',
					}
				]
			},
			devtool: !PRODUCTION ? 'inline-source-map' : false
		})).on('error', function handleError() {
			this.emit('end')
		})
		.pipe(dest(paths.scripts.dest))
}

export const dev = series(clean, parallel(style, scripts, images, copy), serve, watcher);
export const build = series(clean, parallel(style, scripts, images, copy));

export default dev;