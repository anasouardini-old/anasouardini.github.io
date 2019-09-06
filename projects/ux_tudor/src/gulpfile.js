const gulp          = require("gulp");
const sass          = require("gulp-sass");
const mincss        = require("gulp-clean-css");
const prefixcss     = require("gulp-autoprefixer");
const cleancss      = require("gulp-purgecss");
const pug           = require("gulp-pug");
const pugBeautify   = require("gulp-pug-beautify");
const htmlBeautify  = require("gulp-html-beautify");
const uglyjs        = require("gulp-uglify");
//const hintjs      = require("gulp-jshint");
const minimgs       = require("gulp-imagemin");
const concat        = require("gulp-concat");
//const sync        = require("browser-sync").create();
const rename        = require("gulp-rename");
const connect       = require("gulp-connect");
const browserify    = require("browserify");
const babelify      = require("babelify");
const source        = require("vinyl-source-stream");
const buffer        = require("vinyl-buffer");

var indexSRC = "src/index.pug";
var indexDEST = "../";
var sassSRC = "src/sass/*.sass";
var cssDEST = "../css/";
var jsSRC = "src/js/script.js";
var jsDEST = "../js/";
var imgsSRC = "src/imgs/*";
var imgsDEST = "../imgs/";

gulp.task("connect", function(done){
  connect.server({
    //open: {browser : "google chrome"},
    base: 'http://localhost',
    port: 9000,
    root: indexDEST,
    livereload: true,
  });
  done()
});


gulp.task("css", function(){
  return gulp.src(sassSRC)
      .pipe(sass().on("error", sass.logError))
      .pipe(prefixcss())
      .pipe(gulp.dest(cssDEST))
      .pipe(connect.reload())
});

gulp.task("index",function(){
  return gulp.src(indexSRC)
      .pipe(pug())
      //.pipe(pugBeautify({ omit_empty_lines: true }))
      .pipe(htmlBeautify())
      .pipe(rename("index.php"))
      .pipe(gulp.dest(indexDEST))
      .pipe(connect.reload())
});

gulp.task("teach",function(){
  return gulp.src('src/pages/teach.pug')
      .pipe(pug())
      //.pipe(pugBeautify({ omit_empty_lines: true }))
      .pipe(htmlBeautify())
      .pipe(rename("index.php"))
      .pipe(gulp.dest('../teach/'))
      .pipe(connect.reload())
});

gulp.task("js", function(done){
  browserify(jsSRC)
    .transform(babelify)
    .bundle()
    .pipe(source("script.js"))
    .pipe(buffer())
    .pipe(gulp.dest(jsDEST))
    .pipe(connect.reload());
  done();
});

gulp.task("cleancss", function(){
  return gulp.src(cssDEST+"style.css")
      .pipe(mincss())
      .pipe(gulp.dest(cssDEST))
})

gulp.task("cleanjs", function(){
  return gulp.src(jsDEST+"script.js")
      //.pipe(hintjs.reporter("default"))
      .pipe(uglyjs())
      .pipe(gulp.dest(jsDEST))
})

gulp.task("cleanimgs", function(){
  return gulp.src(imgsDET+"*")
      .pipe(minimgs())
      .pipe(gulp.dest(imgsDEST))
})

gulp.task("watchIndex", function(done){gulp.watch('src/index.pug', gulp.series('index'));done()});
gulp.task("watchTeach", function(done){gulp.watch('src/pages/teach.pug', gulp.series('teach'));done()});
gulp.task("watchSass", function(done){gulp.watch('src/sass/*.sass', gulp.series('css'));done()});
gulp.task("watchJs", function(done){gulp.watch('src/js/*', gulp.series('js'));done()});
gulp.task("watch", gulp.parallel('watchIndex', 'watchTeach', 'watchSass', 'watchJs'));


gulp.task("clean", gulp.parallel("cleancss", "cleanjs", "cleanimgs"));

gulp.task("cleanstart", gulp.parallel("clean", "watch"));

gulp.task("default", gulp.parallel("css", "js", "watch", "connect"));
