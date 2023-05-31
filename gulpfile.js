const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
let autoprefixBrowsers = ['last 15 version'];
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function () {
    return gulp.src('wp-content/themes/photobook_wp_react/assets/css/*.scss')
        .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('wp-content/themes/photobook_wp_react/assets/css/css_output'));
});

gulp.task('autoprefixer', function () {
    return gulp.src('wp-content/themes/photobook_wp_react/assets/css/*.css')
        .pipe(autoprefixer({
            overrideBrowserslist: autoprefixBrowsers,
            cascade: false
        }))
        .pipe(cleanCSS({
            compatibility: 'safari'
        }))
        .pipe(gulp.dest('wp-content/themes/photobook_wp_react/assets/css_initial'));
});

gulp.task('minify-js', function () {
    return gulp.src('wp-content/themes/photobook_wp_react/assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('wp-content/themes/photobook_wp_react/assets/js_initial'));
});

gulp.task('watch', function () {
    gulp.watch('wp-content/themes/photobook_wp_react/assets/css/*.css', gulp.series('autoprefixer'));
});