/**
 * Created by root on 7/22/17.
 */
'use strict'

angular.module('t-app',[
//    dependencies
    't.app.routes',
    't.loginController'

])

.controller('appController',function($scope){
    $scope.test = "hello";
})