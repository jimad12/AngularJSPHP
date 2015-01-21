//Retrieve the data from api.php to display it
function GetUsers($scope, $http)
{
        /*
        This is where the JSON from api.php is consumed.
        Change the link below to match your respective path on your server.
        */
        $http.get('http://localhost/frontend/JS-Review/AngularJS/angPHP/api.php').success(function(data){
          
          // here the data from the api is assigned to a variable;
          $scope.users = data;
        });
}