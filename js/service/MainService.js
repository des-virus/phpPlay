app.factory('MainService', function ($http, $q, $log, $rootScope) {
    var factory = {};

    //<editor-fold defaultstate="collapsed" desc="Get: Menu">
  factory.getMenu = function (data) {
        return  $http({
            url: "db/menu.php",
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: $.param(data)
        }).success(function (response) {
            return response;
        });
    };

    factory.getMenuDetail = function (data) {
        return  $http({
            url: "db/menu_detail.php",
            method: "POST",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: $.param(data)
        }).success(function (response) {
            return response;
        });
    };

  




    //</editor-fold>
    return factory;
});