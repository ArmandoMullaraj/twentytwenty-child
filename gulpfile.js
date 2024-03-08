var gulp = require("gulp"),
	plumber = require("gulp-plumber"),
	watch = require("gulp-watch"),
	minifycss = require("gulp-minify-css"),
	jshint = require("gulp-jshint"),
	stylish = require("jshint-stylish"),
	uglify = require("gulp-uglify"),
	rename = require("gulp-rename"),
	notify = require("gulp-notify"),
	include = require("gulp-include"),
	sass = require('gulp-sass')(require('sass')),
	browserSync = require("browser-sync").create(),
	requirejsOptimize = require("gulp-requirejs-optimize");

var onError = function (err) {
	console.log("An error occurred:", err.message);
	this.emit("end");
};

gulp.task("scss", function () {
	return gulp
		.src("./scss/style.scss")
		.pipe(plumber({ errorHandler: onError }))
		.pipe(sass())
		.pipe(gulp.dest("."))
		.pipe(minifycss())
		.pipe(rename({ suffix: ".min" }))
		.pipe(gulp.dest("."))
		.pipe(browserSync.stream());
});

gulp.task("minifyjs", function () {
	return gulp
		.src("./js/main.js")
		.pipe(
			requirejsOptimize({
				baseUrl: "js",
				paths: {
					jquery: "vendor/jquery-3.1.1.min",
					slick: "vendor/slick.min",
					"js-cookie": "vendor/js.cookie.min",
				},
			})
		)
		.pipe(rename({ suffix: ".min" }))
		.pipe(gulp.dest("./js/"))
		.pipe(browserSync.stream());
});

gulp.task("watch", function () {
	browserSync.init({
		watch: true,
		proxy: "pmj.test",
		port: 80,
	});

	gulp.watch("./scss/**/*.scss", gulp.series("scss")).on(
		"change",
		browserSync.reload
	);
	gulp.watch(["./js/*.js", "!./js/*.min.js"], gulp.series("minifyjs")).on(
		"change",
		browserSync.reload
	);
	gulp.watch("./**/*.php").on("change", browserSync.reload);
});

gulp.task("default", gulp.series("scss", "minifyjs", "watch"));
gulp.task("build", gulp.series("scss", "minifyjs"));
