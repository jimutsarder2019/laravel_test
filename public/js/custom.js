$(document).ready(function(){
	$('.js_user_view').click(function(){
		var user_id = $(this).data('id');
		var name = $('#js_name_'+user_id).text();
		var email = $('#js_email_'+user_id).text();
		
		var _html = '<p>ID: <strong>#'+user_id+'</strong></p><p>Name: <strong>'+name+'</strong></p><p>Email: <strong>'+email+'</strong></p>'
		
		$('.js_user_modal_body').html(_html);
		$('.js_user_view_modal').modal('show');
	});
	
	
	$('.js_user_update_modal').click(function(){
		var user_id = $(this).data('id');
		var name = $('#js_name_'+user_id).text();
		var email = $('#js_email_'+user_id).text();
		
		var _html = '<p>Name: </br></br><input class="form-control" id="js_user_name_'+user_id+'" value="'+name+'"/></br><button data-id="'+user_id+'" class="btn js_user_update">Update</button></p>'
		
		$('.js_user_modal_body').html(_html);
		$('.js_user_view_modal').modal('show');
	});
	
	$(document).delegate('.js_user_update','click', function(){
		var user_id = $(this).data('id');
		var name = $("#js_user_name_"+user_id).val();
		var _token   = $('meta[name="csrf-token"]').attr('content');
		if(name){
			$.ajax({
				type: "POST",
				url: '/updateuser', // This is what I have updated
				data: { user_id: user_id, name: name,  _token: _token}
			}).done(function( msg ) {
				if(msg.status){
					$("#js_name_"+user_id).text(name);
					$('.js_user_view_modal').modal('hide');
				}
			});
		}else{
			alert('Please fill up!');
		}
	});
	
	
	$(document).delegate('.js_user_delete','click', function(){
		var user_id = $(this).data('id');
		var _token   = $('meta[name="csrf-token"]').attr('content');
		if (confirm("Are you sure,want to delete this record") == true) {
			if(user_id){
				$.ajax({
					type: "POST",
					url: '/deleteuser',
					data: { user_id: user_id, _token: _token}
				}).done(function( msg ) {
					if(msg.status){
						alert('Successfully delete!');
						$(".js_user_row_"+user_id).remove();
					}
				});
			}
		}	
	});
});



function getUser(html) {
  document.getElementById("js_user_render").innerHTML = html;
}

var _promise = new Promise(function(resolve, reject) {
  let req = new XMLHttpRequest();
  req.open('GET', "/getuser");
  req.onload = function() {
    if (req.status == 200) {
		console.log(req.response);
        resolve(req.response);
    } else {
        reject("File not Found");
    }
  };
  req.send();
});

_promise.then(
  function(value) {getUser(value);},
  function(error) {getUser(error);}
);