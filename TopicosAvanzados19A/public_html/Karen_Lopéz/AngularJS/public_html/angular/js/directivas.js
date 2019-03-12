app.directive('tooltip', function() {
  return {
    restrict: 'EA',
    link: function(scope, element, attrs) {
      attrs.tooltipTrigger = attrs.tooltipTrigger;
      attrs.tooltipPlacement = attrs.tooltipPlacement || 'top';
    }
  }
});