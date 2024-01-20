$(window).load(function(){

  $('div#navbar li').hover(function() {
		
        if (! $(this).hasClass("selected")) {
          $(this).stop(true, true).animate({ backgroundColor: "#ddd;" }).find('a').animate({ color: "#666" });
        }
        
    }, function(){

        if (! $(this).hasClass("selected")) {
          $(this).stop(true, true).css({backgroundColor:"transparent" }, 5000).find('a').stop(true, true).animate({ color: "#666" }, 0);
        }
  }); 

});