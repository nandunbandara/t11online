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
            url: '/login',
            templateUrl: 'app/login/login.html',
            controller: 'loginCtrl as login',
            authenticated: false
        })

        .state('outer-panel',{
            url: '/op',
            templateUrl: 'app/outer-panel/outer-panel.html',
            controller: 'outer-panelCtrl as op',
            authenticated: true
        })

        .state('outer-panel.feed',{
            url: '/feed',
            templateUrl: 'app/feed/feed.html',
            controller: 'feedCtrl as feed',
            authenticated: true
        })
}])