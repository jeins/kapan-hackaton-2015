//---------------------------------------------------------------------------------------------------
//----------------------- DIRECTIVE UNTUK TEMPLATE -------------------------------------------------
//---------------------------------------------------------------------------------------------------
bangunApp.directive('footer', function () {
    return {
        restrict: 'A',
        replace: true,
        templateUrl: "templates/footer.html"
      }
});

bangunApp.directive('navigation', function () {
    return {
        restrict: 'A',
        replace: true,
        templateUrl: "templates/navigation.html"
      }
});
