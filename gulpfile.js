var gulp = require('gulp'),
    sass = require('gulp-sass'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create(),
    babel = require('gulp-babel'),
    bundle = require('gulp-bundle-assets'),
    rename = require('gulp-rename');

// tasks

gulp.task('bundlejs', ['babel'], function () {
    return gulp.src('./bundle.config.js')
        .pipe(bundle())
        .pipe(gulp.dest('./src/'));
});

gulp.task('babel', function () {
    gulp.src("src/*.js")
        .pipe(rename({
            basename: "main",
        }))
        .pipe(plumber())
        .pipe(babel({
            presets: ['es2015']
        }))
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

gulp.task('browser-sync', ['sass', 'bundlejs'], function () {
    browserSync.init({
        server: {
            baseDir: "./public"
        }
    });

    gulp.watch('public/*.html', ['html']);
    gulp.watch('src/**/*.js', ['bundlejs']);
    gulp.watch('src/**/*.scss', ['sass']);
});

// default tasks 

gulp.task('default', ['bundlejs', 'babel', 'sass', 'html', 'browser-sync']);