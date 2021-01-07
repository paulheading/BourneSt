
'use strict';

const gulp        = require('gulp'),
      babel       = require('gulp-babel'),
      maps        = require('gulp-sourcemaps'),
      rename      = require('gulp-rename'),
      uglify      = require('gulp-uglify'),
      concat      = require('gulp-concat'),
      imagemin    = require('gulp-imagemin'),
      browserSync = require('browser-sync').create(),
      del         = require('del'),
      cachebust   = new Date().getTime(),
      dbox        = '../../../../../Dropbox/Sites/bs/';

exports.minify = (done) => {
  return gulp.src('js/concat/custom.js')
  .pipe(babel({presets:['@babel/preset-env']}))
  .pipe(uglify())
  .pipe(maps.write('.'))
  .pipe(gulp.dest('js/minify'))
  done();
}

exports.collect = (done) => {
  return gulp.src([
  'js/concat/footer.js',
  'js/minify/custom.js'])
  .pipe(concat('js/minify/scripts.' + cachebust + '.min.js'))
  .pipe(gulp.dest('.'));
  done();
}

exports.move = (done) => {
  return gulp
  .src('js/minify/scripts.*.min.js')
  .pipe(gulp.dest('./js'));
  done();
}

exports.tidy = (done) => {
  return del([
  'js/minify',
  'js/concat']);
  done();
}

exports.send = (done) => {
  return gulp
    .src([
      '**/*',
      '!./node_modules/**'
    ])
    .pipe(gulp.dest(dbox));
  done();
}

exports.crunch = (done) => {
  return gulp.src(['imgs/*/*','imgs/*'])
  .pipe(imagemin())
  .pipe(gulp.dest('imgs'));
  done();
}
