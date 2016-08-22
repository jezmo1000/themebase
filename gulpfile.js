// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint         = require('gulp-jshint');
var concat         = require('gulp-concat');
var compass        = require('gulp-compass');
var uglify         = require('gulp-uglify');
var rename         = require('gulp-rename');
var cleanCSS       = require('gulp-clean-css');
var mainBowerFiles = require('main-bower-files');
var filter         = require('gulp-filter');
var changed        = require('gulp-changed');
var imagemin       = require('gulp-imagemin');

// Define folder variables
var dest      = 'dist/';
var cssSrc    = 'src/scss/*.scss';
var jsSrc     = 'src/js/*.js';
var imgSrc    = 'src/images/*';
var fontSrc   = 'src/fonts/*';

// Compass options
var compassOptions = {
    config_file: 'config.rb',
    css:         'dist/css',
    sass:        'src/scss'
};

// Setup file filters
var jsFilter = filter('**/*.js');
var cssFilter = filter('**/*.css');

// Lint Task
gulp.task('lint', function() {
    return gulp.src( jsSrc )
        .pipe( jshint() )
        .pipe( jshint.reporter('default') );
});

// Concat + Minify all vendor CSS
gulp.task('vendorCss', function() {
    return gulp.src( mainBowerFiles() )
        .pipe( cssFilter )
        .pipe( concat( 'vendor.css' ))
        .pipe( gulp.dest( dest + 'css') );
});

// Compile Our Sass
gulp.task('css', function() {
    return gulp.src( cssSrc )
        .pipe( compass( compassOptions ) )
        .pipe( gulp.dest( dest + 'css' ) );
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    var jsFiles = [ 'bower.json', 'src/js/navigation.js', 'src/js/skip-link-focus-fix.js'  ];
    gulp.src( mainBowerFiles().concat( jsFiles ) )
        .pipe( jsFilter )
        .pipe( concat(  "app.js" ))
        .pipe(uglify())
        .pipe( gulp.dest(dest + 'js'));
});

gulp.task('concatCss', function() {
    return gulp.src( ['dist/css/styles.css', 'dist/css/vendor.css' ] )
        .pipe( concat('all.min.css'))
        .pipe(cleanCSS())
        .pipe( gulp.dest( dest + 'css' ) );
});

gulp.task('images', function() {
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest( dest + 'images'));
});

gulp.task('fonts', function() {
    gulp.src('src/fonts/*')
        .pipe(gulp.dest( dest + 'fonts'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch( jsSrc,  ['lint', 'scripts'] );
    gulp.watch( cssSrc, ['css' ] );
    gulp.watch( "dist/css/*.css", ['concatCss'] );
    gulp.watch( imgSrc, ['images'] );
    gulp.watch( "src/fonts/*", ['fonts'] );
});

// Default Task
gulp.task('default', ['lint', 'images', 'css', 'scripts', 'concatCss', 'watch'] );
gulp.task('rebuild', ['lint', 'fonts', 'images', 'css', 'vendorCss', 'scripts', 'concatCss' ] );
