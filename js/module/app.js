var app = angular.module('app', []);
app.config(function ($httpProvider) {
    // send all requests payload as query string
    $httpProvider.defaults.transformRequest = function(data){
        if (data === undefined) {
            return data;
        }
        return serialize(data);
    };

    // set all post requests content type
    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
});