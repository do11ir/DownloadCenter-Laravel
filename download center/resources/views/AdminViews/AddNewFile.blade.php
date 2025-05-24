@extends('layouts.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>فرم آپلود فایل</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
       

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
      
       <link href="{{asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />

</head>
@section('content')
 <div id="content" class="main-content">
                <div class="container">
                    <div class="row layout-top-spacing">
                        <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="padding-right: 30px">
                                            <h4>فرم آپلود فایل</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                             <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="title">عنوان فایل</label>
                                    <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="description">توضیحات (اختیاری)</label>
                                    <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                </div>

                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>فایل را بکشید و در اینجا رها کنید<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" name="file_path" class="custom-file-container__custom-file__custom-file-input">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                <div class="custom-file-container__image-preview"></div>

                                <div class="form-group">
                                    <label for="permission">وضعیت اجازه دسترسی</label>
                                     <span type="text"  id="category" class="form-control">دسترسی مجاز و نامحدود برای ادمین برقرار است</span>
                                     <input type="hidden" name="permission" value=" 1 ">
                                </div>

                                <div class="form-group">
                                    <label for="category">دسته‌بندی فایل</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="سایر" {{ old('category', 'سایر') == 'سایر' ? 'selected' : '' }}>سایر</option>
                                        <option value="جزوه" {{ old('category') == 'جزوه' ? 'selected' : '' }}>جزوه</option>
                                        <option value="ویدئو" {{ old('category') == 'ویدئو' ? 'selected' : '' }}>ویدئو</option>
                                        <option value="برنامه" {{ old('category') == 'برنامه' ? 'selected' : '' }}>برنامه</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="study_field_id">رشته تحصیلی</label>
                                    <select name="study_field_id" id="study_field_id" class="form-control">
                                        <option value="">انتخاب رشته</option>
                                        @foreach($studyField as $field)
                                            <option value="{{ $field->id }}" {{ old('study_field_id') == $field->id ? 'selected' : '' }}>{{ $field->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="subject_id">درس</label>
                                    <select name="subject_id" id="subject_id" class="form-control">
                                        <option value="">انتخاب درس</option>
                                        @foreach($subject as $subjects)
                                            <option value="{{ $subjects->id }}" {{ old('subject_id') == $subjects->id ? 'selected' : '' }}>{{ $subjects->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                
                                <button type="submit" class="btn btn-primary">ارسال فایل</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       






 <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
@endsection