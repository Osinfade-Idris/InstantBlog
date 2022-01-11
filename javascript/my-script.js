function _hide_panel(){
    $('#login-div').hide();
    $('#reset-password-div').hide();
    $('#registration-div').hide(); 
}



function _sign_up_panel(){
    _hide_panel()
    $('#registration-div').fadeIn(1500);
}
function _log_in_panel(){
    _hide_panel()
    $('#login-div').fadeIn(1500);
   
}
function _forget_password_panel(){
    _hide_panel()
    $('#reset-password-div').fadeIn(1500);
}
