/**
 * Created by root on 7/22/17.
 */
'use strict'

angular.module('t-app',[
//    dependencies
    't.app.routes',
    'firebase',
    't.loginController',
    't-app.outer-panel.controller',
    't-app.feed.controller'
])

.controller('appController',function($scope){
    $scope.test = "hello";
})

.config(function(){
    var config = {
        apiKey: "AIzaSyCtH19nWESOiar2x7XcSgyZevbIOvXxkd0",
        authDomain: "t11online-22539.firebaseapp.com",
        databaseURL: "https://t11online-22539.firebaseio.com",
        projectId: "t11online-22539",
        storageBucket: "",
        messagingSenderId: "429180692295"
    };
    firebase.initializeApp(config);
})