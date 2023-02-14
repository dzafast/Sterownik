

    <div>
        <p><?php echo $napis2; ?></p>
    </div>        

    <form enctype="multipart/form-data" action="upload.php" method="post">
        <div class="top">
            
            <input type="hidden" name="max_file_size" value="50480">

            <input type="file" name="plik1" size="30">

            <input type="submit" name="wyslij" value="wyślij plik">
        </div>
    </form>

