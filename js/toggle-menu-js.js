$((function(){$("#navbarSideCollapse").on("click",(function(a){$(".navbar-collapse").addClass("open"),$(".overlay-bg").addClass("show"),a.stopPropagation()})),$(".show").on("click",(function(a){$(".navbar-collapse").removeClass("open"),a.stopPropagation()}))})),$(".dd-menu").click((function(){$(this).hasClass("active")?$(this).removeClass("active"):($(".dd-menu").removeClass("active"),$(this).addClass("active"))}));