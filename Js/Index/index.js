(function(){
	var index = angular.module('index', []);
	index.controller("IndexPageController", function(){
		this.pageTitle = "Baldr";
		this.pageDescription = "Description";
	});
})();