<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.fw-iconbox` supports 3 styles:
 * `fw-iconbox-1`, `fw-iconbox-2` and `fw-iconbox-3`
 */
?>
<div class="fw-iconbox clearfix <?php echo esc_attr($atts['style']); ?>">
	<div class="fw-iconbox-image">
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	</div>
	<div class="fw-iconbox-aside">
		<div class="fw-iconbox-title">
			<h3>
                <?php if( !empty( $atts['handle_content_wrapper'] ) ): ?>
                    <a
	                    <?php if( !empty( $atts['link_target'] ) ): ?>
                            <?php echo "href = '{$atts['link_target']}'"; ?>
                        <?php else: echo "href = '#'";?>
                            <?php ?>
                        <?php endif; ?>

	                    <?php if( !empty( $atts['link_class'] ) ) { echo "class = '{$atts['link_class']}'"; } ?>
                    >
                <?php endif; ?>

                <?php echo $atts['title']; ?>

                <?php if( !empty( $atts['handle_content_wrapper'] ) ): ?>
                    </a>
                <?php endif; ?>
            </h3>
		</div>
		<div class="fw-iconbox-text">
			<p><?php echo $atts['content']; ?></p>
		</div>
	</div>
</div>

<?php //debug($atts); ?>