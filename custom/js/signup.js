var app = angular.module("ntb-app", []);

var baseUrl = baseUrl('http://localhost:8000/');

app.controller('signUp', function($scope, $filter, $http) {
    this.signup = {
        "user_name": '',
        "first_name": '',
        "middle_name": '',
        "last_name": '',
        "telephone_numbers": '',
        "email": '',
        "password": '',
        "password_confirmation": '',
        "location_id": '',
        "role": '',
        "refferer": ''
    };

    $scope.dsignup = function() {
        $("#btnSignUp").addClass("is-loading");
        $http({
            url: baseUrl + "api/register",
            method: "POST",
            data: this.signup,
            contentType: 'application/json'
        }).then((result) => {
            $(".notification-hide")
                .removeClass("notification-hide")
                .addClass("notification-show-success");
            $("#btnSignUp").removeClass("is-loading");
            $scope.notify = "User account created successfully! check your mail for confirmation.";
            setTimeout("window.location.href = 'signin.php'", 3000);
        }, function(error) {
            $(".notification-hide")
                .removeClass("notification-hide")
                .addClass("notification-show-error");
            $("#btnSignUp").removeClass("is-loading");
            $scope.notify = error.data.message;
        });

    };
    $scope.enable_submit = function(e) {
        if ($("#" + e).is(':checked') == true) {
            $("#btnSignUp").removeClass("button-disabled");
            $("#btnSignUp").addClass("is-success");
        } else {
            $("#btnSignUp").addClass("button-disabled");
            $("#btnSignUp").removeClass("is-success");
        }
    };

});