@extends('layouts.layout')

@section('content')

<div id="content" class="main-content">
    <div class="container">

        <form action="{{ route('insertNotice') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row layout-top-spacing">
                <div class="col-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>ثبت اطلاعیه جدید</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <div class="form-group mb-4">
                                <label for="notice_title">عنوان اطلاعیه</label>
                                <input type="text" name="title" class="form-control" id="notice_title" placeholder="مثال: اطلاعیه تعطیلی دانشگاه">
                            </div>

                                    <div class="form-group mb-4">
                                    <label for="notice_body">متن اطلاعیه</label>
                                    <textarea name="content" required  style="height: 300px;width: 100%; border-radius: 10px; border-color: #1b2e4b ; background: #1b2e4b; color: rgb(231, 226, 226)"></textarea>
            
                             </div>
                           
                        </div>
                        <div class="form-group mb-4">
                            <label for="notice_image">تصویر اطلاعیه</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="notice_image" name="image">
                                <label class="custom-file-label" for="notice_image">انتخاب تصویر...</label>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="category">دسته‌بندی اطلاعیه</label>
                            <select class="form-control" id="category" name="field_category">
                                <option value="">انتخاب کنید</option>
                                <option value="عمومی">عمومی</option>
                                <option value="آموزشی">آموزشی</option>
                                <option value="فرهنگی">فرهنگی</option>
                                <option value="مالی">مالی</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">ثبت اطلاعیه</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="row layout-top-spacing mt-4">
            <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>لیست اطلاعیه‌ها</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-4">
                                <thead>
                                    <tr>
                                        <th>عنوان</th>
                                        <th>تاریخ ثبت</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notice as $notices)
                                    <tr>
                                        <td>{{ $notices->Title }}</td>
                                        <td>
                                             {{ $notices->created_at ? \Morilog\Jalali\Jalalian::fromCarbon(\Carbon\Carbon::parse($notices->created_at))->format('j F Y') : 'منتشر نشده' }}
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-outline-info btn-sm">ویرایش</a>
                                            <a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if (session('success'))
                        <div class="alert alert-success mt-4">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
