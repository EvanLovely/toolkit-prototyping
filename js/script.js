/* Author: Evan Lovely, OMBU Web, evan.lovely@ombuweb.com*/
$(document).ready(function() {
	/*** Early Bird stuff (Elements that users see first that need 1st crack at JS attention) */
	$("nav.mainMenu .sub").parent().hover(
	  function () {
	    $(this).find(".sub").removeClass("visuallyhidden");
	    $(this).prev().css("border-right", "none");
	  }, 
	  function () {
	    $(this).find(".sub").addClass("visuallyhidden");
	    $(this).prev().removeAttr("style");
	  }
	);
	/* END Early Bird */
	
	$("*[title]:not(.noTooltip)").tooltip();
	$(".tabWrap").tabs();
	$(".scrollWrap:not(.hasNav) .scrollable").scrollable();
	$(".scrollWrap.hasNav .scrollable").scrollable().navigator({
		navi: "#scrollNav",
		naviItem: 'a',
		activeClass: 'active'
	});

	/* Ideabook Steps */
	$("#openIdeaBook-step-3").click(function () { 
		$("#buildBook").fadeIn();
		$(this).parent().fadeOut();
		return false;
	});
	$("#step-1 .done").click(function () { 
		$("#step-1, #progress li:eq(0)").removeClass("in-progress").addClass("complete");
		$("#step-2, #progress li:eq(1)").removeClass("unavailable").addClass("in-progress");
		return false;
	});
	$("#step-2 .done").click(function () { 
		$("#step-2, #progress li:eq(1)").removeClass("in-progress").addClass("complete");
		$("#step-3, #progress li:eq(2)").removeClass("unavailable").addClass("in-progress");
		return false;
	});
	$("#step-3 input[type=submit]").click(function () { 
		$("#step-3, #progress li:eq(2)").removeClass("in-progress").addClass("complete");
		$("#step-4, #progress li:eq(3)").removeClass("unavailable").addClass("in-progress");
		return false;
	});
	$("#step-4 input[type=submit]").click(function () { 
		$("#step-4, #progress li:eq(3)").removeClass("in-progress").addClass("complete");
		$("#progress ul").css("border-color", "#87D0FB");
		return false;
	});
	
	$("#revealDists").click(function () { 
		$("#dists.hidden").removeClass("hidden");
		return false; 
	});
	
	/* Forms */
	$("#buildingStyles #milled").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$(this).addClass("selected");
		$("#views-exposed-form-building-styles #style").val("milled").parent().parent().parent().addClass("changed");
	});
	$("#buildingStyles #handcrafted").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$(this).addClass("selected");
		$("#views-exposed-form-building-styles #style").val("handcrafted").parent().parent().parent().addClass("changed"); 
	});
	$("#buildingStyles #timberFrame").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$(this).addClass("selected");
		$("#views-exposed-form-building-styles #style").val("timberFrame").parent().parent().parent().addClass("changed"); 
	});
	$("#buildingStyles #naturalAccent").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$(this).addClass("selected");
		$("#views-exposed-form-building-styles #style").val("naturalAccent").parent().parent().parent().addClass("changed"); 
	});
	
	$("#views-exposed-form-building-styles #style option[value=milled]").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$("#buildingStyles #milled").addClass("selected");
	});
	$("#views-exposed-form-building-styles #style option[value=handcrafted]").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$("#buildingStyles #handcrafted").addClass("selected");
	});
	$("#views-exposed-form-building-styles #style option[value=timberFrame]").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$("#buildingStyles #timberFrame").addClass("selected");
	});
	$("#views-exposed-form-building-styles #style option[value=naturalAccent]").click(function () { 
		$("#buildingStyles .block").removeClass("selected");
		$("#buildingStyles #naturalAccent").addClass("selected");
	});
	
	$("#views-exposed-form-building-styles .views-submit-button input").click(function () { 
		$(".view-plans").hide().removeClass("visuallyhidden").slideDown("slow");
		return false; 
	});
	
	/* END:Forms */
	
	$(".star").click(function () { 
		$(this).addClass("clicked");
	});
	
	/*** Prototyping Tools */
	
	$(".openModal").click(function () { 
		$(".modal").fadeIn(); 
		return false;
	});
	$(".closeModal").click(function () { 
		$(".modal").addClass("hidden");
		return false;
	});
	
	$(".showContent").click(function () { 
		$(this).parent().find(".content").fadeIn(); 
		return false;
	});
	$(".hideContent").click(function () { 
		$(this).parent().find(".content").fadeOut(); 
		return false;
	});
	
	$(".close").click(function () { 
		$(this).parent().remove(); 
		return false;
	});
	
	$(".removeImage").click(function () { 
		$(this).parent().find("img").remove();
		$(this).remove();
		return false;
	});
	
	$(".removeDividers").click(function () { 
		$(this).parent().removeClass("hasDividers");
		$(this).remove();
		return false; 
	});
	
	$(".addBG").click(function () { 
		$(this).parent().addClass("hasBG");
		$(this).remove();
		return false; 
	});
	
	$(".showBelow").click(function () { 
		$(this).next().css("position", "static");
		$(this).remove(); 
		return false; 
	});
	
	$(".openMapModal").click(function () { 
		$(".modal.map").removeClass("hidden"); 
		return false;
	});
	
	/* END */
	
	/* If this class isn't in your body tag, then there's a typo above */
	$("body").addClass("jQueryRan");
});

