const gulp = require("gulp");
const sourcemaps = require("gulp-sourcemaps");
const path = require('path');
const sass = require("gulp-sass");
const cleanCSS = require("gulp-clean-css");
const zip = require("gulp-zip");
const imagemin = require("gulp-imagemin");
const scaleImages = require('gulp-scale-images');
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify-es").default;
const favicons = require("favicons").stream;
const log = require("fancy-log");
const openurl = require("openurl");
const autoprefixer = require("gulp-autoprefixer");
const concatCss = require('gulp-concat-css');
const flatMap = require('flat-map').default;

/** FTP **/
/* Save all changes in Server */
gulp.task("zip-project", function (done) {
    return gulp
        .src([
            "./.*",
            "./*",
            "./**/*",
            "./.**/*",

            /* ignore */
            "!./.git/**/*",
            "!./.vscode/**/*",
            "!./public/.remote/**/*",
            "!./node_modules/**/*",
            "!./resources/assets/**/*"
        ])
        .pipe(zip("agostinhopinaramos.com.zip"))
        .pipe(gulp.dest("./public/.remote/"));
    done();
});
gulp.task("send-zip", function (done) {
    openurl.open("http://localhost/.remote/send.php");
    done();
});
gulp.task("deploy-server", gulp.series("zip-project", "send-zip"));
/** FTP **/

