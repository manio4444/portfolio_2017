const { watch, src, dest, series, parallel } = require('gulp');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const browserSync = require('browser-sync').create();

const config = {
  app: {
    js: [
      './src/scripts/**/*.js',
    ],
    scss: './src/style/**/*.scss',
    fonts: './src/fonts/*',
    images: './src/images/*.*',
    html: './src/*.html'
  },
  dist: {
    base: './dist/',
    fonts: './dist/fonts',
    images: './dist/images'
  }
};


function StylesTask(done) {
  src(['src/css/**/*.css', 'src/scss/main.scss'])
  .pipe(sourcemaps.init())
  .pipe(sass())
  .on('error', swallowError)
  .pipe(concat('styles.all.min.css'))
  // .pipe(autoprefixer({browsers: ['last 2 versions', '> 1% in PL', 'ie >=10']}))
  .pipe(cleanCSS())
  .pipe(sourcemaps.write())
  .pipe(dest('dist'));
  done();
}

function watchFiles() {
  watch('src/scss/**/*.scss', series(StylesTask/*, reload */));
  watch('src/css/**/*.css', series(StylesTask/*, reload */));
  watch('src/js/**/*.js', series(JsTask/*, reload */));
}

function JsTask(done) {
  src([
    'src/js/base/jquery.js',
    'src/js/*.js',
    'src/js/base/functions.js',
    'src/js/base/scripts.js',
    'src/js/base/main.js'
  ])
  .pipe(sourcemaps.init())
  .pipe(concat('scripts.all.min.js'))
  .pipe(uglify())
  .on('error', swallowError)
  .pipe(dest('dist'));
  done();
}

function swallowError (error) {
  // If you want details of the error in the console
  console.log(error.toString())
  this.emit('end')
}

// function liveReload(done) {
//   browserSync.init({
//     server: {
//       baseDir: config.dist.base
//     },
//   });
//   done();
// }
//
// function reload (done) {
//   browserSync.reload();
//   done();
// }


exports.default = parallel(
  StylesTask,
  JsTask,
  watchFiles,
  // liveReload
);
