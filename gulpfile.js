//gulpプラグインの読み込み
const gulp = require("gulp");
const sass = require("gulp-sass");

gulp.task("sass", function() {
  return (
    gulp.src('./src/sass/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./dist/css'))
  );
});
