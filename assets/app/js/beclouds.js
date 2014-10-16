
// var base_url = 'http://localhost/vijay/git_beclouds/';

var base_url = '/media';

      $(document).ready(function(){
        
              $('#btn-register').on('click', function(){
                  //$(this).attr('disabled', 'disabled');
                  var params = 'username='+$("#username").val()+'&email='+$("#email").val()+'&userpwd='+$('#userpwd').val()+'&retypeuserpwd='+$('#retypeuserpwd').val()+"&purpose=registration";
                  var request_url = base_url+'/users/registration';
                  call( params, request_url );
              });
                $('.user_editsss').on('click', function(){
                          alert('asdasdasd');
                          return false;
              });


              $("#btn-employee-add").on('click', function(){
                  var params = 'user_first_name='+$("#user_first_name").val()+'&user_last_name='+$("#user_last_name").val()+'&email='+$("#user_email").val()+'&userpwd='+$("#userpwd").val()+'&user_role='+$("#user_roles").val()+'&purpose=employee';
                  var request_url = base_url+'/employee/add';
                  call( params, request_url );
              });

              $('#btn-sign-in').on('click', function(){
                  //$(this).attr('disabled', 'disabled');
                  var params = 'email='+$("#email").val()+'&userpwd='+$('#userpwd').val()+"&purpose=login";
                  var request_url = base_url+'/users/login';
                  call( params, request_url );
              });
			  
			  $("#loginbtn").on('click', function(){
				
					var firstname = $("#us_first_name").val();
					var lastname = $("#us_last_name").val();
					var email = $("#us_email").val();
					var password = $("#uspwd").val();
					var user_roles = $("#us_roles").val();
					
					if(firstname != "" && lastname != "" && email !=""  && password != "" && user_roles != "" && validateEmail(email)==true)
					{
						 var params = 'user_first_name='+$("#us_first_name").val()+'&user_last_name='+$("#us_last_name").val()+'&email='+$("#us_email").val()+'&userpwd='+$("#uspwd").val()+'&user_role='+$("#us_roles").val()+'&purpose=employee';
                  var request_url = base_url+'/employee/add';
                  		call( params, request_url );	
					}
					
					 function validateEmail(email) {
						var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		
						if (filter.test(email)) {
							return true;
						}
						else {
							return false;
						}
					}
				});
			  
				
				$("#edit_loginbtn").on('click', function(){
				
					var firstname = $("#use_first_name").val();
					var lastname = $("#use_last_name").val();
					var email = $("#use_email").val();
					var password = $("#usepwd").val();
					var user_roles = $("#use_roles").val();
					
					if(firstname != "" && lastname != "" && email !=""  && password != "" && user_roles != "" && validateEmail(email)==true)
					{
						 var params = 'user_first_name='+$("#use_first_name").val()+'&user_last_name='+$("#use_last_name").val()+'&email='+$("#use_email").val()+'&userpwd='+$("#usepwd").val()+'&user_role='+$("#use_roles").val()+'&use_status='+$("#use_status").val()+'&usereid='+$("#usereid").val()+'&purpose=employee';
                  var request_url = base_url+'/employee/update';
                  		call( params, request_url );	
					}
					
					 function validateEmail(email) {
						var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		
						if (filter.test(email)) {
							return true;
						}
						else {
							return false;
						}
					}
					
				
				});
				
				
				$('form').submit(function(event){

				  event.preventDefault();
				
				});
				
				
				$("#categorybtn").on('click', function(){
							
						var cat_name = $("#cat_name").val();
						
						if(cat_name != "")
						{
							 var params = 'cat_name='+$("#cat_name").val()+'&purpose=category';
							 
					  var request_url = base_url+'/category/add';
							call( params, request_url );
						}
						
				});
				
				$("#edit_categorybtn").on('click', function(){
														 
						var cat_name = $("#cate_name").val();
						
						if(cat_name != "")
						{
							 var params = 'cat_name='+$("#cate_name").val()+'&cat_status='+$("#cat_status").val()+'&cat_id='+$("#cate_id").val()+'&purpose=category';
					  var request_url = base_url+'/category/update';
							call( params, request_url );
						}
						
				});
				
				
				$("#productbtn").on('click', function(){
														 
						var product_name = $("#product_name").val();
						
						if(product_name != "")
						{
							 var params = 'product_name='+$("#product_name").val()+'&purpose=product';
							  var request_url = base_url+'/product/add';
							call( params, request_url );	
						}
						
				});
				
				$("#edit_productbtn").on('click', function(){
														 
						var proe_name = $("#proe_name").val();
						
						if(proe_name != "")
						{
							 var params = 'product_name='+$("#proe_name").val()+'&product_status='+$("#product_status").val()+'&product_id='+$("#product_id").val()+'&purpose=product';
					  var request_url = base_url+'/product/update';
							call( params, request_url );
							
						}
						
				});
				
				
				$("#adtypebtn").on('click', function(){
						
					var form_adtype = $("#form_adtype").val();
					var ad_type_name = $("#ad_type_name").val();
					var ad_type_code = $("#ad_type_code").val();
					var ad_type_rate = $("#ad_type_rate").val();
					
					if(ad_type_name != "" && ad_type_code != "" && ad_type_rate !="")
					{
						 var params = 'form_adtype='+$("#form_adtype").val()+'&ad_type_name='+$("#ad_type_name").val()+'&ad_type_code='+$("#ad_type_code").val()+'&ad_type_rate='+$("#ad_type_rate").val()+'&purpose=adtype';
                  var request_url = base_url+'/adtype/add';
                  		call( params, request_url );	
					}
					
				});
				
				
			$("#edit_adtypebtn").on('click', function(){
					
					var ad_type_name = $("#edit_type_name").val();
					var ad_type_code = $("#edit_type_code").val();
					var ad_type_rate = $("#edit_rack_rate").val();
					
					
					if(ad_type_name != "" && ad_type_code != "" && ad_type_rate !="")
					{
						 var params = 'form_adtype='+$("#edit_type_roles").val()+'&ad_type_name='+$("#edit_type_name").val()+'&ad_type_code='+$("#edit_type_code").val()+'&ad_type_rate='+$("#edit_rack_rate").val()+'&status='+$("#edtype_status").val()+'&adtype_id='+$("#adtype_id").val()+'&purpose=adtype';
                  var request_url = base_url+'/adtype/update';
                  		call( params, request_url );	
					}
					
				});
				
				
				$("#companybtn").on('click', function(){
						
					var c_name = $("#c_name").val();
					var c_person = $("#c_person").val();
					var address = $("#address").val();
					var pin_code = $("#pin_code").val();
					var phone = $("#phone").val();
					var alt_phone = $("#alt_phone").val();
					var email = $("#email").val();
					var alt_email = $("#alt_email").val();
					
					if(c_name != "" && c_person != "" && address !="" && pin_code !="" && phone !="" && email !="" && validateEmail(email)==true)
					{
						 var params = 'c_name='+$("#c_name").val()+'&c_person='+$("#c_person").val()+'&address='+$("#address").val()+'&pin_code='+$("#pin_code").val()+'&phone='+$("#phone").val()+'&alt_phone='+$("#alt_phone").val()+'&email='+$("#email").val()+'&alt_email='+$("#alt_email").val()+'&purpose=company';
                  var request_url = base_url+'/company/add';
                  		call( params, request_url );	
					}
					
					 function validateEmail(email) {
						var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		
						if (filter.test(email)) {
							return true;
						}
						else {
							return false;
						}
					}
					
				});
				
				
				$("#edit_companybtn").on('click', function(){
						
					var c_name = $("#co_name").val();
					var c_person = $("#co_person").val();
					var address = $("#caddress").val();
					var pin_code = $("#cpin_code").val();
					var phone = $("#cphone").val();
					var email = $("#cemail").val();
					
					if(c_name != "" && c_person != "" && address !="" && pin_code !="" && phone !="" && email !="" && validateEmail(email)==true)
					{
						 var params = 'c_name='+$("#co_name").val()+'&c_person='+$("#co_person").val()+'&address='+$("#caddress").val()+'&pin_code='+$("#cpin_code").val()+'&phone='+$("#cphone").val()+'&email='+$("#cemail").val()+'&comp_id='+$("#comp_id").val()+'&status='+$("#comp_status").val()+'&purpose=company';
                  var request_url = base_url+'/company/update';
                  		call( params, request_url );	
					}
					
					
					 function validateEmail(email) {
						var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		
						if (filter.test(email)) {
							return true;
						}
						else {
							return false;
						}
					}
				});
				
				
				
				
  });

      var notify = function( msg ){
                var notification = new NotificationFx({
                  message : msg,
                  layout : 'other',
                  effect : 'boxspinner',
                  ttl : 90000,
                  type : 'error', // notice, warning or error
                  onClose : function() {
                    this.disabled = false;
                  }
                });
                notification.show();
                this.disabled = true;
    }

    var call = function( params, request_url){
        $(".ns-box").remove();
              $.ajax({
                            type: "POST",
                            data: params,
                            dataType:'JSON',
                            url: request_url,
                            success: function(sresponse) {
                              notify(  'Please Wait' );
                              if( sresponse > 0 ){
                                      window.location.reload();
                              }else{
                                  $(".ns-box").remove();
                                notify(  sresponse );
                                //$('input').attr('enabled', 'enabled');
                                return false;
                              }
                    }
            });
    }	