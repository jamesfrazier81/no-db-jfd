var gulp = require('gulp');
var sass = require('gulp-sass');
var jshint = require('gulp-jshint');
var imagemin = require('gulp-imagemin');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();

// Event handler message - the variable has been added to all tasks to show an error in any one via the Terminal
var plumberErrorHandler = { errorHandler: notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
  })
};

// browserSync replace with your local dev site
gulp.task('serve', function() {
	var files = [
		'./*.php',
		'./includes/*.php',
		'./sass/*.scss',
		'./js/*.js',
		'./img/*.{gif,jpg,png}'
	]

	browserSync.init(files, {
		proxy: 'jamesfrazierdesign.dev'
	});

	gulp.watch(files).on('change', browserSync.reload);
});

gulp.task('sass', function() {
	gulp.src('./sass/*.scss')
		.pipe(plumber(plumberErrorHandler))
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['last 2 versions', '> 5%', 'Firefox <= 20'],
			cascade: false
		}))
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream())
		.pipe(notify({
			title: 'Gulp Sass',
			message: 'Sass compiled successfully 😎',
			onLast: true
		}));
});

gulp.task('js', function() {
	gulp.src('./js/*.js')
		.pipe(plumber(plumberErrorHandler))
		.pipe(jshint())
		.pipe(jshint.reporter('default', { verbose: true }))
        .pipe(uglify().on('error', function(e){
            console.log(e);
         }))
		.pipe(gulp.dest('./js/dist'))
		.pipe(notify({
			title: 'Gulp JS',
			message: 'JS compiled successfully 😎',
			onLast: true
		}));
});

gulp.task('img', function() {
	gulp.src('./img/*.{gif,jpg,png}')
		.pipe(plumber(plumberErrorHandler))
		.pipe(imagemin({
			optimizationLevel: 7,
			progressive: true
		}))
		.pipe(gulp.dest('./img/dist'))
		.pipe(notify({
			title: 'Gulp Imagemin',
			message: 'Images compressed successfully 😎',
			onLast: true
		}));
});

gulp.task('watch', function() {
	gulp.watch('./*.php');
	gulp.watch('./includes/*.php');
	gulp.watch('./sass/*.scss', ['sass']);
	gulp.watch('./js/*.js', ['js']);
	gulp.watch('./img/*.{gif,jpg,png}', ['img']);
});

gulp.task('default', ['serve', 'sass', 'js', 'img', 'watch']);