@extends('layouts.admin')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {
        $.validator.addMethod("alpha", function(value, element) {
            return this.optional(element) || /^[a-z& ]+$/i.test(value);
        }, "Letters only please");
        $("#adminForm").validate();
        
        CKEDITOR.replace( 'sub_description', {
            toolbar :
                [
                    ['ajaxsave'],
                    
                    ['Cut','Copy','Paste','PasteText'],
                    ['Undo','Redo','-','RemoveFormat'],
                    ['TextColor','BGColor','TextSize'],
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
        <h1>Edit {!! $catInfo->name !!} Sub Category</h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('admin/admins/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{URL::to('admin/categories/subcategory/'.$catInfo->slug)}}"><i class="fa fa-sitemap"></i> <span>Sub Categories</span></a></li>
            <li class="active"> Edit Sub Category</li>
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
                            {{Form::text('name', null, ['class'=>'form-control required alpha', 'placeholder'=>'Name', 'autocomplete' => 'off'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Sub-Category Description <span class="require"></span></label>
                        <div class="col-sm-10">
                            <!--{{Form::textarea('sub_description', null, ['class'=>'form-control ', 'placeholder'=>'Full Sub-Category Description', 'autocomplete' => 'off', 'rows'=> '2'])}}-->
                            {{Form::textarea('sub_description', null, ['minlength' => 120, 'maxlength' => 1200, 'class'=>'form-control required', 'placeholder'=>"Full Sub-Category Description"])}}
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
                        <a href="{{ URL::to( 'admin/categories/subcategory/'.$catInfo->slug)}}" title="Cancel" class="btn btn-default canlcel_le">Cancel</a>
                    </div>
                </div>
            </div>
            {{ Form::close()}}
        </div>
    </section>
@endsection