
<?php
if( ! empty( $_GET['wplp-dismiss-notice'] ) && 'true' == $_GET['wplp-dismiss-notice'] ) {
    update_option( 'wplp_legal_page', true );
}

if( ! isset( $_GET['wplp-dismiss-notice'] ) ) { ?>

    <div class="wpcu-dashboard-notice">
        <p>
        <?php
            echo wp_kses_post( sprintf(
                /* translators: %s: documentation URL */
                __( 'We are giving away 25 premium licenses of Legal Pages to our users for FREE. Claim before it’s gone! To claim <a href="%s" target="_blank">Click here.</a>', 'woocommerce-product-carousel-slider-and-grid-ultimate' ),
                'https://wpwax.com/contact'
            ) );
        ?>
        </p>
        <a class="wpcu-dashboard-notice__dismiss" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wplp-dismiss-notice', 'true' ) ) ); ?>"><?php esc_html_e( 'Dismiss', 'woocommerce' ); ?></a>
    </div>

<?php } ?>
