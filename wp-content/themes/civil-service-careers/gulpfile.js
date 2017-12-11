const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', () => 
    gulp.src('./sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./'))
);

gulp.task('sass:watch', () =>
    gulp.watch('./sass/**/*.scss', ['sass'])
);

gulp.task('default', ['sass', 'sass:watch']);