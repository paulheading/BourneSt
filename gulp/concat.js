"use strict";

const gulp = require("gulp");
const concat = require("gulp-concat");
const cachebust = new Date().getTime();

exports.custom = (done) => {
  return gulp
    .src(["js/custom/Settings.js", "js/custom/*"])
    .pipe(concat("js/concat/custom.js"))
    .pipe(gulp.dest("."));
  done();
};

exports.header = (done) => {
  return gulp
    .src([
      "js/vendor/header/modernizr.js",
      "js/vendor/header/enquire.js",
      "js/vendor/header/*",
    ])
    .pipe(concat("js/header." + cachebust + ".js"))
    .pipe(gulp.dest("."));
  done();
};

exports.footer = (done) => {
  return gulp
    .src([
      "js/vendor/footer/jcf.js",
      "js/vendor/footer/slick.js",
      "js/vendor/footer/*",
    ])
    .pipe(concat("js/concat/footer.js"))
    .pipe(gulp.dest("."));
  done();
};
