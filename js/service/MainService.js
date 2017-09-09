app.factory('MainService', function ($http, $q, $log, $rootScope) {
    var factory = {};

    //<editor-fold defaultstate="collapsed" desc="Get: Menu">
    factory.getMenu = function () {
        return  $http.get('db/menu.php').then(
                function (response) {
                    return response.data;
                },
                function (response) {
                    $log.error(response.data);
                }
        );
    };
    
    factory.getMenuDetail = function () {
        return  $http.get('db/menu_detail.php').then(
                function (response) {
                    return response.data;
                },
                function (response) {
                    $log.error(response.data);
                }
        );
    };
    
    
     
    //</editor-fold>
    return factory;
});