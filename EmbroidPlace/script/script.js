var app = angular.module("myApp", []);

app.directive("matchPassword", function() {
    return {
        require: "ngModel",
        link: function(scope, element, attrs, ctrl) {
            ctrl.$validators.matchPassword = function(modelValue) {
                return modelValue === scope.$eval(attrs.matchPassword);
            };

            scope.$watch(attrs.matchPassword, function() {
                ctrl.$validate();
            });
        }
    };
});

app.controller("LoginController", function($scope, $location) {
    $scope.login = function() {
        if ($scope.loginForm.$valid) {
            // TODO: Implement login logic here

            // Assuming successful login, navigate to the home page
            $location.path("/home");
        }
    };
});

app.controller("RegisterController", function($scope) {
    $scope.register = function() {
        if ($scope.registrationForm.$valid) {
            // TODO: Implement registration logic here

            // Assuming successful registration, navigate to the login page
            $location.path("/login");
        }
    };
});