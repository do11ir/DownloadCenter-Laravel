@extends('layouts.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>فرم اضافه کردن درس</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
       

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
      
       <link href="{{asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />

</head>
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <form action="{{ route('insertSubject') }}" method="POST">
                @csrf
                
            <div class="row layout-top-spacing">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" id="studyFieldInput" name="StudyField_id" value="هیچکدام" readonly aria-label="Text input with dropdown button">
                    
                    <div class="input-group-append">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            انتخاب رشته
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);" data-value="هیچکدام">هیچکدام</a>
                            @foreach($studyField as $item)
                                <a class="dropdown-item" href="javascript:void(0);" data-value="{{ $item->name }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-lg mb-4">
                    <input type="text" name="name" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                    <div class="input-group-prepend">
                        <button type="submit" class="input-group-text" id="inputGroup-sizing-lg">اضافه کردن</button>
                      </div>
                  </div>         
            </div>
            
            </form>
           
            
        </div>
        </div>
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                   
                    <div class="row layout-top-spacing">
                        
                        
                        <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>همه درس ها</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover mb-4">
                                            <thead>
                                                <tr>
                                                    <th>نام درس</th>
                                                    <th>تاریخ ثبت</th>
                                                    <th>رشته</th>
                                                    <th class="text-center">وضعیت</th>
                                                    <th>ویرایش</th>
                                                    <th>حذف</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                @foreach($subject as $item)
                                                <tr>
                                                   
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        {{ $item->created_at ? \Morilog\Jalali\Jalalian::fromCarbon(\Carbon\Carbon::parse($item->created_at))->format('j F Y') : 'منتشر نشده' }}
                                                    </td>
                                                   
                                                    <td>{{ $item->studyField_id }}</td>
                                                    
                                                    <td class="text-center"><span class="text-success">در دسترس</span></td>
                                                   <td> <a type="button" class="btn btn-outline-info">ویرایش</a></td>
                                                   <td  class="text-center"><a href="{{ route('deleteStudyField' , ['id' => $item->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                                                   
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>   
                                        @endif

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered table-hover table-striped mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Sale&lt;/th&gt;
                &lt;th class="text-center"&gt;Status&lt;/th&gt;
                &lt;th&gt;&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Shaun Park&lt;/td&gt;
                &lt;td&gt;10/08/2020&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-success"&gt;Complete&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt; Alma Clarke&lt;/td&gt;
                &lt;td&gt;11/08/2020&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Xavier&lt;/td&gt;
                &lt;td&gt;12/08/2020&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-info"&gt;In progress&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Vincent Carpenter&lt;/td&gt;
                &lt;td&gt;13/08/2020&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-danger"&gt;Canceled&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                       

<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
@endsection