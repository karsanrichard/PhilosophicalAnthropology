<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>jQuery File Upload Example</title>
<style type="text/css">
	.bar {
    height: 18px;
    background: green;
}
</style>
</head>
<body>
<input id="fileupload" type="file" name="files[]" data-url="<?php echo base_url() .'assets/fileupload/server/php/'?>" multiple>
<div id="progress">
    <div class="bar" style="width: 0%;"></div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src = "<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script src="<?php echo base_url() .'assets/fileupload/js/vendor/jquery.ui.widget.js'?>"></script>
<script src="<?php echo base_url() .'assets/fileupload/js/jquery.iframe-transport.js'?>"></script>
<script src="<?php echo base_url() .'assets/fileupload/js/jquery.fileupload.js'?>"></script>
<script>
$(function () {
   $('#fileupload').fileupload({
        dataType: 'json',
        add: function (e, data) {
            data.context = $('<button/>').text('Upload')
                .appendTo(document.body)
                .click(function () {
                    data.context = $('<p/>').text('Uploading...').replaceAll($(this));
                    data.submit();
                });
        },
        done: function (e, data) {
            data.context.text('Upload finished.');
        }
    });
});
</script>
</body> 
</html>