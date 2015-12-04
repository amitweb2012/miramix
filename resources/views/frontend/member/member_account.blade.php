@extends('frontend/layout/frontend_template')
@section('content')

<div class="inner_page_container nomar_bottom">
<div id="nav-icon2">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
  </div>
  <div class="mob_topmenu_back"></div>

<div class="top_menu_port">
    	<div class="acct_box blue_acct front">
                	<div class="acct_box_inn">
                    	<div class="acct_box_inn_inn">
                        <a href="<?php echo url();?>/member-account"><img src="<?php echo url();?>/public/frontend/images/account/pers_info.png" alt=""></a>
                        <a href="<?php echo url();?>/member-account" class="link_wholediv">Personal Information</a>
                        </div>                    	
                    </div>
                </div> 
        <div class="acct_box green_acct no_marg">
                	<div class="acct_box_inn">
                    	<div class="acct_box_inn_inn">
                        <a href="<?php echo url();?>/member-changepass"><img src="<?php echo url();?>/public/frontend/images/account/changepassword.png" alt=""></a>
                        <a href="<?php echo url();?>/member-changepass" class="link_wholediv">Change Password</a>
                        </div>                    	
                    </div>
                </div>                
        <div class="acct_box violet_acct">
                	<div class="acct_box_inn">
                    	<div class="acct_box_inn_inn">
                        <a href="<?php echo url();?>/member-shipping-address"><img src="<?php echo url();?>/public/frontend/images/account/address.png" alt=""></a>
                        <a href="<?php echo url();?>/member-shipping-address" class="link_wholediv">My Address</a>
                        </div>                    	
                    </div>
                </div>                
        <div class="acct_box orange_acct wish_acct no_marg">
                	<div class="acct_box_inn">
                    	<div class="acct_box_inn_inn">
                        <img src="<?php echo url();?>/public/frontend/images/account/wishlist_icn.png" alt="">
                        <a href="" class="link_wholediv">My Wishlist<span>Coming Soon</span></a>
                        </div>                    	
                    </div>
                </div>
        <div class="acct_box new_green_acct no_marg">
                	<div class="acct_box_inn">
                    	<div class="acct_box_inn_inn">
                        <a href="<?php echo url();?>/order-history"><img src="<?php echo url();?>/public/frontend/images/account/order_hist.png" alt=""></a>
                        <a href="<?php echo url();?>/order-history" class="link_wholediv">Order History</a>
                      </div>                    	
                    </div>
                </div>
    </div>

    	   <!--my_acct_sec-->
           <div class="my_acct_sec">           
               <div class="container">
               
               <div class="col-sm-10 col-sm-offset-1">
               
               <div class="row">
		 {!! Form::open(['url' => 'member-account','method'=>'POST', 'files'=>true,  'id'=>'member_form']) !!}
		<div class="form_dashboardacct">
               		<h3>My Account Information</h3>
                    <div class="bottom_dash clearfix">
                    	<div class="row">
			 @if(Session::has('error'))
			    <div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{!! Session::get('error') !!}</strong>
			    </div>
			  @endif
			  @if(Session::has('success'))
			    <div class="alert alert-success">
			    <button type="button" class="close" data-dismiss="alert">×</button>
			    <strong>{!! Session::get('success') !!}</strong>
			    </div>
			  @endif
			 </div>
                        <div class="row">
                        <h5 class="col-sm-offset-3">Your Personal Details</h5>
                        <div class="col-sm-3 left_acct_img">
                        
				<div class="upload_button_panel img_modify">
				<p class="upload_image">
				<input class="upload_button filesbrand" type="file" name="image" id="image" accept="image/*" style="cursor:pointer;"><span>Upload Profile Avatar</span></p>
				<div class="selectedFiles">
				 <?php if(!empty($member['pro_image'])){?>
				   <img src="<?php echo url();?>/uploads/member/<?php echo $member['pro_image']?>" class="img-responsive" alt="" width="150">
				     <input type="hidden" name="hidden_image" id="hidden_image" value="<?php echo $member['pro_image']?>">
				  <?php } else {?>
				    <img src="<?php echo url();?>/public/frontend/images/newdashimages/acct_imgd.png" class="img-responsive" alt="">
				   <!-- <a href="javascript:void(0);" class="text-center">Upload Image</a>-->
				  <?php } ?>                                
				</div>
			      </div> 
			
                        </div>
                        <div class="col-sm-9">
                        
			<div class="form-group">
                            {!! Form::text('username',$member['username'],['class'=>'form-control','id'=>'username','placeholder'=>'Username (Warning: Cannot be changed once created)', 'aria-describedby'=>'basic-addon2'])!!}
                          </div>
                          <div class="form-group">
                            {!! Form::text('fname',$member['fname'],['class'=>'form-control','id'=>'fname','placeholder'=>'First Name', 'aria-describedby'=>'basic-addon2'])!!}
                          </div>
			    
			    <div class="form-group">
                             {!! Form::text('lname',$member['lname'],['class'=>'form-control','id'=>'lname','placeholder'=>'Last Name', 'aria-describedby'=>'basic-addon2'])!!}
                          </div>
			    
			    
                          <div class="form-group">
                             {!! Form::text('phone_no',$member['phone_no'],['class'=>'form-control','placeholder'=>'Phone Number', 'aria-describedby'=>'basic-addon2'])!!}
                          </div>
                          
                          
                       
                        </div>
                        </div>
                        
                    </div>
                    
                    <div class="form_bottom_panel">
                    <!--<a href="<?php echo url();?>/member-dashboard" class="green_btn pull-left"><i class="fa fa-angle-left"></i> Back to Dashboard</a>-->
                    <button type="submit" form="member_form" class="btn btn-default green_sub pull-right">Save</button>
                    </div>
                    
               </div>
               
               
	       {!! Form::close() !!}
	       </div>
               
               </div>
               
               </div>           
           </div>
           <!--my_acct_sec ends-->
 </div>
<script>

  
  // When the browser is ready...
  $(function() {

   

    // Setup form validation  //
    $("#member_form").validate({
    
        // Specify the validation rules
        rules: {
	
      fname: "required",
      lname: "required",
     
			phone_no :
                {
                    required : true,
                    phoneUS: true
                },
      
     },
		
        submitHandler: function(form) {
            form.submit();
        }
    });


  });
  
  
    
</script>

@stop