<?php
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

if( !class_exists( 'vx_crmperks_notice_vxcf_ccontact' )):

class vx_crmperks_notice_vxcf_ccontact extends vxcf_ccontact{
    
public $plugin_url="https://www.crmperks.com";
public $review_link='https://wordpress.org/support/plugin/cf7-constant-contact/reviews/?filter=5#new-post';
public $option='vxcf_form';

public function __construct(){

add_filter('vx_plugin_tabs_'.$this->id, array($this, 'add_section_cf'),99);
add_filter( 'plugin_row_meta', array( $this , 'pro_link' ), 10, 2 );
$slug=$this->get_slug();
add_action( 'after_plugin_row_'.$slug, array( $this, 'plugin_msgs' ),99,3 );
add_action( 'wp_ajax_review_dismiss_'.$this->id, array( $this, 'review_dismiss' ) );
add_action('add_section_'.$this->id, array($this, 'free_plugins_notice'),99);
add_action('vx_plugin_upgrade_notice_'.$this->type, array($this, 'free_plugins_notice'),99);

 if(isset($_GET['page']) && $_GET['page'] == $this->id ){
add_filter( 'admin_footer_text', array( $this, 'admin_footer' ), 1, 2 );
//install forms
add_action( 'admin_notices', array( $this , 'install_forms_notice' ) );
 }
add_filter( 'plugins_api', array( $this, 'forms_info' ), 11, 3 ); 
}

public function install_forms_notice(){

if(!empty($_GET['page']) && $_GET['page'] == $this->id){

 if(!empty($_GET['cfx_form_dissmiss_notice'])){
        check_admin_referer('vx_nonce');
   update_option('cfx_form_install_entries_notice','true',false);
    }
    
$show=get_option('cfx_form_install_entries_notice');
if(empty($show)){        
//var_dump($link);
if(!class_exists('vxcf_form')) {
    $plugin_file='contact-form-entries/contact-form-entries.php';
$plugin_msg='';
$link=wp_nonce_url($this->link_to_settings().'&cfx_form_dissmiss_notice=true','vx_nonce');

  if(file_exists(WP_PLUGIN_DIR.'/'.$plugin_file)) {
$url=admin_url("plugins.php?action=activate&plugin=$plugin_file");      
$url=wp_nonce_url( $url , "activate-plugin_{$plugin_file}"); 
$plugin_msg=__('Activate Plugin','crm-perks-forms');
}else{
$url=admin_url("update.php?action=install-plugin&plugin=$plugin_file");
$url=wp_nonce_url( $url, "install-plugin_$plugin_file");  
$plugin_msg=__('Install Plugin','crm-perks-forms');  
} 
$msg =sprintf(__('Want to save conatct form 7 submissions? Manage contact form 7 entries , View Constant Contact Status of any entry and Resend any entry to Constant Contact with free %sConatct Form Entries Plugin%s','crm-perks-forms'),'<a href="https://wordpress.org/plugins/contact-form-entries/" target="_blank">','</a>');
?>
<div class="notice-warning settings-error notice is-dismissible below-h2" style="font-weight: bold">
<p><?php echo $msg; ?></p>
<p><a href="<?php echo $url ?>"><?php echo $plugin_msg; ?></a> | <a href="<?php echo $link; ?>"><?php _e('Dismiss this notice','crm-perks-forms'); ?></a></p>
</div>
<?php
}
  } }
  
} 

public function forms_info( $data, $action = '', $args = null ) {
 $plugin=isset($_REQUEST['plugin']) ? $_REQUEST['plugin'] : '';
$slug = isset( $args->slug ) ? $args->slug : $plugin;   
if($slug == 'contact-form-entries/contact-form-entries.php'){
   $arr=new stdClass();
   $arr->download_link='https://downloads.wordpress.org/plugin/contact-form-entries.zip';  
return $arr;
} 
return $data;
}

  /**
  * display plgin messages
  * 
  * @param mixed $type
  */
public function plugin_msgs($file,$data,$status){
    $plugin_url=$this->plugin_url();
    $message=__('This plugin has Premium add-ons and many powerful features.','contact-form-entries');
    $message.=' <a href="'.$plugin_url.'" target="_blank" style="font-color: #fff; font-weight: bold;">'.__('Go Premium','contact-form-entries').'</a>';
?>
  <tr class="plugin-update-tr"><td colspan="5" class="plugin-update">
  <style type="text/css"> .vx_msg a{color: #fff; text-decoration: underline;} .vx_msg a:hover{color: #eee} </style>
  <div style="background-color: rgba(224, 224, 224, 0.5);  padding: 5px; margin: 0px 10px 10px 28px "><div style="background-color: #d54d21; padding: 5px 10px; color: #fff" class="vx_msg"> <span class="dashicons dashicons-info"></span> <?php echo wp_kses_post($message) ?>
</div></div></td></tr>
<?php 
}
  
public function review_dismiss(){
$install_time=get_option($this->id."_install_data");
if(!is_array($install_time)){ $install_time =array(); }
$install_time['review_closed']='true';
update_option($this->id."_install_data",$install_time,false);
die();
}
public function admin_footer($text) {
    if(isset($_GET['page']) && $_GET['page'] == $this->id ){
$text=sprintf(__( 'if you enjoy using %s, please %s leave us a %s rating%s. A %shuge%s thank you in advance.','contact-form-entries'),'<b>'.self::$title.'</b>','<a href="'.$this->review_link.'" target="_blank" rel="noopener noreferrer">','&#9733;&#9733;&#9733;&#9733;&#9733;','</a>','<b>','</b>');
} return $text;
}
public function review_notice() { 
 $install_time=get_option($this->id."_install_data");
   if(!is_array($install_time)){ $install_time =array(); }
   if(empty($install_time['time'])){
       $install_time['time']=current_time( 'timestamp' , 1 );
      update_option($this->id."_install_data",$install_time,false); 
   }
   
    $time=current_time( 'timestamp' , 1 )-(DAY_IN_SECONDS*3);
 if(!empty($install_time) && is_array($install_time) && !empty($install_time['time']) && empty($install_time['review_closed'])){
   $time_i=(int)$install_time['time'];
    if($time > $time_i){ 
        ?>
        <div class="notice notice-info is-dismissible vxcf-review-notice" style="margin: 14px 0 -4px 0">
  <p><?php echo sprintf(__( 'You\'ve been using Contact Form 7 Constant Contact Plugin for some time now; we hope you love it!.%s If you do, please %s leave us a %s rating on WordPress.org%s to help us spread the word and boost our motivation.','contact-form-entries'),'<br/>','<a href="'.$this->review_link.'" target="_blank" rel="noopener noreferrer">','&#9733;&#9733;&#9733;&#9733;&#9733;','</a>'); ?></p>
  <p><a href="<?php echo $this->review_link ?>"  target="_blank" rel="noopener noreferrer"><?php _e('Yes, you deserve it','contact-form-entries') ?></a> | <a href="#" id="vxcf_close_notice_a"><?php _e('Dismiss this notice','contact-form-entries'); ?></a></p>
        </div>
        <script type="text/javascript">
            jQuery( document ).ready( function ( $ ) {
                $( document ).on( 'click', '.vxcf-review-notice #vxcf_close_notice_a', function ( e ) {
                       e.preventDefault(); $('.vxcf-review-notice .notice-dismiss').click();
 //$.ajax({ type: "POST", url: ajaxurl, async : false, data: {action:"vxcf_form_review_dismiss"} });          
        $.post( ajaxurl, { action: 'review_dismiss_<?php echo $this->id ?>' } );
                } );
            } );
        </script>
        <?php
    } }
}    
  
public function add_section_cf($tabs){
$tabs["vxc_notice"]=array('label'=>__('Go Premium','contact-form-entries'),'function'=>array($this, 'notice'));
  $this->review_notice();       

return $tabs;
}

public function notice(){
$url=$this->get_base_url();
$plugin_url=$this->plugin_url(); 
?>
<style type="text/css">
    .vx_row{
padding: 40px 10px;
margin: 0px 0px;
border-bottom: 0px solid #ddd;
        font-family: 'Open Sans', sans-serif; /*"Raleway",*/
    }
    .vx_row h1{
        text-align: center;
     font-weight: 300;
        font-size: 35px;
  
        line-height: normal;
        display: inline-block;
        width: 100%;
 
    }
    .vx_row:nth-child(even){

    }
    .vx_row:nth-child(odd){
      background: #fff;
    }
    .vx_row .vx_row_title img{
        display: table-cell;
        vertical-align: middle;
        width: auto;
        margin-right: 15px;
    }
    .vx_row h2{
        display: inline-block;
        vertical-align: middle;
        padding: 0;
        font-size: 24px;
    }



    .vx_row p{
        font-size: 13px;
        margin: 25px 0;
    }


    .vx_row_inner:after{
        display: block;
        clear: both;
        content: '';
    }
    .vx_row_inner .col-1,
    .vx_row_inner .col-2{
        float: left;
        box-sizing: border-box;
        padding: 0 15px;
    }
    .vx_row_inner .col-1 img{
        max-width: 100%;
        margin-bottom: 15px;
    }
    .vx_row_inner .col-1{
        width: 50%;
    }
    .vx_row_inner .col-2{
        width: 50%;
    }


    @media (max-width: 700px){
        .wrap{
            margin-right: 0;
        }
        .vx_row{
            margin: 0;
        }
        .vx_row_inner .col-1,
        .vx_row_inner .col-2{
            width: 100%;
            padding: 0 15px;
            float: none;
        }
    }

    .col-1 img{
-webkit-box-shadow: 0px 0px 11px -2px rgba(110,110,110,1);
-moz-box-shadow: 0px 0px 11px -2px rgba(110,110,110,1);
box-shadow: 0px 0px 11px -2px rgba(110,110,110,1);
    }
    .gform_tab_content{
        overflow: visible !important;
    }
.vx_pro_version .fa{
color: #727f30; font-size: 18px; vertical-align: middle;   
}    
</style>
<div class="updated below-h2 vx_pro_version" style="border-left-color: #1192C1; margin: 30px 20px 30px 0px">
<h2>Premium Version</h2>
<p><i class="fa fa-check"></i> All Constant Contact fields.</p>
<p><i class="fa fa-check"></i> Add customer to multiple Constant Contact lists.</p>
<p><i class="fa fa-check"></i> Google Analytics Parameters and Geolocation of a visitor who submitted the form.</p>
<p><i class="fa fa-check"></i> Lookup lead's email using email lookup apis.We support all googd email lookup apis like Fullcontact , Towerdata and pipl.com API.</p>
<p><i class="fa fa-check"></i> Verify lead's phone number and get detailed information about phone number using phone lookup apis, We support many good phone lookup apis like everyoneapi, Clearbit api , whitepages api , twilio api and numverify api.</p>
<p><i class="fa fa-check"></i> 20+ addons.</p>

<p>By purchasing the premium version of the plugin you will get access to advanced marketing features and you will get one year of free updates & support</p>
<p>
<a href="<?php echo $plugin_url ?>" target="_blank" class="button-primary button">Go Premium</a>
</p>
</div>

<?php  
return;
}
public function plugin_url() {
  return  $this->plugin_url.'?vx_product='.$this->domain;
} 
public function wp_id() { 
$id='';
if(function_exists('wp_get_theme')){  
$theme=wp_get_theme(); 
if(property_exists($theme,'stylesheet')){
$id=md5($theme->stylesheet);}
}
return $id;
}
public function pro_link($links,$file){
    $slug=$this->get_slug();
    if($file == $slug){
    $url=$this->plugin_url();
    $links[]='<a href="'.$url.'"><b>Go Premium</b></a>';
    }
   return $links; 
}
public function free_plugins_notice(){
?>
<div class="updated below-h2" style="border: 1px solid  #1192C1; border-left-width: 6px; padding: 5px 12px;">
<h3>Our Other Free Plugins</h3>

<p><b><a href="https://wordpress.org/plugins/contact-form-entries/" target="_blank">Contact Form Entries</a></b> saves contact form submissions from all popular contact forms(contact form 7 , crmperks forms, ninja forms, Gravity forms etc) into database.</p>

<p><b><a href="https://wordpress.org/plugins/crm-perks-forms/" target="_blank">CRM Perks Forms</a></b> is lightweight and highly optimized contact form builder with Poups and floating buttons.</p>

<p><b><a href="https://wordpress.org/plugins/support-x/" target="_blank">Support X - Wordpress Helpdesk</a></b> Shows user tickets from HelpScout, ccontact, FreshDesk, Desk.com and Teamwork in wordpress. Users can create new tickets and reply to old tickets from wordpress.</p>
<p><b><a href="https://wordpress.org/plugins/woo-ccontact-plugin-crm-perks/" target="_blank">WooCommerce Salesforce Plugin</a></b> allows you to quickly integrate WooCommerce Orders with Salesforce CRM.</p>
<p><b><a href="https://wordpress.org/plugins/gf-freshdesk/" target="_blank">Gravity Forms FreshDesk Plugin</a></b> allows you to quickly integrate Gravity Forms with FreshDesk CRM.</p>
</div>
<?php    
}



}
new vx_crmperks_notice_vxcf_ccontact();
endif;
