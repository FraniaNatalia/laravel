<!DOCTYPE html>
<html>
    <body>
        <textarea name="editor1"></textarea>
        <script>
            CKEDITOR.replace( 'editor1', {
                height: 300,
                filebrowserUploadUrl: "/klanten",
            } );
        </script>
    </body>
</html>