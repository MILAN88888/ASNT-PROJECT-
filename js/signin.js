$('#signin').click(function(){
    $('#container').show(1000);
    
});
$('#close').click(function () 
{
        $('#container').slideUp(1000);
});
$('#submit').click(function()
{   
    var email=$('#email').val();
    var pass=$('#pass').val();
    var err=0;
    if(email=='')
    {
        $('#emailerror').html('Please enter your email address');
        err=1;
    }
    if(pass=='')
    {
        $('#passerror').html('Please enter your password');
        err=1;
    }
    // $.ajax(
    // {
    //     url : 'controller/signin.php',
    //     type : 'post',
    //     data : 'email='+email+'&pass='+pass,
    //     success : function(res)
    //     {
    //         console.log(res);
    //         window.location.href = 'view/profile.php';
    //     }


    // });
    if(err==0)
    {
        $('#logform').submit();
    }
    
});
