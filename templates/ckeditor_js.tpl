<script src="vendars/ckeditor/ckeditor.js"></script>
{*<script src="../vendars/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>*}

<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('comments');
        CKEDITOR.replace('commentsold');
        //bootstrap WYSIHTML5 - text editor
        /*$(".textarea").wysihtml5();*/
    });
</script>