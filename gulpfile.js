const { watch, src, dest, series, parallel } = require('gulp');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const browserSync = require('browser-sync').create();

const config = {
  src: {
    js: [
      './src/js/base/jquery.js',
      './src/js/*.js',
      './src/js/base/functions.js',
      './src/js/base/scripts.js',
      './src/js/base/main.js'
    ],
    scss: [
      './src/scss/main.scss',
      ],
    css: [
      './src/css/**/*.css'
      ],
    php: [
      './index.php'
    ]
  },
  watchers: {
    scss: [
      './src/scss/**/*.scss'
    ]
  },
  dist: {
    folder: 'dist',
    stylesFileName: 'styles.all.min.css',
    scriptsFileName: 'scripts.all.min.js'
  }
};


function StylesTask(done) {
  src([...config.src.css, ...config.src.scss])
  .pipe(sourcemaps.init())
  .pipe(sass())
  .on('error', swallowError)
  .pipe(concat(config.dist.stylesFileName))
  // .pipe(autoprefixer({browsers: ['last 2 versions', '> 1% in PL', 'ie >=10']}))
  .pipe(cleanCSS())
  .pipe(sourcemaps.write())
  .pipe(dest(config.dist.folder));
  done();
}

function watchFiles() {
  watch(config.watchers.scss, series(StylesTask, reload));
  watch(config.src.css, series(StylesTask, reload));
  watch(config.src.js, series(JsTask, reload));
  watch(config.src.php,reload);
}

function JsTask(done) {
  src(config.src.js)
  .pipe(sourcemaps.init())
  .pipe(concat(config.dist.scriptsFileName))
  .pipe(uglify())
  .on('error', swallowError)
  .pipe(dest(config.dist.folder));
  done();
}

function swallowError (error) {
  // If you want details of the error in the console
  console.log(error.toString());
  this.emit('end')
}

function liveReload(done) {
  browserSync.init({
    proxy: 'http://localhost/portfolio_2017/',
    port: 3044,
  });
  done();
}

function reload (done) {
  browserSync.reload();
  done();
}

exports.default = parallel(
  StylesTask,
  JsTask,
  watchFiles,
  liveReload
);

exports.build = parallel(
  StylesTask,
  JsTask,
);
