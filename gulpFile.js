var gulp = require('gulp');
var watch = require('gulp-watch');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var merge = require('merge-stream');
var scss = require('gulp-scss');

gulp.task('default', ['watch'])

gulp.task('build-css', function(){
  

    var main = gulp.src([
        'src/scss/main.scss'
    ])
    . pipe(scss())
    . pipe(cleanCSS())
    . pipe(concat('main.min.css'))
    . pipe(gulp.dest('dist/css'));
    
    var resume = gulp.src([
        'src/scss/main.scss',
        'src/scss/resume.scss'
    ])
    . pipe(scss())
    . pipe(cleanCSS())
    . pipe(concat('resume.min.css'))
    . pipe(gulp.dest('dist/css'));

    return merge(main, resume);
});

gulp.task('watch', function(){
    gulp.watch('./src/scss/**/*.scss', ['build-css']);

});