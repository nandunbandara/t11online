'use strict';

var gulp = require('gulp');
var gutil = require('gulp-util');
var ftp = require('vinyl-ftp');

var user = process.env.FTP_USER;
var pwd = process.env.FTP_PWD;

var host  = 'www.t11online.org';
var port = 21;

var localFiles = ['./**/*'];
var remoteLocation = 'public_http/v2/';

function getFtpConnection(){
    return ftp.create({
        host: host,
        port: port,
        user: user,
        password: pwd,
        parallel: 5,
        log: gutil.log
    })
}

//deploy to remote server
gulp.task('remote-deploy',function(){
    var conn = getFtpConnection();
    return gulp.src(localFiles, {base: '.', buffer: false})
        .pipe(conn.newer(remoteLocation))
})

gulp.task('remote-deploy-changes', function(){
    var conn = getFtpConnection();
    return gulp.src(localFiles, {base: '.', buffer: false})
        .pipe(conn.newer(remoteLocation))
})
