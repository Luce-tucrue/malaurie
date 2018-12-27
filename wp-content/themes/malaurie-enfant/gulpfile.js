var gulp = require('gulp');


// Import dependencies
var sass = require('gulp-sass'),
    minify = require('gulp-clean-css'),
    path = require('path'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    sassLint = require('gulp-sass-lint'),
    browserSync = require('browser-sync');
minifyjs = require('gulp-minify');


var source = 'assets/styles/sass/',
    dist = 'assets/styles/',
    sourceScript = 'assets/js/',
    destScript = 'assets/js/',
    fontName = 'Icons';


// Compile SCSS to CSS

gulp.task('default', function () {
    return gulp.src(source + 'main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat('compiled.min.css'))
        .pipe(minify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(dist))
        .pipe(
            browserSync.reload({
                stream: true
            }));

});

// Check if SCSS is clean
gulp.task('sass-lint', function () {
    return gulp.src([source + '/**/*.scss'])
        .pipe(sassLint({
            configFile: '.sass-lint.yml',
        }))
        .pipe(sassLint.format())
        .pipe(sassLint.failOnError())
});

// Reload in live

gulp.task('browserSync', function () {
    browserSync({
        /*server: {
            baseDir: "./"
        },*/ // if no vhost uncomment
        proxy: "dev.malaurie.fr" // if no vhost comment

    });
})


// Watch - if changes, do tasks

gulp.task('watch', gulp.parallel('browserSync', function () {
    gulp.watch(source + '**/*.scss', gulp.parallel('default', 'sass-lint'));
    gulp.watch('./**/*.php').on('change', browserSync.reload);
}));


