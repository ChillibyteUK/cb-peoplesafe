<?php
$order_image = (get_field('order') == 'text_left') ? 'order-1 order-lg-2' : 'order-1 order-lg-1';
$order_text = (get_field('order') == 'text_left') ? 'order-2 order-lg-1' : 'order-2 order-lg-2';
$modal = random_str(8);

$cols_text = 'col-lg-6';
$cols_image = 'col-lg-6';

$theme = get_field('theme');
$iconTheme = get_field('icon_theme');

$vid_margin = get_field('vid_title') == '' ? 'my-auto' : '';

?>    
<!-- text_video -->
<section class="text_video py-5 bg--<?=$theme?>">
    <div class="container">
        <?php
        if (get_field('vid_title')){
            ?>
            <h1 class="h2 mb-5"><?=get_field('vid_title')?></h1>
            <?php
        }?>
        <div class="row">
            <div class="<?=$cols_text?> text_video__content my-auto <?=$order_text?>">
                <div class="bg_grad--<?=$iconTheme?> h3 p-3">Key benefits</div>
                <?php
                while(have_rows('icon_usps')) {
                    the_row();
                    ?>
                <div class="row mb-2">
                    <div class="col-sm-2 px-0">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/icon--<?=get_sub_field('icon')?>.svg" class="icon--<?=$iconTheme?>" width="66" height="66" style="max-width:66px">
                    </div>
                    <div class="col-sm-10">
                        <h2 class="product__icon_title"><?=get_sub_field('title')?></h2>
                        <div><?=get_sub_field('description')?></div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
            <div class="<?=$cols_image?> text_video__container <?=$vid_margin?> text-center <?=$order_image?>">
                <div class="position-relative pointer">
                    <?php
                    if (get_field('video_provider') == 'Vimeo') {
                        ?>
                    <img src="<?=get_vimeo_data_from_id(get_field('video_id'), 'thumbnail_url')?>" class="<?=$image_margin?> img-fluid product_video pointer" data-toggle="modal" data-target="#modal<?=$modal?>">
                        <?php
                    }
                    else {
                        ?>
                    <img src="https://img.youtube.com/vi/<?=get_field('video_id')?>/hqdefault.jpg" class="<?=$image_margin?> img-fluid product_video pointer" data-toggle="modal" data-target="#modal<?=$modal?>">
                        <?php
                    }
                    ?>
                    <div class="play">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/play-button.svg">
                    </div>
                </div>
                <?php
                if (get_field('content_below_video')) {
                    ?>
                <div class="text-left pt-5"><?=get_field('content_below_video')?></div>
                    <?php
                }
                ?>
                <div class="modal fade" id="modal<?=$modal?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content product-modal">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?php
                                    if (get_field('video_provider') == 'YouTube') {
                                        ?>
                                    <iframe id="vid<?=$modal?>" class="embed-responsive-item" src="https://www.youtube.com/embed/<?=get_field('video_id')?>?autoplay=1" allow="autoplay; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        <?php
                                    }
                                    else {
                                        ?>
                                    <iframe id="vid<?=$modal?>" class="embed-responsive-item" src="https://player.vimeo.com/video/<?=get_field('video_id')?>?byline=0&portrait=0" allow="autoplay; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (get_field('video_provider') == 'Vimeo') {
                    ?>
<script>
(function ($) {
    function stopVideo() {
        var $frame = $('iframe#vid<?=$modal?>');
        // saves the current iframe source
        var vidsrc = $frame.attr('src');
        // strip autoplay
        vidsrc = vidsrc.replace('&autoplay=1','');
        // sets the source to nothing, stopping the video
        $frame.attr('src', '');
        // sets it back to the correct link so that it reloads immediately on the next window open
        $frame.attr('src', vidsrc);
    }
    $('#modal<?=$modal?>').on('hidden.bs.modal', function(e) {
        stopVideo();
    })
    $('#modal<?=$modal?>').on('shown.bs.modal', function(e) {
        $("iframe#vid<?=$modal?>")[0].src += "&autoplay=1";
    })

})(jQuery);
</script>
                    <?php
                }
                else {
                    ?>
<script>
(function ($) {
    var $frame = $('iframe#vid<?=$modal?>');
    var url = $frame.attr('src');
    $frame.attr('src', '');
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#modal<?=$modal?>").on('shown.bs.modal', function(){
        $frame.attr('src', url);
    });
        /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#modal<?=$modal?>").on('hide.bs.modal', function(){
        $frame.attr('src', '');
    });
})(jQuery);
</script>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "VideoObject",
    "name": "<?=get_field('name')?> | Peoplesafe",
    "description": <?=json_encode(get_field('description'))?>,
    "thumbnailUrl": "https://i.ytimg.com/vi/<?=get_field('video_id')?>/default.jpg",
    "uploadDate": "<?=get_field('video_upload_date')?>",
    "duration": "<?=cb_time_to_8601(get_field('length'))?>",
    "embedUrl": "https://www.youtube.com/embed/<?=get_field('video_id')?>"
}
</script>
                    <?php
                }
?>
            </div>
        </div>
    </div>
</section>
