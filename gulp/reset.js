
'use strict';

const gulp = require('gulp'),
      del  = require('del'),
      dbox = '../../../../../Dropbox/Sites/bs/';

exports.all = (done) => {
  return del( dbox, { force: true });
  done();
}

exports.css = (done) => {
  return del([
    '*.css',
    '*.*.map',
    dbox + '*.css',
    dbox + '*.*.map'], { force: true });
  done();
}

exports.js = (done) => {
  return del([
    'js/*',
    '!js/custom',
    '!js/vendor',
    dbox + 'js/*',
    '!' + dbox + 'js/custom',
    '!' + dbox + 'js/vendor'], { force: true });
  done();
}
