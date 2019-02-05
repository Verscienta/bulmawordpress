'use strict';

var gulp = require('gulp'),//http://gulpjs.com/
    util = require('gulp-util'),//https://github.com/gulpjs/gulp-util
    sass = require('gulp-sass'),//https://www.npmjs.org/package/gulp-sass
    autoprefixer = require('gulp-autoprefixer'),//https://www.npmjs.org/package/gulp-autoprefixer
    cleanCSS = require('gulp-clean-css'),//https://www.npmjs.org/package/gulp-clean-css
    rename = require('gulp-rename'),//https://www.npmjs.org/package/gulp-rename
    sourcemaps = require('gulp-sourcemaps')

sass.compiler = require('node-sass');

gulp.task('sass', function (done) {
    return gulp.src('frontend/bulmawordpress/bulmawordpress.sass')
        .pipe(sass.sync({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(autoprefixer('last 3 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(gulp.dest('frontend/bulmawordpress/css'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.init())
        .pipe(cleanCSS())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('frontend/bulmawordpress/css'));
    done();
});

gulp.task('sass:watch', function () {
    gulp.watch('frontend/bulmawordpress/**/*.sass', ['sass']);
});