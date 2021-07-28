        <div class="changing-buttons">
            <?= anchor('form/profile', 'My Profile', array('class' => 'logout-btn buttonBlue')); ?>
            <?= anchor('form/logout', 'Logout', array('class' => 'logout-btn buttonBlue')); ?>
        </div>

        <?= form_open_multipart('form/gallery'); ?>

            <p class="error" style="text-align: center;"><?= empty($gallery_message) ? '' : $gallery_message; ?></p>

            <input type="file" name="gallery[]" id="gallery" multiple>

            <?= empty($gallery_error_message) ? '' : $gallery_error_message; ?>

            <input type="submit" value="Upload" class="button buttonBlue" name="upload_gallery">

        <?= form_close(); ?>

        <?php
            if (!empty($userdata)) { ?>
                <div id="gallery-images" class="row">
                    <?php
                        foreach ($userdata as $image) {
                            echo    '<div class="col-2">
                                        <div class="image">
                                            <img src="'.base_url($image['image_path']).'" alt="" class="img-fluid">'.
                                            anchor('form/delete_image/'.$image['id'], 'Delete Image')
                                        .'</div>
                                    </div>';
                        }
                    ?>
                </div>
            <?php }
