var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create(),
    babel = require('gulp-babel'),
    concat = require('gulp-concat');

// tasks

gulp.task('js', function () {
    gulp.src("src/js/*")
        .pipe(plumber())
        .pipe(concat('main.js'))
        .pipe(babel({
            presets: ['es2015']
        }))
        .on('error', console.error.bind(console))
        .pipe(gulp.dest('public/'))
        .pipe(browserSync.stream());
});

gulp.task('sass', function () {
    gulp.src('src/main.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer('last 40 versions'))
        .pipe(gulp.dest('public/'))
        .pipe(browserSync.stream());
});

gulp.task('html', function () {
    browserSync.reload();
});

gulp.task('browser-sync', ['sass', 'js'], function () {
    browserSync.init({
        server: {
            baseDir: "./public"
        }
    });

    gulp.watch('public/*.html', ['html']);
    gulp.watch('src/**/*.js', ['js']);
    gulp.watch(['src/**/*.scss', 'src/**/**/*.scss'], ['sass']);
});

// default tasks 

gulp.task('default', ['js', 'sass', 'html', 'browser-sync']);