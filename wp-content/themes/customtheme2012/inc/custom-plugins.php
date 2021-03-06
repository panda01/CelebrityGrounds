<?php
function loadAdminScripts($hook)
{
   //echo $hook; 
    if( $hook == 'post.php' )
    {
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js' );
        wp_enqueue_script( 'my_custom_script', get_bloginfo('stylesheet_directory') . '/js/admin.js' );
    }
}

add_action('admin_enqueue_scripts', 'loadAdminScripts' );

/*
* The feature this post plugin
*/
//Add the feature this post checkbox functionality
function add_feature_this()
{
    add_meta_box("feature_this_post", "Feature this Resource?", "feature_this", "post", "normal", "low");
}

//update the options for a particular post
function update_feature_this_options()
{
    global $post;

    if( !$post )
        return;
    //if this is an autosave, or revision stop
    if( isset($post) && $post->post_type == 'revision' || isset( $_POST['autosave'] ))
        return;

    // process form data if $_POST is set 
    if( isset($_POST['featured']) ) 
    {
        update_post_meta($post->ID, "_feature_this",  "true");
    } 
    else
    {
        delete_post_meta($post->ID, '_feature_this');
    }
}

//Show the feature this plugin
function feature_this()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $featured = (array_key_exists('_feature_this', $custom))? esc_attr($custom["_feature_this"][0]) : false;
?>
    <table style="width:100%;">
        <tr id="feature-this">
            <td valign="top" style="width:15%;"><label for="featured">Feature This Post?:</label></td>
            <td valign="top"><input type="checkbox" name="featured" <?php if( $featured == "true" ) echo "checked='true'"; ?> /></td>
        </tr>
    </table>
<?php
}

//Finally attach the necessary events
add_action("admin_init", "add_feature_this");
add_action('save_post', 'update_feature_this_options');


/*
 *  The Youtube plugin
 */

//Add the feature this post checkbox functionality
function add_yt_video()
{
    add_meta_box("yt_video", "YouTube Video", "yt_video_box", "post", "normal", "low");
}

//update the options for a particular post
function update_yt_video_options()
{
    global $post;

    if( !$post )
        return;
    //if this is an autosave, or revision stop
    if( isset($post) && $post->post_type == 'revision' || isset( $_POST['autosave'] ))
        return;

    // process form data if $_POST is set 
    if( isset($_POST['yt_video_id']) ) 
        update_post_meta($post->ID, "_yt_video_id",  "true");
    else
        delete_post_meta($post->ID, '_yt_video_id');
}

//Show the feature this plugin
function yt_video_box()
{
    global $post;
    $custom = get_post_custom($post->ID);
    $ytVideoID = (array_key_exists('_yt_video_id', $custom))? esc_attr($custom["_yt_video_id"][0]) : false;
?>
    <label for="featured">YouTube Video ID:</label>
    <input type="text" name="yt_video_id" watermark="YouTube Video ID" <?php if( $ytVideoID != false ) echo 'value="' . $ytVideoID . '"'; ?> />
<?php
}

//Finally attach the necessary events
add_action("admin_init", "add_yt_video");
add_action('save_post', 'update_yt_video_options');
?>
