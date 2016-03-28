var autoprefixer = require('autoprefixer');
var browserify   = require('browserify');
var browserSync  = require('browser-sync').create();
var gulp         = require('gulp');
var gutil        = require('gulp-util');
var postcss      = require('gulp-postcss');
var rename       = require('gulp-rename');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var source       = require('vinyl-source-stream');
var streamify    = require('gulp-streamify');
var uglify       = require('gulp-uglify');

// Static Server + watching scss/html files
gulp.task('serve', ['fonts', 'sass', 'browserify'], function() {

  browserSync.init({
      proxy: "localhost:8888/readily/"
  });

  gulp.watch("scss/**/*.scss", ['sass']);
  gulp.watch("js/main.js", ['browserify']);
  gulp.watch("./**/*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
  return gulp.src("scss/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([ autoprefixer({ browsers: 
      [
        "Android 2.3",
        "Android >= 4",
        "Chrome >= 20",
        "Firefox >= 24",
        "Explorer >= 8",
        "iOS >= 6",
        "Opera >= 12",
        "Safari >= 6"
      ] 
    }) ]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("."))
    .pipe(browserSync.stream());
});

gulp.task('browserify', function() {
  var bundleStream = browserify('./js/main.js').bundle()
 
  bundleStream
    .pipe(source('js/main.js'))
    .pipe(streamify(uglify()))
    .pipe(rename('main.min.js'))
    .pipe(gulp.dest('js'))
    .pipe(browserSync.stream());
});

gulp.task('fonts', function() {
  return gulp.src("node_modules/font-awesome/fonts/*")
    .pipe(gulp.dest('fonts'));
});

gulp.task('default', ['serve']);