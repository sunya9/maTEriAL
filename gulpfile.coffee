gulp = require 'gulp'
sass = require 'gulp-ruby-sass'
plumber = require 'gulp-plumber'
minifyCSS = require 'gulp-minify-css'
livereload = require 'gulp-livereload'
sourcemaps = require 'gulp-sourcemaps'
notify = require 'gulp-notify'
webserver = require 'gulp-webserver'
concat = require 'gulp-concat'

gulp.task 'default', ['build'], ->

gulp.task 'build', ['sass', 'concat'], ->
  console.log 'building...'

gulp.task 'watch', ->
  livereload.listen()
  gulp.watch './sass/**/*.scss', ['sass']

gulp.task 'sass', ->
  sass './sass/',
    sourcemap: true
    style: 'compressed'
    compass: true
  .on 'error', (err)->
    notify.onError 'Error!: ' + err.message
  # .pipe minifyCSS()
  .pipe sourcemaps.write()
  .pipe gulp.dest './build/css'
  .pipe livereload()

gulp.task 'concat', ->
  gulp.src ['bower_components/jquery/dist/jquery.min.js', 'bower_components/google-code-prettify/bin/prettify.min.js', 'js/main.js']
  .pipe concat 'main.min.js'
  .pipe gulp.dest './build/js'

gulp.task 'server', ['watch'],  ->
  gulp.src '.'
  .pipe webserver
    livereload: false
    directoryListing: false
    open: 'static'