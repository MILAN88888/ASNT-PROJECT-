$('#signup').click(function(){
    $('#containers').show(1000);
    
});
$('#closes').click(function () 
{
        $('#containers').slideUp(1000);
});
$('#logforms').submit(function(e)
{   
    var email=$('#emails').val();
    var pass=$('#passs').val();
    var fname=$('#fnames').val();
    var lname=$('#lnames').val();
    var cpass=$('#cpasss').val();
    var phone_no=$('#phone_nos').val();
    var address=$('#addresss').val();
    var err=0;

    if(email=='')
    {
        $('#emailerrors').html('Please enter your email address');
        err=1;
    }
    if(pass=='')
    {
        $('#passerrors').html('Please enter your password');
        err=1;
    }
    if(cpass=='')
    {
        $('#cpasserrors').html('Please enter your password');
        err=1;
    }
    if(lname=='')
    {
        $('#lnameerrors').html('Please enter your password');
        err=1;
    }
    if(fname=='')
    {
        $('#fnameerrors').html('Please enter your password');
        err=1;
    }
    if(address=='')
    {
        $('#addresserrors').html('Please enter your password');
        err=1;
    }
    if(phone_no=='')
    {
        $('#phoneerrors').html('Please enter your password');
        err=1;
    }
    if(err==1)
    {
        e.preventDefault();
    }
});

