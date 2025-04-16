@extends('layouts.layout')

@section('content')

<div id="content" class="main-content">
    <div class="container">

        <form action="#" method="POST">
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
                                <textarea name="body"  id="editor" rows="5" placeholder="متن کامل اطلاعیه را اینجا وارد کنید..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">ثبت اطلاعیه</button>
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
                            <select class="form-control" id="category" name="category">
                                <option value="">انتخاب کنید</option>
                                <option value="عمومی">عمومی</option>
                                <option value="آموزشی">آموزشی</option>
                                <option value="فرهنگی">فرهنگی</option>
                                <option value="مالی">مالی</option>
                            </select>
                        </div>
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
                                        <td>{{ $notices->title }}</td>
                                        <td>
                                            {{ \Morilog\Jalali\Jalalian::fromCarbon($notice->created_at)->format('j F Y') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('editNotice', $notices->id) }}" class="btn btn-outline-info btn-sm">ویرایش</a>
                                            <a href="{{ route('deleteNotice', $notices->id) }}" class="btn btn-outline-danger btn-sm">حذف</a>
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
