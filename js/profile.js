$('#profile').hover(function ()
 {
    $('#container').show();
},function()
{
    $('#container').hide();
});


function myFunction()
{
    var val=$('#select').val();
    if(val=='addImage')
    {
        $('#addImage').show();
        $('#addDocument').hide();
        $('#addVedio').hide();
    }
    if(val=='addVedio')
    {
        $('#addVedio').show();
        $('#addImage').hide();
        $('#addDocument').hide();
    }
    if(val=='addDocument')
    {
        $('#addDocument').show();
        $('#addImage').hide();
        $('#addVedio').hide();

    }
    
}

$('#btn2').click(function(){
    $('#error').hide();
});
function imageclick(str1)
{ 
    $('#allvedios').hide();
    $('#alldocuments').hide();
    $('#allimages').show();
    $.ajax(
        {
            url : '../controller/sign.php?type=getimage',
            type:'post',
            data: 'email='+str1,
            success:function(res)
            {   console.log(res);
                arr = JSON.parse(res);
                $('#allimages').html('<table id="tbl4"><tr><th>Name</th><th><center>Images</center></th></tr></table>')
                for(let x of arr)
                {   
                    $('#tbl4').append
                    (
                        '<tr><th>'+x.imagename+'</th><td><img width="300px" height="200px" src=../upload/img/'+x.imagename+'></td></tr>'
                    );
                }
                
            }


        }
    );
}
function vedioclick(str1)
{ 
   $('#allimages').hide();
   $('#alldocuments').hide();
    $('#allvedios').show();
    $.ajax(
        {
            url : '../controller/sign.php?type=getvedio',
            type:'post',
            data: 'email='+str1,
            success:function(res)
            {   console.log(res);
                arr = JSON.parse(res);
                $('#allvedios').html('<table id="tbl5"><tr><th>Name</th><th><center>Vedios</center></th></tr></table>');
                for(let x of arr)
                {   
                    $('#tbl5').append
                    (
                        '<tr><th>'+x.vedioname+'</th><td><a href="../upload/vedio/'+x.vedioname+'" >click here to play</a> </td></tr>'
                    );
                }
               
            }


        }
    );
}
function documentclick(str1)
{ 
    $('#allimages').hide();
    $('#allvedios').hide();
    $('#alldocuments').show();
    $.ajax(
        {
            url : '../controller/sign.php?type=getdocument',
            type:'post',
            data: 'email='+str1,
            success:function(res)
            {   console.log(res);
                arr = JSON.parse(res);
                $('#alldocuments').html('<table id="tbl6"><tr><th>Name</th><th><center>Document</center></th></tr></table>');
                for(let x of arr)
                {  
                    $('#tbl6').append
                    (
                        '<tr><th>'+x.documentname+'</th><td><a href="../upload/document/'+x.documentname+'" >click here to open</a></td></tr>'
                    );
                }
                
            }


        }
    );
}