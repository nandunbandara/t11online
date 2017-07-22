'use strict'

// angular.module('t.app.routes', ['ngRoute'])

// .config(['$routeProvider', function($routeProvider){
//     $routeProvider
//         .when('/',{
//             templateUrl: 'app/login/login.html',
//             controller: 'loginCtrl as login'
//         })
// }])
angular.module('t.app.routes',['ui.router'])

.config(['$stateProvider','$urlRouterProvider',function($stateProvider,$urlRouterProvider){
    $urlRouterProvider.otherwise('/error');
    $stateProvider
        .state('login',{
            url: '/',
            templateUrl: 'app/login/login.html',
            controller: 'loginCtrl as login',
            authenticated: false
        })
}])