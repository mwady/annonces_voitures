<div class="row"> 
  <div class="col-md-12">
    <?php echo $this->session->flashdata('msg');?>
    <div class="box">
      <div class="box-title">
        <h3><i class="fa fa-bars"></i><?php echo lang_key('create_new_package');?></h3>
        <div class="box-tool">
          <a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>

        </div>
      </div>
      <div class="box-content">
          
        <form class="form-horizontal" id="addpackage" action="<?php echo site_url('admin/package/addpackage');?>" method="post">
        <div class="form-group">
          <label class="col-sm-2 col-lg-3 control-label"><?php echo lang_key('package_type');?>:</label>
          <div class="col-sm-4 col-lg-5 controls">
            <?php $options = array('post_package','featured_package');?>
            <select name="type" id="package_type" class="form-control">
                <option value=""><?php echo lang_key('select_package');?></option>
                <?php 
                  foreach($options as $row) 
                  {
                    $sel = (set_value('type')==$row)?'selected="selected"':'';
                  ?>
                <option value="<?php echo $row;?>" <?php echo $sel;?>><?php echo lang_key($row);?></option>
                <?php
                  }
                ?>

            </select>
            <?php echo form_error('type'); ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-lg-3 control-label"><?php echo lang_key('title');?>:</label>
          <div class="col-sm-4 col-lg-5 controls">
            <input type="text" name="title" value="<?php echo(set_value('title')!='')?set_value('title'):'';?>" placeholder="<?php echo lang_key('title');?>" class="form-control input-sm" >
            <?php echo form_error('title'); ?>
          </div>
        </div>      

        <div class="form-group">
          <label class="col-sm-2 col-lg-3 control-label"><?php echo lang_key('price');?> <?php echo get_currency_icon(get_settings('paypal_settings','currency','USD')).'('.get_settings('paypal_settings','currency','USD').')';?>:</label>
          <div class="col-sm-4 col-lg-5 controls">
            <input type="text" name="price" value="<?php echo(set_value('price')!='')?set_value('price'):'';?>" placeholder="<?php echo lang_key('price');?>" class="form-control input-sm" >
            <?php echo form_error('price'); ?>
          </div>
        </div>

        <div class="form-group featured_expiration_time_holder">
          <label class="col-sm-2 col-lg-3 control-label"><?php echo lang_key('expiration_time');?>:</label>
          <div class="col-sm-4 col-lg-5 controls">
            <input type="text" name="expiration_time" value="<?php echo(set_value('expiration_time')!='')?set_value('expiration_time'):'';?>" placeholder="<?php echo lang_key('expiration_time');?>" class="form-control input-sm" >
            <?php echo form_error('expiration_time'); ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-lg-3 control-label"><?php echo lang_key('featured_expiration_time');?>:</label>
          <div class="col-sm-4 col-lg-5 controls">
            <input type="text" name="featured_expiration_time" value="<?php echo(set_value('featured_expiration_time')!='')?set_value('featured_expiration_time'):'';?>" placeholder="<?php echo lang_key('featured_expiration_time');?>" class="form-control input-sm" >
            <?php echo form_error('featured_expiration_time'); ?>
          </div>
        </div>

        <div class="form-group featured_expiration_time_holder">
          <label class="col-sm-2 col-lg-3 control-label"><?php echo lang_key('max_gallery_photos');?>:</label>
          <div class="col-sm-4 col-lg-5 controls">
            <input type="text" name="max_gallery_photos" value="<?php echo(set_value('max_gallery_photos')!='')?set_value('max_gallery_photos'):'';?>" placeholder="<?php echo lang_key('max_gallery_photos');?>" class="form-control input-sm" >
            <?php echo form_error('max_gallery_photos'); ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-lg-3 control-label">&nbsp;</label>
          <div class="col-sm-4 col-lg-5 controls">            
            <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> <?php echo lang_key('create_package');?></button>
          </div>
        </div>


      </form>

    </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#package_type').change(function(){
      var val = $(this).val();
      if(val=='featured_package')
      {
        $('.featured_expiration_time_holder').hide();
      }
      else
      {
        $('.featured_expiration_time_holder').show();
      }  
    }).change();
  });
</script>