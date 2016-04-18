var gulp = require('gulp');
var gutil = require('gulp-util');
var notify = require('gulp-notify');
var less = require('gulp-less');
var autoprefix = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');

//var exec = require('child_process').exec;
//var sys = require('sys');

var lessDir = "css/less";


// Compile Sass, autoprefix CSS3,
// and save to target CSS directory
//gulp.task('css', function () {
//    return gulp.src(lessDir + '/*.less')
//        .pipe(less({ style: 'compressed' }).on('error', gutil.log))
//        //.pipe(autoprefix('last 10 version'))
//        .pipe(gulp.dest(targetCSSDir))
//        .pipe(notify('CSS minified'))
//});

gulp.task('less', function(){
    return gulp.src('css/less/stayTrue-styles.less')
        .pipe(less())
        .pipe(gulp.dest('css'));
});


// Run all PHPUnit tests
//gulp.task('phpunit', function() {
//    exec('phpunit', function(error, stdout) {
//        sys.puts(stdout);
//    });
//});

// Keep an eye on Sass, Coffee, and PHP files for changes...
gulp.task('watch', function () {
    gulp.watch(lessDir + '/*.less', ['less']);
    //gulp.watch('app/**/*.php', ['phpunit']);
    return gulp.src('css/less/stayTrue-styles.less')
        .pipe(less())
        .pipe(gulp.dest('css'));
});

// What tasks does running gulp trigger?
gulp.task('default', ['css', 'watch']);