$(document).ready(function(){
    $('#step_2').hide();
    $('#step_end').hide();
    
    $('#file_upload').uploadify({
        'swf'       : 'uploadify/uploadify.swf',
        'uploader'  : 'uploadify/uploadify.php',
        'cancelImg' : 'uploadify/uploadify-cancel.png',
        'folder'    : 'uploads',
        'auto'      : true
        // Your options here
    });
});



function go_to_step2()
{
    $('#step_1').hide();
    $('#step_2').show();
    $('.tablist').localScroll({
              target:$(this).next('li')});
}

function go_to_finish()
{
    $('#step_2').hide();
    $('#step_end').show();
}

function aa()
{
    alert("<?php aaa(); ?>");
}

