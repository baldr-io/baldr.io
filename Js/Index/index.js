(function(){
	var index = angular.module('index', []);
	index.controller("IndexPageController", function(){
		this.pageTitle = "Baldr.io";
		this.pageDescription = "Description";
	});

	index.controller("PanelController", function(){
		this.tab = 1;
		this.selectTab = function(setTab){
			this.tab = setTab;
		};
		this.isSelected = function(checkTab){
			return this.tab === checkTab;
		};
	});

	//Here we can do anything we want with the social section and have it affect the webpage
	index.controller("SocialController", function(){
		//Use variables for text and titles
		this.socialJSON = {
			sectionTitle:"Diaspora",
			sectionDescr:"This is a description of baldr's Social Section",
			linkText:"Social Media"
		};
	});

	//Plex's controller
	index.controller("PlexController", function(){
		this.plexJSON = {
			sectionTitle:"Plex",
			sectionDescr:"This is a description of Plex.",
			linkText:"Watch Plex now!"
		};
	});
})();
