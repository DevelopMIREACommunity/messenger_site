var gulp = require("gulp");
var sass = require("gulp-sass");
var concatCss = require('gulp-concat-css');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
// var browserSync 	= require('browser-sync');//запусе локального сервера

var uglify = require('gulp-uglify');
var pipeline = require('readable-stream').pipeline;
 
var webp = require('gulp-webp');
 
var clean = require('gulp-clean');
var gulpCopy = require('gulp-copy'); 
 
const imagemin = require('gulp-imagemin');
  
var connect = require('gulp-connect');
 
 
//По умолчанию 
// Локальный сервер
gulp.task('default', ['sass'], function() {

    //browserSync.init({
    //    proxy: "http://localhost/chekky/src/"
    //});

    connect.server({
        root: 'src',
        livereload: true
      });

    //следим за изменением файлов
    gulp.watch("src/sass/*.sass", ['sass']);
    gulp.watch("src/sass/about/*.sass", ['sass_about']);
    gulp.watch("src/sass/contacts/*.sass", ['sass_contacts']);
    gulp.watch("src/sass/services/*.sass", ['sass_services']);
    gulp.watch("src/sass/articles/*.sass", ['sass_articles']);
    gulp.watch("src/sass/prices/*.sass", ['sass_prices']);

    gulp.watch("src/**/*.html").on('change', browserSync.reload);
    gulp.watch("src/**/*.php").on('change', browserSync.reload);
 
});




//Компиляция sass
gulp.task("sass", function(){
    return gulp.src("./src/sass/*.sass") 
        .pipe(sass().on('error',sass.logError))
        .pipe(rename('main.css'))
        .pipe(autoprefixer({
            cascade: false
        })) 
        .pipe(gulp.dest('./src/css'))
        //.pipe(browserSync.stream());
    });

gulp.task("sass_about", function(){
    return gulp.src("./src/sass/about/*.sass") 
        .pipe(sass().on('error',sass.logError))
        .pipe(rename('about.css'))
        .pipe(autoprefixer({
            cascade: false
        })) 
        .pipe(gulp.dest('./src/css'))
        .pipe(browserSync.stream());
    });
gulp.task("sass_contacts", function(){
    return gulp.src("./src/sass/contacts/*.sass") 
        .pipe(sass().on('error',sass.logError))
        .pipe(rename('contacts.css'))
        .pipe(autoprefixer({
            cascade: false
        })) 
        .pipe(gulp.dest('./src/css'))
        .pipe(browserSync.stream());
    });
gulp.task("sass_services", function(){
    return gulp.src("./src/sass/services/*.sass") 
        .pipe(sass().on('error',sass.logError))
        .pipe(rename('services.css'))
        .pipe(autoprefixer({
            cascade: false
        })) 
        .pipe(gulp.dest('./src/css'))
        .pipe(browserSync.stream());
    });
gulp.task("sass_articles", function(){
    return gulp.src("./src/sass/articles/*.sass") 
        .pipe(sass().on('error',sass.logError))
        .pipe(rename('articles.css'))
        .pipe(autoprefixer({
            cascade: false
        })) 
        .pipe(gulp.dest('./src/css'))
        .pipe(browserSync.stream());
    });
gulp.task("sass_prices", function(){
    return gulp.src("./src/sass/prices/*.sass") 
        .pipe(sass().on('error',sass.logError))
        .pipe(rename('prices.css'))
        .pipe(autoprefixer({
            cascade: false
        })) 
        .pipe(gulp.dest('./src/css'))
        .pipe(browserSync.stream());
    });



gulp.task('build', ['copy']);

gulp.task('delete', function () {
    gulp.src('./dist', {read: false})
        .pipe(clean());
});

// Объелинение css
gulp.task('minifyCss',['delete'],function() {
  gulp.src('./src/**/*.css') 
    //.pipe(concatCss('main.css'))
    .pipe(autoprefixer({
            cascade: false
        })) 
    .pipe(csso({
            restructure: true,
            sourceMap: false,
            debug: false
        }))
    //.pipe(rename('main.min.css'))
    .pipe(gulp.dest('./dist/'));
}); 


gulp.task('minifyJs',['minifyCss'], function () {
    gulp.src('./src/**/*.js') 
    .pipe(uglify())
    .pipe(gulp.dest('./dist/')); 
});

gulp.task('webp',['minifyJs'],function() {
    gulp.src('./src/img/**/*.{png,jpg,jpeg}')
        .pipe(webp())
        .pipe(gulp.dest('./dist/img/'))
}); 


// Проблемы с форматом jpeg
gulp.task('imagemin',['webp'],function() {
    gulp.src('./src/img/**/*.{png,jpg,jpeg}')
       .pipe(imagemin({
            interlaced: true,
            progressive: true,
            optimizationLevel: 8, 
        }))
        .pipe(gulp.dest('./dist/img/'))
});

gulp.task('copy',['imagemin'],function() {
    gulp.src(['./src/**/*.*', '!./src/**/*.{css,js}'])
        .pipe(gulpCopy('./dist/',{prefix: 1}))
        .pipe(gulp.dest('./dist/'))
});