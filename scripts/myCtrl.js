
var app = angular.module('app-directives', []);

 app.directive("summary", function() {
      return {
        restrict: 'E',
        templateUrl: "posted.php"
      };
    });

 app.directive("quoteTabs", function() {
      return {
        restrict: "E",
        templateUrl: "quoteTabs.html",
        controller: function() {
          this.tab = 1;

          this.isSet = function(checkTab) {
            return this.tab === checkTab;
          };

          this.setTab = function(activeTab) {
            this.tab = activeTab;
          };
        },
        controllerAs: "tab"
      };
    })();

