app.controller('MainCtrl', function ($scope, $rootScope, $filter, MainService) {
    
    $scope.menus = [];
    $scope.contents = [];
    $scope.selected_menu = {};
    
    $scope.getMenu = function(){
        MainService.getMenu().then(function(response){
          $scope.menus = response;
        });
    };
    
    $scope.getMenuDetail = function(){
        MainService.getMenuDetail().then(function(response){
          $scope.contents = response;
            console.log(response);
        });
    };
    
     $scope.chooseMenu = function(menu){
        $scope.selected_menu = menu;
        console.log($scope.selected_menu);
        
        $scope.getMenuDetail();
    };

    $scope.getMenu();
});
