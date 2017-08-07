<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="field is-horizontal">

        <div class="control has-icons-left">
            <input type="text" class="input is-medium search-field" id="<?= $unique_id; ?>" name="s">
            <span class="icon is-normal is-left"><i class="fa fa-search"></i></span>
        </div>
        <div class="control">
            <button type="submit" class="button is-info">Search</button>
        </div>

    </div>
</form>