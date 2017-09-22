function getMainObject(mode, data) {
    var object = {};
    object['mode'] = mode;
    object['data'] = data;
    return object;
}

app.controller('MainCtrl', function ($scope, $rootScope, $filter, MainService, $http, $log) {

    $scope.menus = [];
    $scope.contents = [];
    $scope.selected_menu = {};

    $scope.getMenu = function () {
        var data = getMainObject();
        MainService.getMenu(data).then(function (response) {
            $scope.menus = response.data;
        });

    };

    $scope.getMenuDetail = function (menu_id) {
        var data = getMainObject('get_menu_detail', menu_id);
        MainService.getMenuDetail(data).then(function (response) {
            $scope.contents = response.data;
            console.log(response.data);
        });
    };

    $scope.chooseMenu = function (menu) {
        $scope.selected_menu = menu;
        $scope.getMenuDetail(menu.id);
    };

    $scope.getMenu();

});
