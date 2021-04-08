<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR code</title>
</head>
<body>
    <?php echo form_open_multipart('/admin/pro_QRCode'); ?>
    <div class="form">
        <input type="text" name = "url">           
        <input type="submit" name="ok" value="Thêm" class="btn btn-primary right" id = "save_form_add_bv">
    </form>
    <?php echo validation_errors();?>
</body>
</html>