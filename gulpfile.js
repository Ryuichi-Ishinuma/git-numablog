//gulpプラグインの読み込み
const gulp = require("gulp");
const sass = require("gulp-sass");
const cleancss = require("gulp-clean-css");
const notify = require("gulp-notify");
const plumber = require("gulp-plumber");
const eslint = require("gulp-eslint");
const autoprefixer = require("gulp-autoprefixer");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const browserSync = require("browser-sync");

//画像圧縮
const imagemin = require("gulp-imagemin");
const rename = require("gulp-rename");
const pngquant = require("imagemin-pngquant");
const mozjpeg = require("imagemin-mozjpeg");

// PHP用
const connectPhp = require("gulp-connect-php");

// webpack
const webpackStream = require("webpack-stream");
const webpack = require("webpack");
const webpackConfig = require("./webpack.config");

// Sassファイルのコンパイル
const options = {
  outputStyle: "compressed",
  sourceMap: true,
  sourceComments: false
};
gulp.task("sass", () => {
  return (
    gulp.src('./src/sass/*.scss')
    .pipe(plumber({
      errorHandler: notify.onError('Error:<%= error.message %>')
    }))
    .pipe(sass(options))
    .pipe(autoprefixer())
    .pipe(cleancss())
    .pipe(gulp.dest('./dist/css/'))
    .pipe(browserSync.stream())
    //修正の必要あり
    // .pipe(notify({
    //   title: 'Completed compiling Sass!',
    //   sound: 'Bacco'
    // }))
  );
});

gulp.task('imagemin', function () {
  return gulp.src('src/images/*.{jpg,jpeg,png,gif,svg}')
  .pipe(imagemin(
    [
      pngquant({ quality: [.7, .8], speed: 1 }),
      mozjpeg({ quality: 80 }),
      imagemin.svgo(),
      imagemin.gifsicle()
    ]
  ))
  .pipe(rename(function(path) {
    path.basename += "_min";
  }))
  .pipe(gulp.dest('dist/images/'));
});


gulp.task('script', done => {
  return (
    gulp.src('src/js/*.js')
    // .pipe(babel({
    //   preset: <'es2015'>
    // }))
    .pipe(plumber({
      errorHandler: notify.onError('Error:<%= error.message %>')
    }))
    .pipe(eslint({useEslintrc: true}))
    .pipe(eslint.format())
    .pipe(eslint.failAfterError())
    // .pipe(webpack())
    .pipe(eslint.result(function(result){
      if(result.errorCount !== 0) {
        return;
      }
      gulp.src(result.filePath)
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/'));
    }))
  );
});

/////////////////////////////////
//sassファイルが変更され保存されるたびにコンパイル処理を実行
/////////////////////////////////
gulp.task("build", done => {
  gulp.watch("./src/sass/*.scss", gulp.task("sass"));
});

gulp.task("bundle", done => {
  return webpackStream(webpackConfig, webpack)
  .pipe(gulp.dest('dist/js'));
});

gulp.task('server', done => {
  connectPhp.server({
    base: '/'
  }, done => {
    browserSync({
      proxy: 'localhost/numablog.net/'
    });
  });
});

gulp.task('reload', done => {
  browserSync.reload();
});


/////////////////////////////////
//デフォルトタスク
/////////////////////////////////
gulp.task("default", gulp.parallel("sass","imagemin", "script", "bundle", "server","build"));
