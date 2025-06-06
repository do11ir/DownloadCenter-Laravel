@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>فرم اضافه کردن رشته</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
       

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
      
       <link href="{{asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />

</head>

<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            
            <div id="navSection" data-spy="affix" class="nav  sidenav">
                <div class="sidenav-content">
                    <a href="#basic" class="active nav-link">Basic</a>
                    <a href="#sizes" class="nav-link">Sizes</a>
                    <a href="#multiple" class="nav-link">Multiple</a>
                    <a href="#Input_group_action" class="nav-link">Input group with action</a>
                </div>
            </div>

            <div class="row layout-top-spacing">

                <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Default</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon5">@</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                            </div>

                            <div class="input-group mb-5">
                              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon6">@example.com</span>
                              </div>
                            </div>

                            <label for="basic-url">Your vanity URL</label>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon7">https://</span>
                              </div>
                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="example.com/users/">
                            </div>

                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                              </div>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                              <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                              </div>
                            </div>

                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text">With textarea</span>
                              </div>
                              <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>

                            <div class="code-section-container show-code">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="basic-addon5"&gt;@&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Username" aria-label="Username"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-5"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"&gt;
&lt;div class="input-group-append"&gt;
&lt;span class="input-group-text" id="basic-addon6"&gt;@example.com&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;label for="basic-url"&gt;Your vanity URL&lt;/label&gt;
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="basic-addon7"&gt;https://&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="example.com/users/"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text"&gt;$&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
&lt;div class="input-group-append"&gt;
&lt;span class="input-group-text"&gt;.00&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text"&gt;With textarea&lt;/span&gt;
&lt;/div&gt;
&lt;textarea class="form-control" aria-label="With textarea"&gt;&lt;/textarea&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Simple Icon</h4>
                                </div>                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Notification" aria-label="notification" aria-describedby="basic-addon1">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Notification" aria-label="notification" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></span>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="basic-addon1"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Notification" aria-label="notification" aria-describedby="basic-addon1"&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Notification" aria-label="notification" aria-describedby="basic-addon2"&gt;
&lt;div class="input-group-append"&gt;
&lt;span class="input-group-text" id="basic-addon2"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Spinning Icon</h4>
                                </div>                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners" aria-describedby="basic-addon3">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners" aria-describedby="basic-addon4">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></span>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="basic-addon3"&gt;&lt;svg class="spin"&gt; ... &lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Spinners" aria-label="spinners" aria-describedby="basic-addon3"&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Spinners" aria-label="spinners" aria-describedby="basic-addon4"&gt;
&lt;div class="input-group-append"&gt;
&lt;span class="input-group-text" id="basic-addon4"&gt;&lt;svg class="spin"&gt; ... &lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Dropdown Icon</h4>
                                </div>                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
                                <div class="input-group-append">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; &lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
    &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown"&gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown"&gt;
&lt;div class="input-group-append"&gt;
&lt;button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; &lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
    &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
    &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Checkboxes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="n-chk align-self-end">
                                        <label class="new-control new-checkbox checkbox-danger" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox" >
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <div class="n-chk align-self-end">
                                            <label class="new-control new-checkbox checkbox-warning" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                              <input type="checkbox" class="new-control-input" checked>
                                              <span class="new-control-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;div class="input-group-text"&gt;
&lt;div class="n-chk align-self-end"&gt;
    &lt;label class="new-control new-checkbox checkbox-danger" style="height: 21px; margin-bottom: 0; margin-right: 0"&gt;
      &lt;input type="checkbox" class="new-control-input" checked&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox" &gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox" aria-describedby="basic-addon1"&gt;
&lt;div class="input-group-append"&gt;
&lt;div class="input-group-text"&gt;
    &lt;div class="n-chk align-self-end"&gt;
        &lt;label class="new-control new-checkbox checkbox-warning" style="height: 21px; margin-bottom: 0; margin-right: 0"&gt;
          &lt;input type="checkbox" class="new-control-input" checked&gt;
          &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Radios</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <div class="n-chk align-self-end">
                                        <label class="new-control new-radio radio-info" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                          <input type="radio" class="new-control-input" name="custom-radio-1" checked>
                                          <span class="new-control-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Radio" aria-label="radio" >
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Radio" aria-label="Radio">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <div class="n-chk align-self-end">
                                            <label class="new-control new-radio radio-success" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                              <input type="radio" class="new-control-input" name="custom-radio-1" checked>
                                              <span class="new-control-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;div class="input-group-text"&gt;
    &lt;div class="n-chk align-self-end"&gt;
        &lt;label class="new-control new-radio radio-info" style="height: 21px; margin-bottom: 0; margin-right: 0"&gt;
            &lt;input type="radio" class="new-control-input" name="custom-radio-1" checked&gt;
            &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Radio" aria-label="radio" &gt;
&lt;/div&gt;

=========
Right
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Radio" aria-label="Radio"&gt;
&lt;div class="input-group-append"&gt;
&lt;div class="input-group-text"&gt;
    &lt;div class="n-chk align-self-end"&gt;
        &lt;label class="new-control new-radio radio-success" style="height: 21px; margin-bottom: 0; margin-right: 0"&gt;
          &lt;input type="radio" class="new-control-input" name="custom-radio-1" checked&gt;
          &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Switch</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label class="switch s-primary mb-0">
                                        <input type="checkbox" checked="">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Switch" aria-label="switch" >
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <label class="switch s-danger mb-0">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========

&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;div class="input-group-text"&gt;
    &lt;label class="switch s-primary mb-0"&gt;
        &lt;input type="checkbox" checked=""&gt;
        &lt;span class="slider"&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="Switch" aria-label="switch" &gt;
&lt;/div&gt;

=========
RIGHT
=========

&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Switch" aria-label="switch"&gt;
&lt;div class="input-group-append"&gt;
&lt;div class="input-group-text"&gt;
    &lt;label class="switch s-danger mb-0"&gt;
        &lt;input type="checkbox" checked=""&gt;
        &lt;span class="slider"&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>              
            </div>

            <div class="row layout-spacing">

                <div id="sizes" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">Sizing</h4>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Sizing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="input-group input-group-sm mb-4">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                      </div>
                                      <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    <div class="input-group mb-4">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                      </div>
                                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <div class="input-group input-group-lg mb-4">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                      </div>
                                      <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    <div class="code-section-container">
                                        
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="input-group input-group-sm mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-sm"&gt;Small&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"&gt;
&lt;/div&gt;

&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-default"&gt;Default&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"&gt;
&lt;/div&gt;

&lt;div class="input-group input-group-lg mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="inputGroup-sizing-lg"&gt;Large&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="multiple" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Multiple Fields</h4>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multiple inputs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="input-group mb-4">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">First and last name</span>
                                      </div>
                                      <input type="text" class="form-control">
                                      <input type="text" class="form-control">
                                    </div>

                                    <div class="code-section-container">
                                        
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text"&gt;First and last name&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control"&gt;
&lt;input type="text" class="form-control"&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Multiple addons</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                              </div>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                              <div class="input-group-append">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                              </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text"&gt;$&lt;/span&gt;
&lt;span class="input-group-text"&gt;0.00&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"&gt;
&lt;div class="input-group-append"&gt;
&lt;span class="input-group-text"&gt;$&lt;/span&gt;
&lt;span class="input-group-text"&gt;0.00&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="Input_group_action" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">Input Group with Action</h4>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Buttons with dropdowns</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                </div>
                              </div>
                              <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                              <input type="text" class="form-control" aria-label="Text input with dropdown button">
                              <div class="input-group-append">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                </div>
                              </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;Dropdown &lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
&lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" aria-label="Text input with dropdown button"&gt;
&lt;div class="input-group-append"&gt;
&lt;button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;Dropdown &lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
&lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Segmented buttons</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <button type="button" class="btn btn-info">Action</button>
                                <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                </div>
                              </div>
                              <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                              <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                              <div class="input-group-append">
                                <button type="button" class="btn btn-outline-info">Action</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                </div>
                              </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;button type="button" class="btn btn-info"&gt;Action&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
&lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" aria-label="Text input with segmented dropdown button"&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" aria-label="Text input with segmented dropdown button"&gt;
&lt;div class="input-group-append"&gt;
&lt;button type="button" class="btn btn-outline-info"&gt;Action&lt;/button&gt;
&lt;button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Something else here&lt;/a&gt;
&lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Button addons</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <button class="btn btn-primary" type="button">Button</button>
                              </div>
                              <input type="text" class="form-control" placeholder="" aria-label="">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Button</button>
                              </div>
                            </div>

                            <p class="">Left</p>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-primary" type="button">Button</button>
                                <button class="btn btn-outline-primary" type="button">Button</button>
                              </div>
                              <input type="text" class="form-control" placeholder="" aria-label="">
                            </div>

                            <p class="">Right</p>
                            <div class="input-group mb-4">
                              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                              <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="button">Button</button>
                                <button class="btn btn-outline-primary" type="button">Button</button>
                              </div>
                            </div>

                            <div class="code-section-container">
                                        
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="" aria-label=""&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"&gt;
&lt;div class="input-group-append"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

=========
LEFT
=========
&lt;div class="input-group mb-4"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" placeholder="" aria-label=""&gt;
&lt;/div&gt;

=========
RIGHT
=========
&lt;div class="input-group mb-4"&gt;
&lt;input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"&gt;
&lt;div class="input-group-append"&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-outline-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

</pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            
        </div>
        </div>
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#tableSimple" class="active nav-link">Simple</a>
                            <a href="#tableHover" class="nav-link">Hover</a>
                            <a href="#tableStriped" class="nav-link">Striped</a>
                            <a href="#tableDark" class="nav-link">Dark</a>
                            <a href="#tableCaption" class="nav-link">Caption</a>
                            <a href="#tableProgress" class="nav-link">Progress</a>
                            <a href="#tableContextual" class="nav-link">Contextual</a>
                            <a href="#tableDropdown" class="nav-link">Dropdown</a>
                            <a href="#tableFooter" class="nav-link">Footer</a>
                            <a href="#tableCheckbox" class="nav-link">Checkbox</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shaun Park</td>
                                                    <td>10/08/2020</td>
                                                    <td>320</td>
                                                    <td class="text-center"><span class="text-success">Complete</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Alma Clarke</td>
                                                    <td>11/08/2020</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="text-secondary">Pending</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>12/08/2020</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="text-info">In progress</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>13/08/2020</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="text-danger">Canceled</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered mb-4"&gt;
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
                &lt;td&gt;Alma Clarke&lt;/td&gt;
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
                        
                        <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Hover Table</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shaun Park</td>
                                                    <td>10/08/2020</td>
                                                    <td>320</td>
                                                    <td class="text-center"><span class="text-success">Complete</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td> Alma Clarke</td>
                                                    <td>11/08/2020</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="text-secondary">Pending</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>12/08/2020</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="text-info">In progress</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>13/08/2020</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="text-danger">Canceled</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

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
                    
                        <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Striped Table</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg">
                                                            </div>
                                                            <p class="align-self-center mb-0">Shaun</p>
                                                        </div>
                                                    </td>
                                                    <td>10/08/2020</td>
                                                    <td>320</td>
                                                    <td class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg">
                                                            </div>
                                                            <p  class="align-self-center mb-0">Alma</p>
                                                        </div>
                                                    </td>
                                                    <td>11/08/2020</td>
                                                    <td>420</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg">
                                                            </div>
                                                            <p  class="align-self-center mb-0">Kelly</p>
                                                        </div>
                                                    </td>
                                                    <td>12/08/2020</td>
                                                    <td>130</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg">
                                                            </div>
                                                            <p  class="align-self-center mb-0">Vincent</p>
                                                        </div>
                                                    </td>
                                                    <td>13/08/2020</td>
                                                    <td>260</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered table-striped mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Sale&lt;/th&gt;
                &lt;th class="text-center"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg"&gt;
                        &lt;/div&gt;
                        &lt;p class="align-self-center mb-0"&gt;Shaun&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;10/08/2020&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;
                &lt;td class=" text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg"&gt;
                        &lt;/div&gt;
                        &lt;p  class="align-self-center mb-0"&gt;Alma&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;11/08/2020&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg"&gt;
                        &lt;/div&gt;
                        &lt;p  class="align-self-center mb-0"&gt;Kelly&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;12/08/2020&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="assets/img/90x90.jpg"&gt;
                        &lt;/div&gt;
                        &lt;p  class="align-self-center mb-0"&gt;Vincent&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;13/08/2020&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>

<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
@endsection