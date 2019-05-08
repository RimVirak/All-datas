<?php
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

if(!class_exists('vxcf_ccontact_api')){
    
class vxcf_ccontact_api extends vxcf_ccontact{
  
    public $info='' ; // info
    public $url='https://api.constantcontact.com/v2/';
    public $api_key='';
    public $error= "";
    public $timeout= "15";
    public $config= array('key'=>'wdn6c4e79f29mumfm8wzaune','secret'=>'DRTw8QBuq3mp7xyH38YR4RPW');

function __construct($info) {
     
    if(isset($info['data'])){ 
       $this->info= $info;
       if(!empty($info['data']['api_key'])){
$this->api_key=$info['data']['api_key'];   
       }
    } }
public function get_token(){
  $users=$this->get_crm_fields('');

    $info=$this->info;
    $info=isset($info['data']) ? $info['data'] : array();
    if(is_array($users) ){
    $info['valid_token']='true';    
    }else {
      unset($info['valid_token']);  
    }
    return $info;

}


public function get_crm_objects(){

$res=$this->get_lists();
 return $res;
}

public function get_crm_fields($module,$fields_type=false){

$res=array('first_name'=>array('label'=>'First Name','name'=>'first_name','type'=>'text','req'=>'true'),
'last_name'=>array('label'=>'Last Name','name'=>'last_name','type'=>'text','req'=>'true'),
'email_address'=>array('label'=>'Email','name'=>'email_address','type'=>'email','req'=>'true'),
'cell_phone'=>array('label'=>'Phone','name'=>'cell_phone','type'=>'tel'),
'fax'=>array('label'=>'Fax','name'=>'fax','type'=>'tel'),
'home_phone'=>array('label'=>'Home Phone','name'=>'home_phone','type'=>'tel'),
'work_phone'=>array('label'=>'Work Phone','name'=>'work_phone','type'=>'tel'),
'job_title'=>array('label'=>'Job Title','name'=>'job_title','type'=>'text'),
'company_name'=>array('label'=>'Company Name','name'=>'company_name','type'=>'text')
);


return $res;
}

public function get_lists(){ 
$fields=$this->post_crm('lists','get');
$users=array();   
$msg='No List Found';
if(!empty($arr[0]['error_message'])){
 $users=$arr[0]['error_message'];   
}else if(!empty($fields)){
 foreach($fields as $k=>$v){
     if(empty($v['id'])){ continue; }
     $v['id']=(string)$v['id'];
  $users[$v['id']]=$v['name'];   
 }
}
  return $users;
}


public function push_object($module,$fields,$meta){  
//check primary key
 $extra=array();

  $debug = isset($_GET['vx_debug']) && current_user_can('manage_options');
  $event= isset($meta['event']) ? $meta['event'] : '';
  $id= isset($meta['crm_id']) ? $meta['crm_id'] : '';
  if($debug){ ob_start();}
if(isset($meta['primary_key']) && $meta['primary_key']!="" && isset($fields[$meta['primary_key']]['value']) && $fields[$meta['primary_key']]['value']!=""){    
$search=$fields[$meta['primary_key']]['value'];
$q=array('email'=>$search);
$search_response=$this->post_crm('contacts','get',$q);
//var_dump($search_response); die();
if(!empty($search_response['results']) && !empty($search_response['results'][0]['id']) ){
  $id=$search_response['results'][0]['id']; 
}

  if($debug){
  ?>
  <h3>Search field</h3>
  <p><?php print_r($field) ?></p>
  <h3>Search term</h3>
  <p><?php print_r($search) ?></p>
    <h3>POST Body</h3>
  <p><?php print_r($body) ?></p>
  <h3>Search response</h3>
  <p><?php print_r($res) ?></p>  
  <?php
  }

      $extra["body"]=$search;
      $extra["response"]=$search_response;
  }


     if(in_array($event,array('delete_note','add_note'))){    
  if(isset($meta['related_object'])){
    $extra['Note Object']= $meta['related_object'];
  }
  if(isset($meta['note_object_link'])){
    $extra['note_object_link']=$meta['note_object_link'];
  }
}

 $status=$action=$method=""; $send_body=true;
 $entry_exists=false;
//var_dump($fields,$meta); die();
$object_url='';
$is_main=false;
$post=array();
if($id == ""){
    //insert new object
$action="Added";  $status="1"; $method='post';
$object_url='contacts';
$is_main=true;
}else{
 $entry_exists=true;
$action="Updated"; $status="2";
if(empty($meta['update'])){     
 $is_main=true;
$object_url='contacts/'.$id;
 $method='put';
 } 
}

if($is_main){

$crm_fields=array();
if(!empty($meta['fields'])){
  $crm_fields=$meta['fields'];  
}

if(is_array($fields) && count($fields)>0){
    $merge_fields=array();
    foreach($fields as $k=>$v){
        $val=$v['value'];
  if(!empty($crm_fields[$k]['type'])){ 
  if($k == 'email_address'){
 $post['email_addresses'][]=array('email_address'=>$val);     
  }else{    
  $post[$k]=$val;
  }     
}
}
$lists=array(array('id'=>$meta['object']));
if(!empty($meta['assign_list']) && !empty($meta['lists'])){
foreach($meta['lists'] as $k=>$v){
 $lists[]=array('id'=>$v);  
} }
$post['lists']=$lists;
 if(!empty($meta['status'])){  $post['status']=$meta['status'];  } 
 if(!empty($meta['source'])){  $post['source']=$meta['source'];  } 
 if(!empty($meta['source_detail'])){  $post['source_details']=$meta['source_detail'];  } 

} } 

 if(!empty($meta['__vx_entry_note']) && empty($id)){
 $disable_note=$this->post('disable_entry_note',$meta);
   if(!($entry_exists && !empty($disable_note))){
       $entry_note=$meta['__vx_entry_note'];
       if(!empty($entry_note['body'])){
$post['notes'][]=array('note'=>$entry_note['body']);           
  $extra['Note Body']=$entry_note['body'];
       }
   }  
 }
 
$link=""; $error=""; $arr=array();
if( !empty($object_url) ){
$arr= $this->post_crm($object_url, $method,$post);
}
//var_dump($object_url,$arr,$event,$post); die();
if(empty($id) && !empty($arr['id'])){
$id=$arr['id'];        
}else if(!empty($arr['error_message'])){
$status=''; $error=$arr['error_message'];
}

  if($debug){
  ?>
  <h3>Account Information</h3>
  <p><?php //print_r($this->info) ?></p>
  <h3>Data Sent</h3>
  <p><?php print_r($post) ?></p>
  <h3>Fields</h3>
  <p><?php echo json_encode($fields) ?></p>
  <h3>Response</h3>
  <p><?php print_r($response) ?></p>
  <h3>Object</h3>
  <p><?php print_r($module."--------".$action) ?></p>
  <?php
 echo  $contents=trim(ob_get_clean());
  if($contents!=""){
  update_option($this->id."_debug",$contents);   
  }
  }
       //add entry note


return array("error"=>$error,"id"=>$id,"link"=>$link,"action"=>$action,"status"=>$status,"data"=>$fields,"response"=>$arr,"extra"=>$extra);
}
public function create_fields_section($fields){ 
$arr=array(); 
if(!isset($fields['object'])){
        $objects=array(''=>'Select Object');
        $objs=$this->get_crm_objects();
        if(is_array($objs) && count($objs)>0){
         $objects=array_merge($objects,$objs);   
        }
 $arr['gen_sel']['object']=array('label'=>'Select Object','options'=>$objects,'is_ajax'=>true,'req'=>true);   
}else if(isset($fields['fields']) && !empty($fields['object'])){
    // filter fields
    $crm_fields=$this->get_crm_fields($fields['object']); 
    if(!is_array($crm_fields)){
        $crm_fields=array();
    } 
    $add_fields=array();
    if(is_array($fields['fields']) && count($fields['fields'])>0){
        foreach($fields['fields'] as $k=>$v){
           $found=false; 
                foreach($crm_fields as $crm_key=>$val){
                    if(strpos($crm_key,$k)!== false){
                        $found=true; break;
                }
            }
         //   echo $found.'---------'.$k.'============'.$crm_key.'<hr>';
         if(!$found){
       $add_fields[$k]=$v;      
         }   
        }
    }
 $arr['fields']=$add_fields;   
}

return $arr;  
}  
public function field_types($data){
    return array('text'=>'Text','email'=>'Email',"number"=>'Number', "phone"=>'Phone',"date"=>'Date', "url"=>'Url', "imageurl"=>'Image URL', "birthday"=>'BirthDay');
}
public function create_field($field){
  //  return 'ok';
 
$name=isset($field['name']) ? $field['name'] : '';
$label=isset($field['label']) ? $field['label'] : '';
$type=isset($field['type']) ? $field['type'] : '';
$object=isset($field['object']) ? $field['object'] : '';

$error='Unknow error';
if(!empty($label) && !empty($type) && !empty($object)){
$body=array('name'=>$label,'type'=>$type);    
$url='lists/'.$object.'/merge-fields';    
$arr=$this->post_crm($url,'post',$body);
    $error='ok';
if(!empty($arr['error']) ){

 $error=$arr['error'];       
}
}
return $error;    
}

public function post_crm($path,$method,$body=''){
      $q=array('api_key'=>$this->config['key'],'access_token'=>$this->api_key); 
      if(is_array($body)&& count($body)>0)
   { 
       if($method == 'get'){
        $q=array_merge($q,$body);   
       }else{
       $body=json_encode($body);
       }
   }
   $url=trailingslashit($this->url).$path.'?'.http_build_query($q);   
     $head=array(); 
  $head['Content-Type']='application/json'; 

     $args = array(
  'body' => $body,
  'headers'=> $head,
  'method' => strtoupper($method), // GET, POST, PUT, DELETE, etc.
  'sslverify' => false,
  'timeout' => 30,
  );
  
  $response = wp_remote_request($url, $args);

  if(is_wp_error($response)) { 
  $this->errorMsg = $response->get_error_message();
  return false;
  }
$body=json_decode($response['body'],true);
return $body;
}
public function get_entry($module,$id){


$arr=$this->post_crm('lists/'.$module.'/members/'.$id,'get');
if(!empty($arr['merge_fields']) && is_array($arr['merge_fields'])){
    foreach($arr['merge_fields'] as $k=>$v){
     if(is_array($v)){
    foreach($v as $key=>$val){     
     $arr[$k.'-'.$key]=$val;    
    } }else{
         $arr[$k]=$v;   
     }   
    }
}

      return $arr;     
}
}
}
?>