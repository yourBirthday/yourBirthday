$(document).ready(
	function(event) {
//	$("#audiotag1").play();

	$("nav li")
		.each(
			function(i) {
				$(this).unbind("click");
				$(this)
					.bind("click",
						function(event) {
							$(".mainTabs").hide();
							$("#"+$(this).attr("tabs")+"").show();
							
							if ($(this).index() == 4) {
								$("#guestbook-formDiv").hide();
								$("#guestbook-linkDiv").show();
							}
						}
					);
			}
		);
		
		$("#content-2 input").unbind("click");
		$("#content-2 input")
			.bind("click",
				function(event) {
					alert(1);
				}
			);
			
		$("#content-3 input:eq(0)").unbind("click");
		$("#content-3 input:eq(0)")
			.bind("click",
				function(event) {
					alert(1);				
				}
			);

		$("#content-3 input:eq(1)").unbind("click");
		$("#content-3 input:eq(1)")
			.bind("click",
				function(event) {
					alert(2);				
				}
			);

		$("#content-4 input").unbind("click");
		$("#content-4 input")
			.bind("click",
				function(event) {
					alert(1);				
				}
			);

		$("#content-5 #submit-comment-input").unbind("click");
		$("#content-5 #submit-comment-input")
			.bind("click",
				function(event) {
					document.getElementById("guestBookForm").submit();
				}
			);
			
		$("#guestbook-linkDiv").unbind("click");
		$("#guestbook-linkDiv h4")
			.bind("click",
				function(event) {
					$("#guestbook-formDiv").show();
					$("#guestbook-linkDiv").hide();
				}
			);
})

