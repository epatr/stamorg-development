<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<p class="control has-icons-left">
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="input is-medium search-field" id="<?= $unique_id; ?>" name="s">
    <span class="icon is-normal is-left"><i class="fa fa-search"></i></span>
    </form>
</p>