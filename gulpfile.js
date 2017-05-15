var themename = "boomnews";

var gulp = require('gulp'),
    zip = require('gulp-zip'),
    browserSync = require('browser-sync');

var cssSources = ['**/*.css'],
    phpSources = ['**/*.php'],
    jsSources = ['**/*.js'];

gulp.task('zip', function () {
  return gulp.src(['./**', '!package.json', '!gulpfile.js', '!.git/', '!.git/**', '!.gitignore', '!.DS_Store', '!node_modules/', '!node_modules/**'])
      .pipe(zip(themename+'.zip'))
      .pipe(gulp.dest('../../../../darbs/themeforest/2016/all_'+themename+'/'+themename+'/'))
});

gulp.task('browser-sync', function() {
    var files = [
      './style.css',
      './**/**/*.php',
      './**/**/*.js'
    ];
    browserSync.init(files, {
        proxy: "http://localhost:8888/"
    });
});


gulp.task('default', ['browser-sync']);
