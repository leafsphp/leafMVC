/*jshint esversion: 6 */

const gulp   = require('gulp');
const uglify = require("gulp-uglify-es").default;
const sass   = require("gulp-sass");
const babel  = require("gulp-babel");
const concat = require("gulp-concat");

gulp.task("js", function (cb) {
    return gulp
        .src("public/assets/src/**/*.js")
        .pipe(babel({ presets: ["@babel/preset-env"].map(require.resolve) }))
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest("public/assets/dist/js"));
});

gulp.task('css', function () {
    return gulp
        .src('public/assets/src/**/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(concat('app.css'))
        .pipe(gulp.dest('public/assets/dist/css'));
});

gulp.task('watch', function () {
    gulp.watch("public/assets/src/**/*.js", gulp.parallel(['js']));
    gulp.watch("public/assets/src/**/*.scss", gulp.parallel(["css"]));
});

gulp.task("default", gulp.parallel(["watch"]));
