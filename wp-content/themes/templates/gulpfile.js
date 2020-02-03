var gulp = require("gulp");
var scss = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");

gulp.task("scss", function() {
  return gulp
    .src(["./scss/**/*.scss", "!./scss/_imports/**/*.scss"])
    .pipe(scss())
    .pipe(autoprefixer())
    .pipe(gulp.dest("./"));
});

gulp.task("watch", function() {
  gulp.watch("./scss/**/*.scss", gulp.series("scss"));
});
