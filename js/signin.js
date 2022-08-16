$('#signin').click(function(){
    $('#container').show(1000);
    
});
$('#close').click(function () 
{
        $('#container').slideUp(1000);
});
$('#logform').submit(function()
{   
    var email=$('#email').val();
    var pass=$('#pass').val();
    if(email=='')
    {
        $('#emailerror').html('Please enter your email address');
    }
    if(pass=='')
    {
        $('#passerror').html('Please enter your password');
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
});
