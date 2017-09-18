var app = angular.module('wp', ['ngRoute', 'ngSanitize']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
	$locationProvider.html5Mode(true);

	$routeProvider
      .when('/simonsl', {
        templateUrl: localized.partials + 'main.html',
        controller: 'Main'
    })
    .when('/simonsl/:slug', {
        templateUrl: localized.partials + 'content.html',
        controller: 'Content'
    })
    .when('/simonsl/category/:slug', {
        templateUrl: localized.partials + 'category.html',
        controller: 'Category'
    })
    .otherwise({
        redirectTo: '/'
    });
}]);
//Main controller
app.controller('Main', ['$scope', '$http', 'ThemeService', function($scope, $http, ThemeService) {
    //Get Categories from ThemeService
    ThemeService.getAllCategories();

    //Get the first page of posts from ThemeService
    ThemeService.getPosts(1);

    $scope.data = ThemeService;

}]);

app.controller('Content', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
            $http.get('simonsl/wp-json/wp/v2/posts/?filter[name]=' + $routeParams.slug).then(function(res){
                $scope.post = res.data[0];

                  console.log(res);
            });
        }
    ]
);
app.controller('Category', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
            $http.get('simonsl/wp-json/wp/v2/posts/?filter[category_name]=' + $routeParams.slug).then(function(res){
                $scope.post = res;

            });
        }
    ]
);

/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'simonsl/wp-content/themes/angular-bootstrap/js/particles.json', function() {
  console.log('callback - particles.js config loaded');
});
