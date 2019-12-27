<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page_name = 'Post';
include_once('bj.php')
?>
</head>
<body>
    <a id="top"></a>
    <div class="header">
        <h1>Joe-abdo</h1>
        <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="<?php echo $tld?>/"><i class="fas fa-home"></i><span class="hide"> Home</span></a>
        <a href="#top" class="active"><i class="fas fa-comment-alt"></i><span class="hide"> Post</span></a>
        <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>
        <a href="/about"><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
    </div>
    <div class="column middle">
        <div style="text-align:center;">
            <div class="container">
                <form action="/action_page" method="post" enctype="multipart/form-data">
                    <textarea name="file" placeholder="What's up, nigga?" style="text-align:left" maxlength="1200"></textarea>
                    <input type="file" accept='image/*' name="image" id="image-source" onchange="previewImage();" />
					<label for="image-source">+Add image <i class="far fa-file-image"></i> <b>?</b></label>
                    <img id="image-preview" src="." alt="" style="width:50%;max-width:200px;max-height:200px;display:none;margin-left:auto;margin-right:auto;" />
                    <script>
                        function previewImage() {
                            document.getElementById("image-preview").style.display = "block";
                            var oFReader = new FileReader();
                            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

                            oFReader.onload = function(oFREvent) {
                                document.getElementById("image-preview").src = oFREvent.target.result;
                            };
                        };
                        var timezone_offset_minutes = new Date().getTimezoneOffset();
                        timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;

                        console.log(timezone_offset_minutes);
                        document.cookie = "tyme=" + timezone_offset_minutes;
                    </script>
                    <input type="reset" value="Cancel" onclick="document.getElementById('image-preview').style.display = 'none'" style="font-weight: bold;">
                    <input type="submit" value="Post&nbsp;&rarr;" onclick="this.disabled=true;this.value='Posting...';this.form.submit();" style="font-weight: bold;" />
                </form>
            </div>
        </div>
    </div>
    <!-- body -->
</html>