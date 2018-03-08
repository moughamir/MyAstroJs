const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const imagemin = require('gulp-imagemin');

var source = 'scss/saint-patrick-18.scss',
  assetsSource = 'images_landing/saint-patrick-2018/*',
  assetsTarget = 'images_landing/saint-patrick-2018/',
  target = './css/',
  sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded'
  },
  autoprefixerOptions = {
    browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
  };

gulp.task('sass', function() {
  return gulp
    .src([source, 'scss/sp18-dri.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(cleanCSS({
      compatibility: 'ie8'
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(target));
});

gulp.task('imagemin', () =>
  gulp.src(assetsSource)
  .pipe(imagemin())
  .pipe(gulp.dest(assetsTarget))
);

gulp.task('watch', function() {
  return gulp
    .watch([source, assetsSource], ['sass', 'imagemin'])
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

gulp.task('default', ['sass', 'imagemin', 'watch']);
