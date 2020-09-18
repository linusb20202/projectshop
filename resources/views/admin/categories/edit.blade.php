@extends('layouts.admin')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {
        $.validator.addMethod("alpha", function(value, element) {
            return this.optional(element) || /^[a-z&,<br> ]+$/i.test(value);
        }, "Letters only please");
        $("#adminForm").validate();
        
         CKEDITOR.replace( 'full_description', {
            toolbar :
                [
                    ['ajaxsave'],
                    
                    
                    ['Cut','Copy','Paste','PasteText'],
                    ['Undo','Redo','-','RemoveFormat'],
                    ['TextColor','BGColor','TextSize','TextSize'],
                    ['Maximize',  'Table','Link', 'Unlink'],
                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight'],
                    ['Format']
                    
            ],
            // filebrowserUploadUrl : '<?php echo HTTP_PATH;?>/admin/pages/pageimages',
            language: '',
            height: 300,
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;div'
            
            //uiColor: '#884EA1'
        });
    });
 </script>
 {{ HTML::script('public/js/ckeditor/ckeditor.js')}}
 
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Category</h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('admin/admins/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{URL::to('admin/categories')}}"><i class="fa fa-sitemap"></i> <span>Manage Categories</span></a></li>
            <li class="active"> Edit Category</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">&nbsp;</h3>
            </div>
            <div class="ersu_message">@include('elements.admin.errorSuccessMessage')</div>
            
            {{Form::model($recordInfo, ['method' => 'post', 'id' => 'adminForm', 'enctype' => "multipart/form-data"]) }}            
            <div class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name <span class="require">*</span></label>
                        <div class="col-sm-10">
                            {{Form::text('name', null, ['class'=>'form-control required', 'placeholder'=>'Name', 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Full Description <span class="require"></span></label>
                        <div class="col-sm-10">
                            <!--{{Form::textarea('full_description', null, ['class'=>'form-control alpha', 'placeholder'=>'Full description for Category', 'autocomplete' => 'off', 'max-length' => '255', 'rows'=> '2'])}}-->
                            {{Form::textarea('full_description', null, ['minlength' => 120, 'maxlength' => 1200, 'class'=>'form-control required', 'placeholder'=>"Full description for Category"])}}
                            <!--<span class="help-text">Full description for Category</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description <span class="require"></span></label>
                        <div class="col-sm-10">
                            {{Form::text('description', null, ['class'=>'form-control', 'placeholder'=>'Short description', 'autocomplete' => 'off'])}}
                            <span class="help-text">Short description for home page</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image <span class="require"></span></label>
                        <div class="col-sm-10">
                            {{Form::file('image', ['class'=>'form-control', 'accept'=>IMAGE_EXT])}}
                            <span class="help-text"> Supported File Types: jpg, jpeg, png (Max. {{ MAX_IMAGE_UPLOAD_SIZE_DISPLAY }})  (must be 64 x 64 pixels)</span>
                             @if($recordInfo->image != '')
                                <div class="showeditimage">{{HTML::image(CATEGORY_FULL_DISPLAY_PATH.$recordInfo->image, SITE_TITLE,['style'=>"max-width: 200px"])}}</div>
                             @endif
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Meta title <span class="require"></span></label>
                        <div class="col-sm-10">
                            {{Form::text('meta_title', null, ['class'=>'form-control ', 'placeholder'=>'Meta title', 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Meta description <span class="require"></span></label>
                        <div class="col-sm-10">
                            {{Form::text('meta_description', null, ['class'=>'form-control ', 'placeholder'=>'Meta description', 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Meta keyword <span class="require"></span></label>
                        <div class="col-sm-10">
                            {{Form::text('meta_keyword', null, ['class'=>'form-control ', 'placeholder'=>'Meta keyword', 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="box-footer">
                        <label class="col-sm-2 control-label" for="inputPassword3">&nbsp;</label>
                        {{Form::submit('Submit', ['class' => 'btn btn-info'])}}
                        <a href="{{ URL::to( 'admin/categories')}}" title="Cancel" class="btn btn-default canlcel_le">Cancel</a>
                    </div>
                </div>
            </div>
            {{ Form::close()}}
        </div>
    </section>
@endsection