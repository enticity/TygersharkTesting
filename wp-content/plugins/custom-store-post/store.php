<?php
/*
Plugin Name: Custom Store Post
Description: Custom post type to create a store
Version: 1.0
Author: Bradley Haveman
*/

add_action( 'init', 'create_store' ); //Launch create_store fuction

/**
 * Create the new post type (stores)
 */
function create_store() {
    register_post_type( 'stores',
        array(
            'labels' => array(
                'name' => 'Stores',
                'singular_name' => 'Store',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Store',
                'edit' => 'Edit',
                'edit_item' => 'Edit Store',
                'new_item' => 'New Store',
                'view' => 'View',
                'view_item' => 'View Store',
                'search_items' => 'Search Stores',
                'not_found' => 'No Stores found',
                'not_found_in_trash' => 'No Stores found in Trash',
                'parent' => 'Parent Store'
            ),

            'public' => true,
            'menu_position' => 15,
            'supports' => array( ''),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/icon.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

add_action( 'admin_init', 'my_admin' ); //Launch my_admin fuction

/**
 * Added the meta box for custom fields
 */
function my_admin() {
    add_meta_box( 'stores_meta_box',
        'Store Details',
        'display_stores_meta_box',
        'stores', 'normal', 'high'
    );
}

/**
 * Display the store information in the editor
 *
 * @param Store   $store  Store object
 */
function display_stores_meta_box( $store ) {

    $store_title = esc_html( get_post_meta( $store->ID, 'store_title', true ) );
    $store_add = esc_html( get_post_meta( $store->ID, 'store_add', true ) );
    $store_city = esc_html( get_post_meta( $store->ID, 'store_city', true ) );
    $store_prov = esc_html( get_post_meta( $store->ID, 'store_prov', true ) );
    $store_country = esc_html( get_post_meta( $store->ID, 'store_country', true ) );
    $store_email = esc_html( get_post_meta( $store->ID, 'store_email', true ) );
    $store_phone = esc_html( get_post_meta( $store->ID, 'store_phone', true ) );
    $store_desc = esc_html( get_post_meta( $store->ID, 'store_desc', true ) );
    
    ?>

    <h1>Store Title</h1>
    <input style="width: 100%" type="text" name="store_store_title" value="<?php echo $store_title; ?>" /><br><br>
    <table>
        <tr>
            <td style="width: 100%">Address</td>
            <td><input size="48" type="text" name="store_store_add" value="<?php echo $store_add; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">City</td>
            <td><input size="48" type="text" name="store_store_city" value="<?php echo $store_city; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Province</td>
            <td>
                <select name="store_store_prov">
                    <option value="AB" <?php if($store_prov == "AB"){echo 'selected="selected"';}?> >AB</option>
                    <option value="BC" <?php if($store_prov == "BC"){echo 'selected="selected"';}?> >BC</option>
                    <option value="MB" <?php if($store_prov == "MB"){echo 'selected="selected"';}?> >MB</option>
                    <option value="NB" <?php if($store_prov == "NB"){echo 'selected="selected"';}?> >NB</option>
                    <option value="NL" <?php if($store_prov == "NL"){echo 'selected="selected"';}?> >NL</option>
                    <option value="NS" <?php if($store_prov == "NS"){echo 'selected="selected"';}?> >NS</option>
                    <option value="ON" <?php if($store_prov == "ON"){echo 'selected="selected"';}?> >ON</option>
                    <option value="PE" <?php if($store_prov == "PE"){echo 'selected="selected"';}?> >PE</option>
                    <option value="QC" <?php if($store_prov == "QC"){echo 'selected="selected"';}?> >QC</option>
                    <option value="SK" <?php if($store_prov == "SK"){echo 'selected="selected"';}?> >SK</option>
                    <option value="NT" <?php if($store_prov == "NT"){echo 'selected="selected"';}?> >NT</option>
                    <option value="NU" <?php if($store_prov == "NU"){echo 'selected="selected"';}?> >NU</option>
                    <option value="YT" <?php if($store_prov == "YT"){echo 'selected="selected"';}?> >YT</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 100%">Country</td>
            <td><input size="48" type="text" name="store_store_country" value="<?php echo $store_country; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Email</td>
            <td><input size="48" type="email" name="store_store_email" value="<?php echo $store_email; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Phone</td>
            <td><input size="48" type="number" name="store_store_phone" value="<?php echo $store_phone; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Description</td>
            <td><textarea rows="4" cols="50"  name="store_store_desc" ><?php echo $store_desc; ?></textarea></td>
        </tr>
        
    </table>
    <?php
}

add_action( 'save_post', 'add_store_fields', 10, 2); //Launch add_store_fields fuction

/**
 * Add the store fields
 *
 * @param Store ID   $store_id  id of the store
 * @param Store   $store  Store object
 */
function add_store_fields( $store_id, $store ) {
    if ( $store->post_type == 'stores' ) {    
        if ( isset( $_POST['store_store_title'] ) && $_POST['store_store_title'] != '' ) {
            update_post_meta( $store_id, 'store_title', $_POST['store_store_title'] );
        }
        
        if ( isset( $_POST['store_store_add'] ) && $_POST['store_store_add'] != '' ) {
            update_post_meta( $store_id, 'store_add', $_POST['store_store_add'] );
        }
        
        if ( isset( $_POST['store_store_city'] ) && $_POST['store_store_city'] != '' ) {
            update_post_meta( $store_id, 'store_city', $_POST['store_store_city'] );
        }
        
        if ( isset( $_POST['store_store_prov'] ) && $_POST['store_store_prov'] != '' ) {
            update_post_meta( $store_id, 'store_prov', $_POST['store_store_prov'] );
        }
        
        if ( isset( $_POST['store_store_country'] ) && $_POST['store_store_country'] != '' ) {
            update_post_meta( $store_id, 'store_country', $_POST['store_store_country'] );
        }
        
        if ( isset( $_POST['store_store_email'] ) && $_POST['store_store_email'] != '' ) {
            update_post_meta( $store_id, 'store_email', $_POST['store_store_email'] );
        }
        
        if ( isset( $_POST['store_store_phone'] ) && $_POST['store_store_phone'] != '' ) {
            update_post_meta( $store_id, 'store_phone', $_POST['store_store_phone'] );
        }
        
        if ( isset( $_POST['store_store_desc'] ) && $_POST['store_store_desc'] != '' ) {
            update_post_meta( $store_id, 'store_desc', $_POST['store_store_desc'] );
        }
    }
}

add_filter( 'template_include', 'include_template_function', 1 );

function include_template_function( $template_path ) {
    if ( get_post_type() == 'stores' ) {
        if ( is_single() ) {
            if ( $theme_file = locate_template( array ( 'single-store.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-store.php';
            }
        }
    }
    return $template_path;
}


?>
