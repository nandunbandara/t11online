/**
 * Created by root on 7/22/17.
 */
'use strict'

angular.module('t-app',[
//    dependencies
    't.loginController'
])

.controller('appController',function(){
    const app = this;
    app.test = "hello";
})