
(function($){
	$(document).ready(function(){
		$("#cms-menu .cms-logo > a").attr('href','http://www.iqnection.com');
		$("a.profile-link").replaceWith($("a.profile-link").text());
	});
}(jQuery))