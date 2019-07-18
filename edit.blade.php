@extends('layout.master')
@section('title','Circular Edit')
@section('content')
@section('css')
<link href="{{ URL::asset('resources/assets/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css">
@endsection

@include('layout.messages')
<!-- BEGIN Setp Wrapper -->
<div class="setp-wrapper">
    <div class="row bs-wizard" style="border-bottom:0;">

        <div class="col-xs-2 bs-wizard-step active" id="progress1">
            <div class="text-center bs-wizard-stepnum">Step 1</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="bs-wizard-dot ChangeStep" rel="1"></a>			                  
        </div>

        <div class="col-xs-2 bs-wizard-step disabled" id="progress2"><!-- disabled -->
            <div class="text-center bs-wizard-stepnum">Step 2</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="bs-wizard-dot ChangeStep" rel="2"></a>			                  
        </div>

        <div class="col-xs-2 bs-wizard-step disabled" id="progress3"><!-- disabled -->
            <div class="text-center bs-wizard-stepnum">Step 3</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="bs-wizard-dot ChangeStep" rel="3"></a>	
        </div>

        <div class="col-xs-2 bs-wizard-step disabled" id="progress4"><!-- disabled -->
            <div class="text-center bs-wizard-stepnum">Step 4</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="bs-wizard-dot ChangeStep" rel="4"></a>	
        </div>

        <div class="col-xs-2 bs-wizard-step disabled" id="progress5"><!-- disabled -->
            <div class="text-center bs-wizard-stepnum">Step 5</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="bs-wizard-dot ChangeStep" rel="5"></a>	
        </div>

        <!-- active -->
        <!-- <div class="col-xs-2 bs-wizard-step disabled">
           <div class="text-center bs-wizard-stepnum">Step 6</div>
           <div class="progress"><div class="progress-bar"></div></div>
           <a href="#" class="bs-wizard-dot"></a>			                  
         </div>-->
    </div>
</div>
<!-- End Setp Wrapper -->

<!-- BEGIN PAGE CONTENT-->
<!--<div class="search-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title">
                Circular Origin
            </h3>	           
        </div>					
    </div>
</div>-->

{!! Form::model($circular,array('route' => ['circular_update',$enctID], 'class' => 'form','files'=> true,'name'=>'createForm','id'=>'createForm')) !!}
<div class="row"  id="step1">
    <div class="col-md-12">
        <div class="portlet box custome-whight">
            <div class="portlet-title">
                <div class="caption">Circular Origin</div>
            </div>
            <div class="portlet-body">                                
                <div class="row">

                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Department<span class="red">*</span></label>
                            <select disabled="true" class="form-control input-sm DepartmentCode selectpicker"  data-show-subtext="true" data-live-search="true" name="DepartmentCode" id="DepartmentCode">
                                <option value="">Select Department</option>
                                <?php foreach ($getDepartments as $departments) { ?>
                                    <option <?php
                                    if ($departments->Code == $circular->DepartmentCode) {
                                        echo "selected='selected'";
                                    }
                                    ?> value="<?php echo $departments->Code; ?>"><?php echo $departments->Name; ?></option>    
                                <?php } ?>                                   
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                           <label class="control-label">Subject Type<span class="red">*</span></label>
                            <select class="form-control input-sm CircularTypeCode selectpicker"  data-show-subtext="true" data-live-search="true" name="CircularTypeCode" id="CircularTypeCode">
                                <option value="">Select Subject Type</option>
                                <?php foreach ($getCircularType as $circularType) { ?>
                                    <option <?php
                                        if ($circularType->Code == $circular->CircularTypeCode) {
                                            echo "selected='selected'";
                                        }
                                        ?> value="<?php echo $circularType->Code; ?>"><?php echo $circularType->Name; ?> ( <?php echo $circularType->Code; ?> )</option>
                                <?php } ?>   
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control input-sm selectpicker"  data-show-subtext="true" data-live-search="true" name="CategoryCode" id="CategoryCode">
                                <option value="">Select Category</option>
                                <?php foreach ($getCategories as $categories) { ?>
                                    <option <?php
                                    if ($categories->Code == $circular->CategoryCode) {
                                        echo "selected='selected'";
                                    }
                                    ?> value="<?php echo $categories->Code; ?>"><?php echo $categories->Name; ?></option>
                                <?php } ?>   
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Segment</label>
                            <select class="form-control input-sm selectpicker"  data-show-subtext="true" data-live-search="true" name="SegmentCode" id="SegmentCode">
                                <option value="">Select Segment</option>
                                <?php foreach ($getSegment as $segment) { ?>
                                                                    <option <?php
                                    if ($segment->Code == $circular->SegmentCode) {
                                        echo "selected='selected'";
                                    }
                                    ?> value="<?php echo $segment->Code; ?>"><?php echo $segment->Name; ?></option>
                                <?php } ?>   
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6-col-xs-12 clearfix">
                        <div class="form-group">
                            <label>Language</label>
                            <select class="form-control input-sm selectpicker"  data-show-subtext="true" data-live-search="true" name="LanguageCode" id="LanguageCode">
                                <option value="">Select Language</option>
                                <?php foreach ($getLanguage as $language) { ?>
                                                                    <option <?php
                                    if ($language->Name == $circular->LanguageCode) {
                                        echo "selected='selected'";
                                    }
                                    ?> value="<?php echo $language->Name; ?>"><?php echo $language->Name; ?></option>
                                <?php } ?>  
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Office</label>
                            <select class="form-control input-sm selectpicker"  data-show-subtext="true" data-live-search="true"     name="Office" id="Office">
                                <option value="">Select Office</option>
                                <?php foreach ($getOffice as $office) { ?>
                                                                    <option <?php
                                    if ($office->Name == $circular->Office) {
                                        echo "selected='selected'";
                                    }
                                    ?> value="<?php echo $office->Name; ?>"><?php echo $office->Name; ?></option>
                                <?php } ?>  
                            </select>
                        </div>
                    </div>
                    <!--div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Subject Type</label>
                            {!! Form::text('SubjectType', null,array('class'=>'form-control','id'=>'SubjectType','maxlength'=>255)) !!}
                        </div>
                    </div-->

                    <div class="col-md-3 col-sm-6-col-xs-12 ">
                        <div class="form-group">
                            <label class="control-label">Date of Circular<span class="red">*</span></label>								        		
                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">                                    
                                {!! Form::text('DateOfCircular', null,array('class'=>'form-control','id'=>'DateOfCircular','disabled'=>'true','maxlength'=>20)) !!}
                                <span class="input-group-btn">
                                    <button class="btn default" type="button" disabled="true"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6-col-xs-12 ">
                        <div class="form-group">
                            <label>Scheme</label>
                                 <select class="form-control input-sm" name="Scheme" id="Scheme">
                                <option value="">Select Scheme</option>
                                <?php foreach ($getScheme as $scheme) { ?>
                                                                    <option <?php
                                    if ($scheme->Name == $circular->Scheme) {
                                        echo "selected='selected'";
                                    }
                                    ?> value="<?php echo $scheme->Name; ?>"><?php echo $scheme->Name; ?></option>
                                <?php } ?>  
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="2">Next</a>
                        <!--<button type="submit" class="btn blue">Save</button>
                        <button type="submit" class="btn default">Reset</button>
                        <button type="submit" class="btn red">Exit</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                 


<div class="row" id="step2">
    <div class="col-md-12">
        <div class="portlet box custome-whight">
            <div class="portlet-title">
                <div class="caption">Circular Details</div>
            </div>
            <div class="portlet-body form-horizontal">                   
                <div class="form-body">	
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Subject (200)<span class="red">*</span></label>
                                <div class="col-md-10">                                        
                                    {!! Form::text('Subject', null,array('class'=>'form-control','id'=>'Subject','maxlength'=>200)) !!}
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Rationale (500)</label>
                                <div class="col-md-10">                                        
                                    {!! Form::textarea('Rationale', null,array('class'=>'form-control','id'=>'Rationale','rows'=>'2','cols'=>'50','maxlength'=>500)) !!}
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Synopsis (500)</label>
                                <div class="col-md-10">                                        
                                    {!! Form::textarea('Synopsis', null,array('class'=>'form-control','id'=>'Synopsis','rows'=>'2','cols'=>'50','maxlength'=>500)) !!}
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Action Points (500)</label>
                                <div class="col-md-10">                                        
                                    {!! Form::textarea('ActionPoint', null,array('class'=>'form-control','id'=>'ActionPoint','rows'=>'2','cols'=>'50','maxlength'=>500)) !!}
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Scrolling Message (500)</label>
                                <div class="col-md-10">                                        
                                    {!! Form::textarea('ScrollingMsg', null,array('class'=>'form-control','id'=>'ScrollingMsg','rows'=>'2','cols'=>'50','maxlength'=>500)) !!}
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-2">                                
                            <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="1">Previous</a>                                
                            <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="3">Next</a>
                            <!--  <button type="submit" class="btn blue">Save</button>
                              <button type="submit" class="btn default">Reset</button>
                              <button type="submit" class="btn red">Exit</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	                   


<div id="step3">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box custome-whight">
                <div class="portlet-title">
                    <div class="caption">Upload Circular</div>
                </div>
                <div class="portlet-body form-horizontal">                        
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered broun-col table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"><label  class="control-label">Upload<span class="red">*</span></label></th>												
                                </tr>
                            </thead>
                            <tbody>
                                <tr>				                                                   											
                                    <td>
                                        <div class="file-upload">
                                            <input type="file" name="circularFile" id="circularFile"/>
                                            <?php if($getCircularUploadDetails) { ?>
                                                <br />
                                                <a class="uploadedFileList" href="{{route('downloadcircularfile')}}<?php  echo '/'. $getCircularUploadDetails->id; ?>" >{{$getCircularUploadDetails->OriginalName}}</a>
                                            <?php } ?>
                                        </div>	                                                      
                                    </td>
                                </tr>											
                            </tbody>
                        </table>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box custome-whight">
                <div class="portlet-title">
                    <div class="caption">Annexure</div>
                </div>
                <div class="portlet-body form-horizontal">                        
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered broun-col table-hover AnnexureTable">
                           <thead>
                                <tr>
                                    <th scope="col" style="">Subject</th>
                                    <th>File</th>
                                    <th><a  class="add-row-btn btn"  id="add-annexure" style="background: #1f897f;min-width: 40px;"><span class="md-click-circle md-click-animate" style="height: 42px; width: 42px; top: -4px; left: -8.3125px;"></span><i class="fa fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody class="input_fields_wrap">
                               
                            </tbody>
                        </table>
                        <?php if($getCircularAnnexureUploadDetails) { 
                            echo "<div class='filesListDiv'>";
                            foreach($getCircularAnnexureUploadDetails as $filesData){
                            ?>
                        <div class="<?php echo $filesData->id;?>">
                            <br />
                            <a  class="uploadedFileList" href="{{route('downloadfile')}}<?php  echo '/'. $filesData->id; ?>" >{{$filesData->OriginalName}}</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="removeAnnexure fa fa-trash-o" alt="<?php echo $filesData->id;?>"></a>
                            </div>
  <?php }
                            echo "</div>";
                            } ?>
                    </div>

                    <div class="four-btns">                                        
                        <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="2">Previous</a>
                        <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="4">Next</a>
                        <!--  <button type="submit" class="btn blue">Save</button>
                          <button type="submit" class="btn default">Reset</button>
                          <button type="submit" class="btn red">Exit</button>-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="row" id="step4">
    <div class="col-md-12">
        <div class="portlet box custome-whight">
            <div class="portlet-title">
                <div class="caption">Signature</div>
            </div>
            <div class="portlet-body form-horizontal">                
                <div class="form-body">	
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Signature</label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <input class="form-control" type="file" id="Signature" name="Signature" >
                                </div>
                                
                                <?php if($circular->Signature!='') {                                 
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($circular->Signature).'"/ width="100" height="100">';
                                 } ?>
                                
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Status</label>
                                <div class="col-md-10">
                                    <div class="icheck-inline">
                                        <label class="">
                                            <div class="icheckbox_square-brown" style="position: relative;">
                                                <input type="checkbox" name="ExtraStatus" id="ExtraStatus" value="yes" <?php echo ($circular['ExtraStatus'] == 1 ? 'checked' : ''); ?> class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"></ins></div>  
                                        </label>
                                    </div>
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Download Status</label>
                                <div class="col-md-10">
                                    <div class="icheck-inline">
                                        <label class="">
                                            <div class="icheckbox_square-brown" style="position: relative;">
                                                <input type="checkbox" name="DownloadStatus" id="DownloadStatus" value="yes" <?php echo ($circular['DownloadStatus'] == 1 ? 'checked' : ''); ?> class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"></ins></div>  
                                        </label>
                                    </div>
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Print Stauts</label>
                                <div class="col-md-10">
                                    <div class="icheck-inline">
                                        <label class="">
                                            <div class="icheckbox_square-brown" style="position: relative;">
                                                <input type="checkbox" name="PrintStauts" id="PrintStauts" value="yes" <?php echo ($circular['PrintStauts'] == 1 ? 'checked' : ''); ?> class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"></ins></div>  
                                        </label>    
                                    </div>
                                </div>				                        	
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Responsive Status</label>
                                <div class="col-md-10">
                                    <div class="icheck-inline">
                                        <label class="">
                                            <div class="icheckbox_square-brown" style="position: relative;">
                                                <input type="checkbox" name="ResponsiveStatus" id="ResponsiveStatus" value="yes" <?php echo ($circular['ResponsiveStatus'] == 1 ? 'checked' : ''); ?> class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"></ins></div>  
                                        </label>      
                                    </div>
                                </div>				                        	
                            </div>
                        </div>                     										
                    </div>
                </div>                
                <div class="four-btns">                    
                    <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="3">Previous</a>                    
                    <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="5">Next</a>
                    <!--   <button type="submit" class="btn blue">Save</button>
                       <button type="submit" class="btn default">Reset</button>
                       <button type="submit" class="btn red">Exit</button>-->
                </div>        
            </div>
        </div>
    </div>
</div>

<div class="row" id="step5">
    <div class="col-md-12">
        <div class="portlet box custome-whight">
            <div class="portlet-title">
                <div class="caption">Keywords</div>
            </div>
            <div class="portlet-body">                        
                <div class="table-scrollable">
                    <table class="table table-striped table-bordered broun-col table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="">Keywords</th>			
                            </tr>
                        </thead>
                        <tbody>
                            <tr>				
                                <td>
                                    {!! Form::text('Keywords', null,array('class'=>'form-control','id'=>'Keywords','tabindex'=>'8' )) !!}
                                    <!-- 'data-role'=>'tagsinput', -->
                                </td>
                            </tr>									
                        </tbody>
                    </table>
                </div>
                <div class="four-btns">                    
                    <a href="javascript:void(0);" type="submit" class="btn green ChangeStep" rel="4">Previous</a>
                    <button type="submit" class="btn blue">Submit</button>                    
                </div>
            </div>
        </div>
    </div>
</div>    

{!! Form::close() !!}  
@endsection

@section('script')
<script>

    $(document).ready(function () {
        
         $.validator.setDefaults({
        /*OBSERVATION: note how the ignore option is placed in here*/
        ignore: ':not(select:hidden, input:visible, textarea:visible)',

        /*...other options omitted to focus on the OP...*/

        errorPlacement: function (error, element) {
            if (element.hasClass('DepartmentCode')) {
                error.insertAfter('.bootstrap-select.DepartmentCode');
            }else if (element.hasClass('CircularTypeCode')){
                error.insertAfter('.bootstrap-select.CircularTypeCode');
            }else{
                error.insertAfter(element);
            }
            /*Add other (if...else...) conditions depending on your
            * validation styling requirements*/
        }
    });
        
        
         var add_button = $("#add-annexure"); //Add button ID
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var y = 0;
        $(add_button).click(function(e){ //on add input button click
           
       		$(wrapper).append('<tr><td><div class=""><input type="text" required="required" name="annexure_subject['+y+']" class="form-control" placeholder="Subject"></div></td><td><div class="file-upload"><input  type="file" class="annexure"  required="required" name="annexureFile['+y+']" id="annexureFile['+y+']" style="padding-left: 5px;"/></div></td><td><div class="file-upload"><a href="#" class="add-row-btn btn remove_field"  id="add-annexure" style="background: #1f897f;min-width: 40px;"><span class="md-click-circle md-click-animate" style="height: 42px; width: 42px; top: -4px; left: -8.3125px;"></span><i class="fa fa-minus"></i></a></div></td></tr>');	
        y++;
        });
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

            e.preventDefault(); $(this).parent('div').parent('td').parent('tr').remove(); x--;
        })
        
        jQuery.validator.addMethod("lettersonly", function(value, element) 
            {
                return this.optional(element) || /^[a-z," ",0-9,_]+$/i.test(value);
            }, "Enter only alphabetical characters,numerics,underscore and spaces."); 
        
        $('#createForm').validate({
            rules: {
                Subject: {
                    //lettersonly: true,
                    required: true
                },
                DateOfCircular: {
                    required: true
                },
                DepartmentCode: {
                    required: true
                },
                CircularTypeCode: {
                    required: true
                }

            },
            messages: {
                Subject:{
                    required: "Subject is required",
                },
                DateOfCircular: "Circular Date is required",
                DepartmentCode: "Department is required",
                CircularTypeCode: "Subject Type is required",
            }
        });


       
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);		
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        $('.date-picker').datepicker({
                format: 'dd-mm-yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
                endDate: today
        });
        
        $("#circularFile").change(function () {
            var fileExtension = ['doc', 'docx','DOC','DOCX'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
               $("#circularFile").val("");
                return false;
             }
        });
        
        $(document).on("change",".annexure",function () {
            var fileExtension = ['pdf','PDF','pps','PPS','pptx','PPTX', 'doc', 'DOC', 'docx','png','jpg','jpeg','Gif','GIF','Bmp','PNG','JPG','TIFF','tiff','BMP','DOCX','EXC','exc','JPEG','xlsx','xlsm','XLSX','XLSM'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
                $(this).val("");
                return false;
             }
        });
   
    

        $('#step2,#step3,#step4,#step5').fadeOut();
    });

    $(document).on('click', '.ChangeStep', function () {

        changeStep($(this).attr('rel'));

    });

    function changeStep(currentStep)
    {
        if ((!$('#createForm').valid())) {
            return false;
        }


        $('#step1,#step2,#step3,#step4,#step5').fadeOut();
        $('#progress1,#progress2,#progress3,#progress4,#progress5').removeClass('active');
        $('#progress1,#progress2,#progress3,#progress4,#progress5').removeClass('complete');
        $('#progress1,#progress2,#progress3,#progress4,#progress5').addClass('disabled');
        var displayStepNumber = currentStep;
        $('#step' + displayStepNumber).fadeIn();

        for (var i = 1; i < currentStep; i++)
        {
            $('#progress' + i).removeClass('disabled');
            $('#progress' + i).addClass('complete');
        }
        $('#progress' + displayStepNumber).removeClass('disabled');
        $('#progress' + displayStepNumber).addClass('active');
    }
     $("#Signature").change(function () {
            var fileExtension = ['png','jpg','jpeg','Tiff','Gif','Bmp','Png','PNG','JPG','TIFF','BMP','DOCX','EXC','JPEG','JFIF'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
               $("#Signature").val("");
                return false;
             }
        });
    $(document).on('click','.removeAnnexure',function(){
     var id = $(this).attr('alt');               
       $.ajax({
        type: "POST",
        url: "{{route('circular_annexure_delete')}}",
        data: {'id' : id, "_token": "{{ csrf_token() }}"},
        dataType: 'json', 
        success: function (response) {
           if(response ) {
               $('.'+id).remove();
               toastr.success('File Successfully Deleted!!', 'Success!!', {timeOut: 4000})
           }
        }
      });
    });
</script>

@endsection
@section('script')
<script src="{{ URL::asset('resources/assets/js/bootstrap-tagsinput.js')}}"></script>
@endsection