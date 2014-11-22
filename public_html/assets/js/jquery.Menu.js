
$(document).ready(function(){
    
    var agent = navigator.userAgent;
    
    if(agent.search(/iPhone/) != -1){
        
        $(function(){
            $("ul#sub").hide();
            $("div#menu li").hover(function(){
                $("ul:not(:animated)", this).slideDown("500");
            },
            function(){
                $("ul#sub",this).slideUp("500");
            });
            $("body").click(function(){
            	$("ul#sub",this).slideUp("500");
            });
    	});
        
    }else if(agent.search(/iPad/) != -1){
        
        $(function(){
            $("ul#sub").hide();
            $("div#menu li").hover(function(){
                $("ul:not(:animated)", this).slideDown("500");
            },
            function(){
                $("ul#sub",this).slideUp("500");
            });
            $("body").click(function(){
            	$("ul#sub",this).slideUp("500");
            });
    	});
        
    }else if(agent.search(/Android/) != -1){
        
        $(function(){
            $("ul#sub").hide();
            $("div#menu li").hover(function(){
                $("ul:not(:animated)", this).slideDown("500");
            },
            function(){
                $("ul#sub",this).slideUp("500");
            });
    	});
        
    }else{
        $(function(){
            $("ul#sub").hide();
            $("div#menu li").hover(function(){
                $("ul:not(:animated)", this).slideDown("500");
            },
            function(){
                $("ul#sub",this).slideUp("500");
            });
    	});
    }
});