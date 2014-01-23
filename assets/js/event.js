/**
 * Created by reymadrid on 1/23/14.
 */
$(document).ready(function () {

    //variable declarations and assignments
    var signout = $('#signout');
    var account = $('#account');

    //tutorials link 'mouseenter' and 'mouseleave' effect using slideToggle()
    account.bind('mouseenter mouseleave', function(){
        signout.slideToggle(100);
        return false;
    });

});
