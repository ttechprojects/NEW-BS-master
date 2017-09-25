/*
 *
 * login-View modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */

function showViewForm(){

    $('.viewBox').fadeIn('fast'); 
    $('.modal-title').html('<br>View/Edit a booking');
    $('.error').removeClass('alert alert-danger').html(''); 
}
function showViewForm2(){

    $('.viewBox2').fadeIn('fast'); 
    $('.modal-title').html('<br>View/Edit a booking');
    $('.error').removeClass('alert alert-danger').html(''); 
}

function showLoginForm(){

    $('.loginBox').fadeIn('fast');    
    $('.modal-title').html('<br>Add a booking');
    $('.error').removeClass('alert alert-danger').html(''); 
}

function showCMSForm(){

    $('.CMSBox').fadeIn('fast');    
    $('.modal-title').html('<br>Add an advertisement');
    $('.error').removeClass('alert alert-danger').html(''); 
}

function showScheduleForm(){

    $('.ScheduleBox').fadeIn('fast');    
    $('.modal-title').html('<br>Add a Schedule');
    $('.error').removeClass('alert alert-danger').html(''); 
}

function showAddRoom(){

    $('.addRoom').fadeIn('fast');    
    $('.modal-title').html('<br>Add a Room');
    $('.error').removeClass('alert alert-danger').html(''); 
}

function showViewRoom(){

    $('.viewRoom').fadeIn('fast');    
    $('#viewRoomHeading').html('<br>View Meetings');
    $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    

    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openViewModal2(){
    if(window.location.href.indexOf("m_id") > -1) {
       

    showViewForm2();
    setTimeout(function(){
        $('#viewModal2').modal('show');    
    }, 230);
    }
  else if(window.location.href.indexOf("r_id") > -1){
    showViewRoom();
    setTimeout(function(){
        $('#viewRoom').modal('show');    
    }, 230);
  }
}
function openViewModal(){
    showViewForm();
    setTimeout(function(){
        $('#viewModal').modal('show');    
    }, 230);
    
}

function openAddRoom(){
    showAddRoom();
    setTimeout(function(){
        $('#addRoom').modal('show');    
    }, 230);
    
}

function openCMSModal(){
    showCMSForm();
    setTimeout(function(){
        $('#CMSModal').modal('show');    
    }, 230);
    
}

function openScheduleModal(){
    showScheduleForm();
    setTimeout(function(){
        $('#ScheduleModal').modal('show');    
    }, 230);
    
}

function getMeeting() {
    window.location.href="home.php?m_id="+$('#meetingid').val();
    
}

function addCMS(){
    window.location.href='php/phpupload_content.php';
}

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

function edit(){
    if($('#edit-button').val()=="Edit a meeting"){
        $('.view').removeAttr('readonly');
        $('#edit-button').val('Save Changes');

    }
    else{
        window.location.href='php/editbooking.php?m_id='+$('#mid').val()+'&m_name='+$('#m_name').val()+'&s_name='+$('#s_name').val()+'&s_id='+$('#s_id').val()+'&date='+$('#edit-date').val()+'&start='+$('#edit-stime').val()+'&end='+$('#edit-etime').val()+'&nog='+$('#nog').val()+'&room='+$('#room').val()+'&cont='+$('#contact').val()+'&email='+$('#email').val();
    }
}

function addRoom(){
    window.location.href='php/add_room.php?r_name='+$('#rname').val()+'&r_id='+$('#rid').val()+'&capacity='+$('#capacity').val();
}
   