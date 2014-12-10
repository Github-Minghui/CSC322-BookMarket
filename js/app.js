(function(){
  var app = angular.module('BookStoreApp', []);
  
  app.controller('TogglePage', function(){
    this.login_page = false;
	this.toggle = function(){
        this.login_page = !(this.login_page);
    };
  });
  
  app.controller('form', function(){
	this.on = true;
	this.toggle = function(){
		this.on = !this.on;
	}
  });
  
  app.controller('NavTab',function(){
	this.tab=1;
	
	this.setTab = function(t){
		this.tab=t;
	};
	
	this.isSelected = function(tab){
		return tab===this.tab;
	};
  });

  app.controller('tabs',function(){
	this.tab=1;
	
	this.setTab = function(t){
		this.tab=t;
	};
	
	this.isSelected = function(tab){
		return tab===this.tab;
	};

  });

 

})();
