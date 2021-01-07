"use strict";

const gulp = require("gulp");
const maps = require("gulp-sourcemaps");
const sass = require("gulp-sass");
const Concat = require("./gulp/concat.js");
const Reset = require("./gulp/reset.js");
const Util = require("./gulp/util.js");

gulp.task("concat:custom", Concat.custom);
gulp.task("concat:header", Concat.header);
gulp.task("concat:footer", Concat.footer);

gulp.task("reset:all", Reset.all);
gulp.task("reset:js", Reset.js);
gulp.task("reset:css", Reset.css);

gulp.task("compile", Util.compile);
gulp.task("minify", Util.minify);
gulp.task("collect", Util.collect);
gulp.task("crunch", Util.crunch);
gulp.task("move", Util.move);
gulp.task("tidy", Util.tidy);
gulp.task("send", Util.send);

gulp.task("compile", function (done) {
  gulp
    .src("scss/style.scss")
    .pipe(maps.init())
    .pipe(sass({ outputStyle: "compact" }))
    .pipe(maps.write("."))
    .pipe(gulp.dest("."));
  done();
});

gulp.task("watch", function (done) {
  gulp.watch(["js/custom/**", "js/vendor/**"], gulp.series(["scripts"]));
  gulp.watch("scss/**", gulp.series(["compile"]));
  done();
});

gulp.task(
  "concat",
  gulp.parallel(["concat:custom", "concat:header", "concat:footer"])
);

gulp.task("styles", gulp.series(["reset:css", "compile", "send"]));

gulp.task(
  "scripts",
  gulp.series([
    "reset:js",
    "concat",
    "minify",
    "collect",
    "move",
    "tidy",
    "send",
  ])
);

gulp.task("default", gulp.series(["reset:all", "styles", "scripts"]));
