//gulpプラグインの読み込み
const gulp = require("gulp");
const sass = require("gulp-sass");

// Sassファイルのコンパイル
gulp.task("sass", function() {
  return (
    gulp.src('./src/sass/*.scss')
    .pipe(sass({
      outputStyle: "expanded"
    }))
    .pipe(gulp.dest('./dist/css/*.css'))
  );
});

// 推奨仕様の記述  実行できないので一旦コメントアウト
// const compileSass = () =>
//     src('./src/sass/*.scss')
//     .pipe(sass({
//       outputStyle: "expanded"
//     }))
//     .pipe(gulp.dest('./dist/css/*.css'))
// const watchSassFiles = () => watch('./src/sass/*.scss', compileSass);
// exports.default = watchSassFiles;
