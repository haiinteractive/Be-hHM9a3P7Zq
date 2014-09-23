
var base_url = '/media';
      $(document).ready(function(){
        
              $('#btn-register').on('click', function(){
                  //$(this).attr('disabled', 'disabled');
                  var params = 'username='+$("#username").val()+'&email='+$("#email").val()+'&userpwd='+$('#userpwd').val()+'&retypeuserpwd='+$('#retypeuserpwd').val()+"&purpose=registration";
                  var request_url = base_url+'/users/registration';
                  call( params, request_url );
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

