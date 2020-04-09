'use strict';
//plugins
const gulp           = require('gulp'),
      browsersync    = require('browser-sync').create(),
      uglify         = require('gulp-uglify'),
      sasser         = require('gulp-sass'),
      autoprefixer   = require('gulp-autoprefixer'),
      cssmin         = require('gulp-minify-css'),
      imagemin       = require('gulp-imagemin'),
      pngquant       = require('imagemin-pngquant'),
      svgSprites     = require('gulp-svg-sprite'),
      rigger         = require('gulp-file-include'),
      sourcemaps     = require('gulp-sourcemaps'),
      concat         = require('gulp-concat'),
      rimraf         = require('rimraf'),
      order          = require('gulp-order'),
      stylelinter      = require('gulp-stylelint');

//patch config
// for WP
const theme = './';
const path = {
  src: {
    root: "src",
    //html: theme + '/**/*.php',
    sass: theme + 'src/scss',
    img: theme + 'src/img',
    upload: theme + 'src/upload',
    svg: theme + 'src/img/svg',
    fonts: theme + 'src/fonts',
    js: theme + 'src/js'
  },
  dest: {
    //html: theme ,
    css: theme + '/',
    img: theme + 'img',
    js: theme + 'js',
    upload: theme + 'upload',
    svg: theme + 'img',
    fonts: theme + 'fonts',
  },
  watch: {
    html: theme + '**/*.php',
    js: theme + 'src/js',
    sass: theme + 'src/scss/**/*.scss',
    img: theme + 'src/img/**/*.*',
    upload: theme + 'src/upload/**/*.*',
    svg: theme + 'src/img/svg/**/*.svg',
    fonts: theme + 'src/fonts/**/*.*'
  },
  clean: './dist'
};

//server config
const config = {
    // host and open to have the browser open with the right URL
    host: 'www.site.ch',
    open: 'external',
    port: 9000,
    proxy: 'https://www.site.ch',
    // SSL certificate
    https: {
        key: "../../../../www.site.ch.key",
        cert: "../../../../www.site.ch.cert"
        }
};

//FUNCTIONS
function browserSync(done) {
  browsersync.init(config);
  done();
}

// BrowserSync Reload
function reload(done) {
  browsersync.reload();
  done();
}

function clean(cb) {
    return rimraf(path.clean, cb);
};

/*
function html() {
  return gulp.src(path.src.root + '/*.html') 
    .pipe(rigger()) 
    .pipe(gulp.dest(path.dest.html))
    .pipe(browsersync.stream());
};
*/

function sass() {
  return gulp.src(path.src.sass + '/**/*.scss')
             .pipe(sourcemaps.init())
             .pipe(sasser())
             .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
              }))
             .pipe(cssmin()) 
             .pipe(sourcemaps.write('./map'))
             .pipe(gulp.dest(path.dest.css))
             .pipe(browsersync.stream());
};

function stylelint() {
  return gulp.src(path.src.sass + '/**/*.scss')
             .pipe(stylelinter({
                    reporters: [
                      {formatter: 'string', console: true}
                    ]
              }))
             .pipe(stylelinter().on('error', sass.logError));
};

function js() {
  return gulp.src(path.src.js + '/script.js')
             .pipe(uglify())
             .pipe(gulp.dest(path.dest.js))
             .pipe(browsersync.stream());
};

function libs() {
  return gulp.src(path.src.js + '/libs/**/*.js')
             .pipe(order([
                 'modernizr.js',
                 'slick.js'
               ]))
             .pipe(concat('libs.js'))
             .pipe(uglify())
             .pipe(gulp.dest(path.dest.js))
             .pipe(browsersync.stream());
};

function img() {
  return gulp.src(path.src.img + '/**/*') 
             .pipe(imagemin({ 
                 progressive: true,
                 svgoPlugins: [{removeViewBox: false}],
                 use: [pngquant()],
                 interlaced: true
             }))
             .pipe(gulp.dest(path.dest.img)) 
             .pipe(browsersync.stream());
};

function svg() {
  return gulp.src(path.src.svg + '/**/*.svg')
             .pipe(svgSprites({
               shape: {
                 dimension: {
                   precision: 2
                   // attributes: true
                 }
               },
               mode: {
                 symbol: {
                   dest: '../',
                   sprite: 'img/symbol-sprite.svg'
                 }
               },
               svg: {
                 xmlDeclaration: false,
               },
               log: 'info'
             }))
             .pipe(gulp.dest(path.dest.svg))
             .pipe(browsersync.stream());
};

function upload() {
  return gulp.src(path.src.upload + '/**/*') 
             .pipe(imagemin({ 
                  progressive: true,
                  svgoPlugins: [{removeViewBox: false}],
                  use: [pngquant()],
                  interlaced: true
              }))
             .pipe(gulp.dest(path.dest.upload))
             .pipe(browsersync.stream());
};

function fonts() {
  return gulp.src(path.src.fonts + '/**/*')
             .pipe(gulp.dest(path.dest.fonts))
             .pipe(browsersync.stream());
};

function watchFiles() {
  gulp.watch(path.watch.html, reload);
  gulp.watch(path.watch.sass, sass);
  gulp.watch(path.watch.js, js);
  gulp.watch(path.watch.img, img);
  gulp.watch(path.watch.upload, upload);
  gulp.watch(path.watch.fonts, fonts);
  gulp.watch(path.watch.svg, svg);
}


//watch function
const watch = gulp.parallel(watchFiles, browserSync);
const build = gulp.series(/* html, */ sass, js, libs, fonts, /*img,*/ upload, svg);
const defaulttask = gulp.series(build, watch);


//export TASKS
exports.webserver = browserSync;
exports.clean = clean;
//exports.html = html;
exports.sass = sass;
exports.stylelint = stylelint;
exports.js = js;
exports.libs = libs;
exports.img = img;
exports.svg = svg;
exports.upload = upload;
exports.fonts = fonts;
exports.build = build;
exports.watch = watch;
exports.default = defaulttask;