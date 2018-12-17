const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const uglyfy = require("gulp-uglify");

const assetsPath = "assets";
const publicPath = "public";
const staticPathList = [`${assetsPath}/images/**/*`, `${assetsPath}/fonts/**/*`];

gulp.task("scss", function() {
    return gulp
        .src(`${assetsPath}/scss/main.scss`)
        .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
        .pipe(gulp.dest(`${publicPath}/css`));
});

gulp.task("babel", function() {
    return gulp
        .src([`${assetsPath}/js/test.js`])
        .pipe(
            babel({
                presets: ["env"],
            }),
        )
        .pipe(concat("main.js"))
        .pipe(uglyfy())
        .pipe(gulp.dest(`${publicPath}/js`));
});

gulp.task("static", function() {
    return gulp.src(staticPathList, { base: `${assetsPath}` }).pipe(gulp.dest("public"));
});

gulp.task("watchChanges", function() {
    gulp.watch([`${assetsPath}/scss/**/*.scss`, `${assetsPath}/js/*.js`, ...staticPathList], ["scss", "babel", "static"]);
});

gulp.task("watch", ["scss", "babel", "static", "watchChanges"]);
gulp.task("build", ["scss", "babel", "static"]);
