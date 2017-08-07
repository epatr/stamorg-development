<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <p class="control has-icons-left">
        <input type="search" class="input is-medium search-field" id="<?= $unique_id; ?>" name="s">
        <span class="icon is-normal is-left"><i class="fa fa-search"></i></span>
    </p>
</form>