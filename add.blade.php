@extends('layout.master')
@section('title','Circular Add')
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
{!! Form::open(array('route' => 'circular_store', 'class' => 'form','files'=> true,'name'=>'createForm','id'=>'createForm')) !!}    
<div class="row page-content-min-height"  id="step1">
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
                            <select class="form-control input-sm DepartmentCode selectpicker" data-show-subtext="true" data-live-search="true" name="DepartmentCode" id="DepartmentCode">
                                <option value="">Select Department</option>
                                <?php foreach ($getDepartments as $departments) { ?>
                                    <option value="<?php echo $departments->Code; ?>"><?php echo $departments->Name; ?> ( <?php echo $departments->Code; ?> ) </option>
                                <?php } ?>                                   
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Subject Type<span class="red">*</span></label>
                            <select class="form-control input-sm CircularTypeCode selectpicker" data-show-subtext="true" data-live-search="true" name="CircularTypeCode" id="CircularTypeCode">
                                <option value="">Select Subject Type</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control input-sm selectpicker" data-show-subtext="true" data-live-search="true" name="CategoryCode" id="CategoryCode">
                                <option value="">Select Category</option>
                                <?php foreach ($getCategories as $categories) { ?>
                                    <option value="<?php echo $categories->Code; ?>"><?php echo $categories->Name; ?></option>
                                <?php } ?>   
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Segment</label>
                            <select class="form-control input-sm selectpicker" data-show-subtext="true" data-live-search="true" name="SegmentCode" id="SegmentCode">
                                <option value="">Select Segment</option>
                                <?php foreach ($getSegment as $segment) { ?>
                                    <option value="<?php echo $segment->Code; ?>"><?php echo $segment->Name; ?></option>
                                <?php } ?>   
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6-col-xs-12 clearfix">
                        <div class="form-group">
                            <label>Language</label>
                            <select class="form-control input-sm selectpicker" data-show-subtext="true" data-live-search="true" name="LanguageCode" id="LanguageCode">
                                <option value="">Select Language</option>
                                <?php foreach ($getLanguage as $language) { ?>
                                    <option value="<?php echo $language->Name; ?>"><?php echo $language->Name; ?></option>
                                <?php } ?>  
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6-col-xs-12">
                        <div class="form-group">
                            <label>Office</label>
                           <select class="form-control input-sm selectpicker" data-show-subtext="true" data-live-search="true" name="Office" id="Office">
                                <option value="">Select Office</option>
                                <?php foreach ($getOffice as $office) { ?>
                                    <option value="<?php echo $office->Name; ?>"><?php echo $office->Name; ?></option>
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
                            <div class="input-group" data-date-format="dd-mm-yyyy" >
                                <input type="text" class="form-control"  id="DateOfCircular" name="DateOfCircular"readonly="true" value="<?php echo date('d-m-Y');?>">
                                                    <span class="input-group-btn">
                                                        <button class="btn default dateheight"  type="button"><i class="fa fa-calendar"></i></button>
                                                    </span>
                                                </div>

                        </div>
                    </div>
                    

                    <div class="col-md-3 col-sm-6-col-xs-12 ">
                        <div class="form-group">
                            <label>Scheme</label>
                           <select class="form-control input-sm selectpicker" data-show-subtext="true" data-live-search="true" name="Scheme" id="Scheme">
                                <option value="">Select Scheme</option>
                                <?php foreach ($getScheme as $scheme) { ?>
                                    <option value="<?php echo $scheme->Name; ?>"><?php echo $scheme->Name; ?></option>
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
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-2">Status</label>
                                <div class="col-md-10">
                                    <div class="icheck-inline">
                                        <label class="">
                                            <div class="icheckbox_square-brown" style="position: relative;">
                                                <input type="checkbox" value="1" name="ExtraStatus" id="ExtraStatus" class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
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
                                                <input type="checkbox" value="1" name="DownloadStatus" id="DownloadStatus" class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
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
                                                <input type="checkbox" value="1" name="PrintStauts" id="PrintStauts" class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
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
                                                <input type="checkbox" value="1" name="ResponsiveStatus" id="ResponsiveStatus" class="icheck" data-checkbox="icheckbox_square-brown" style="position: absolute; opacity: 0;">
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

</form>
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
           
       		$(wrapper).append('<tr><td><div class=""><input type="text" required="required" name="annexure_subject['+y+']" class="form-control" placeholder="Subject"></div></td><td><div class="file-upload"><input class="annexure" type="file"  required="required" name="annexureFile['+y+']" id="annexureFile['+y+']" style="padding-left: 5px;"/></div></td><td><div class="file-upload "><a href="#" class="add-row-btn btn remove_field"  id="add-annexure" style="background: #1f897f;min-width: 40px;"><span class="md-click-circle md-click-animate" style="height: 42px; width: 42px; top: -4px; left: -8.3125px;"></span><i class="fa fa-minus"></i></a></div></td></tr>');	
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
                   // lettersonly: true,
                    required: true
                },
                circularFile: {
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
                circularFile: "Circular is required",
                DateOfCircular: "Circular Date is required",
                DepartmentCode: "Department is required",
                CircularTypeCode: "Subject Type is required",
            }
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
        
        $("#Signature").change(function () {
            var fileExtension = ['png','jpg','jpeg','Png','PNG','JPG','JPEG','JFIF'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
               $("#Signature").val("");
                return false;
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
    
    $('#DepartmentCode').change(function(){
        var department_code = $(this).val();	 
        $.ajax({
            type: "POST",
            url: "{{route('get_subject_type_list')}}",
            data: {'department_code':department_code,'_token':'{{csrf_token()}}'}, 
            success: function (response) {  
                var country_strng='<option value="">Select Subject Type</option>';	
                jQuery.each(response, function(i, item) {
                    country_strng+='<option value="'+response[i].Code+'">'+response[i].Name+'</option>';
                }); 
                jQuery('#CircularTypeCode').html(country_strng);
                jQuery('#CircularTypeCode').selectpicker('refresh');
            }
        });
    });
</script>

@endsection
@section('script')
    <script src="{{ URL::asset('resources/assets/js/bootstrap-tagsinput.js')}}"></script>
@endsection