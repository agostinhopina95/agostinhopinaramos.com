const gulp = require("gulp");
const sourcemaps = require("gulp-sourcemaps");
const path = require('path');
const sass = require("gulp-sass");
const cleanCSS = require("gulp-clean-css");
const imagemin = require("gulp-imagemin");
const scaleImages = require('gulp-scale-images');
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify-es").default;
const favicons = require("favicons").stream;
const log = require("fancy-log");
const autoprefixer = require("gulp-autoprefixer");
const concatCss = require('gulp-concat-css');
const flatMap = require('flat-map').default;

const computeFileName = (output, scale, cb) => {
    const fileName = [
        path.basename(output.path, output.extname),
        scale.format || output.extname
    ].join('.')
    cb(null, fileName)
}

// Favicon generator ..
gulp.task("favicon", function (done) {

    return gulp.src("./resources/assets/storage/img/logo.svg")
        .pipe(
            favicons({
                appName: "agostinhopinaramos",
                appShortName: "apr",
                appDescription: "My personal Webpage",
                developerName: "Agostinho Pina Ramos",
                developerURL: "http://agostinhopinaramos.com/",
                background: "#FFF",
                path: "img/favicon/",
                url: "http://goodshapecode.com/",
                display: "fullscreen",
                orientation: "portrait",
                scope: "/",
                start_url: "/?homescreen=1",
                version: 1.1,
                logging: false,
                html: "../../../views/components/html-favicon.blade.php",
                pipeHTML: true,
                replace: true,
            })
        )
        .on("error", log)
        .pipe(gulp.dest("./public/img/favicon"));
    done();
});

gulp.task("compile-css", function (done) {
    return gulp.src([
            "./resources/assets/sass/layout/**/*.scss"
        ])
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest("./resources/assets/css"));
    done();
});

gulp.task('unify-index-css', function (done) {
    return gulp.src('./resources/assets/css/**/*-index.css')
        .pipe(concatCss("style.css"))
        .pipe(rename({
            suffix: "-index.min"
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./public/css'));
    done();
});

gulp.task('unify-demo-css', function (done) {
    return gulp.src('./resources/assets/css/**/*-demo.css')
        .pipe(concatCss("style.css"))
        .pipe(rename({
            suffix: "-demo.min"
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./public/css'));
    done();
});

gulp.task('unify-error-css', function (done) {
    return gulp.src('./resources/assets/css/**/*-error.css')
        .pipe(concatCss("style.css"))
        .pipe(rename({
            suffix: "-error.min"
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./public/css'));
    done();
});

gulp.task("unify-css", gulp.series(
    "unify-index-css", 
    "unify-demo-css", 
    "unify-error-css"
));

// gulp.task("compile-js", function (done) {
//     gulp.src([

//     ])
//     .pipe(gulp.dest("./public/js/vendor/"));
//     done();
// });

gulp.task("unify-js", function (done) {
    return gulp
        .src([
            "./resources/assets/js/jquery.min.js",
            "./resources/assets/js/owl.carousel.js",
            "./resources/assets/js/validator.min.js",
            "./resources/assets/js/wow.min.js",
            "./resources/assets/js/jquery.mixitup.min.js",
            "./resources/assets/js/circle-progress.js",
            "./resources/assets/js/jquery.nav.js",
            "./resources/assets/js/jquery.fancybox.min.js",
            "./resources/assets/js/isotope.pkgd.js",
            "./resources/assets/js/packery-mode.pkgd.js",
            "./resources/assets/js/map-init.js",
            "./resources/assets/js/custom-scripts.js",
        ])
        .pipe(concat("bundle.js"))
        .pipe(uglify())
        .pipe(rename({
            suffix: "-index.min"
        }))
        .pipe(gulp.dest("./public/js/"));
    done();
});

gulp.task("logotype", function(done){
    return gulp.src('./resources/assets/storage/img/logo.svg')
        .pipe(flatMap((file, cb) => {
            const pngIMG = file.clone()
            pngIMG.scale = {
                maxWidth: 50,
                maxHeight: 50,
                fit: 'inside',
                format: 'png'
            }
            cb(null, [pngIMG]);
        }))
        .pipe(scaleImages(computeFileName))
        .pipe(gulp.dest("./resources/assets/img/static/"));
    done();
});

gulp.task("profile-image", function (done) {
    return gulp.src('./resources/assets/storage/img/myphoto02.jpg')
        .pipe(flatMap((file, cb) => {
            const pngIMG = file.clone()
            pngIMG.scale = {
                maxWidth: 425,
                maxHeight: 425,
                fit: 'inside',
                format: 'png'
            }
            cb(null, [pngIMG]);
        }))
        .pipe(scaleImages(computeFileName))
        .pipe(gulp.dest("./resources/assets/img/static/"));
    done();
});

// Images optimization
gulp.task("img-minify", function (done) {
    return gulp
        .src("./resources/assets/img/static/**/*.+(png|jpg|gif|svg|webp)")
        .pipe(imagemin())
        .pipe(gulp.dest("./public/img/static/"));
    done();
});

gulp.task("update-basic", gulp.series("compile-css", "unify-css", "unify-js"));