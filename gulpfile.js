var gulp = require('gulp');
var stylus = require('gulp-stylus');
var del = require('del');
var nib = require('nib');
var ignore = require('gulp-ignore');
var gutil = require('gulp-util')

var paths = {
  stylus: 'styl/**/*.styl'
};

function errorHandler(err){
  gutil.beep();
  gutil.log(err.stack || err.message);
  this.emit('end');
}

gulp.task('stylus', function(){
  return gulp.src(paths.stylus)
    .pipe(ignore.exclude(/[\/\\]_/))
    .pipe(stylus({
      'include css': true,
      use: [nib()]
    }))
    .on('error', errorHandler)
    .pipe(gulp.dest('./'));
});

gulp.task('stylus:watch', function(){
  gulp.watch(paths.stylus, ['stylus']);
});

gulp.task('stylus:clean', function(callback){
  del('css/**/*.css', callback);
});

gulp.task('watch', ['stylus:watch']);

gulp.task('build', ['stylus']);

gulp.task('default', ['build']);