<!-- text image component -->
<div class="component-textimage">
    <h2 class="heading-large"><?php echo $data['heading'] ?></h2>
    <div class="component-textimage__content">
        <div class="component-textimage__image">
            <?php
                $image = $data['image'];
                $size = 'medium';

                if($image) {
                    echo wp_get_attachment_image($image, $size);
                }
            ?>
        </div>
        <div class="component-textimage__text">
            <p class="lede"><?php echo $data['intro'] ?></p>
            <?php echo $data['content'] ?>
        </div>
    </div>
</div>
<!-- /text image component -->