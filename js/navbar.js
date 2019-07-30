var lnStickyNavigation;

$(document).ready(function()
{	
	applyNavigation(); 
	applyResize();
	// checkHash();
});


/* NAVIGATION FUNCTIONS */

function applyNavigation()
{
	applyClickEvent();
	applyNavigationFixForPhone();
	applyScrollSpy();
	applyStickyNavigation();
}

function applyClickEvent()
{
	$('li a[href*="#"]').on('click', function(e)
	{
		e.preventDefault();
		
		if( $( $.attr(this, 'href') ).length > 0 )
		{
			$('html, body').animate(
			{
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 400);
		}
		return false;
	});
}

function applyNavigationFixForPhone()
{
	$('.navbar li a').click(function(event) 
	{
		$('.navbar-collapse').removeClass('in').addClass('collapse');
	});
}

function applyScrollSpy()
{
	$('#navbar-example').on('activate.bs.scrollspy', function() 
	{
        window.location.hash = $('.nav .active a').attr('href').replace('#', '#/');
        if(window.location.hash == "#/experience"){
			$('nav').addClass('invert');
		} else {
			$('nav').removeClass('invert');
		}
	});
}

function applyStickyNavigation()
{
	lnStickyNavigation = $('.scroll-down').offset().top + 20;
	
	$(window).on('scroll', function() 
	{  
		stickyNavigation();  
	});  
	
	stickyNavigation();
}

function stickyNavigation()
{         
	if($(window).scrollTop() > lnStickyNavigation) 
	{   
		$('body').addClass('fixed');  
	} 
	else 
	{  
		$('body').removeClass('fixed');   
	}  
}

/* RESIZE FUNCTION */

function applyResize()
{
	$(window).on('resize', function() 
	{  
		lnStickyNavigation = $('.scroll-down').offset().top + 20;
	}); 
}

/* HASH FUNCTION */

// function checkHash()
// {
// 	lstrHash = window.location.hash.replace('#/', '#');
	
// 	if($('a[href='+ lstrHash +']').length > 0)
// 	{
// 		$('a[href='+ lstrHash +']').trigger('click');
// 	}
// }