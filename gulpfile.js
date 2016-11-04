var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create();

// tasks

gulp.task('scripts', function () {
    gulp.src(['source/scripts/**/*.js', '!source/scripts/**/*.min.js'])
        .pipe(plumber())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('public/scripts'))
        .pipe(browserSync.stream());;
});

gulp.task('sass', function () {
    gulp.src('source/styles/*.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer('last 40 versions'))
        .pipe(gulp.dest('public/styles/'))
        .pipe(browserSync.stream());;
});

gulp.task('html', function () {
    gulp.src('*.html')
        .pipe(browserSync.stream());;
});

gulp.task('browser-sync', ['sass', 'scripts'], function () {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    gulp.watch('*.html', ['html']);
    gulp.watch('source/scripts/**/*.js', ['scripts']);
    gulp.watch('source/styles/**/*.sass', ['sass']);
});

// default tasks 

gulp.task('default', ['scripts', 'sass', 'html', 'browser-sync']);