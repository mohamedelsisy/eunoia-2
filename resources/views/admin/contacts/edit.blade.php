@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.admins')}}"> الإنجازات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل إنجاز
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تعديل   </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.admins.update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $achieve->id }}">
                                            <input type="hidden" name="oldphoto" value="{{ $achieve->photo }}">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الإنجاز </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name"> اسم الإنجاز  </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم الإنجاز   "
                                                                   value="{{ $achieve->name }}"
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">
                                                                    {{$message}}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="link">  رابط الإنجاز  </label>
                                                            <input type="text"  id="link"
                                                                   class="form-control"
                                                                   placeholder="ادخل رابط الإنجاز    "
                                                                   value="{{ $achieve-> link}}"
                                                                   name="link">
                                                            @error('link')
                                                            <span class="text-danger">
                                                                    {{$message}}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="photo"> صورة الإنجاز - إتركها فارغا في حالة عدم التغيير   </label>
                                                            <input type="file"  id="photo"
                                                                   class="form-control"
                                                                   name="photo">
                                                            @error('photo')
                                                            <span class="text-danger">
                                                                    {{$message}}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="details"> وصف الإنجاز  </label>
                                                            <textarea dir="ltr" name="details" id="details"  class="form-control" placeholder="أدخل وصف الخدمة بالعربية" >{{ $achieve->details }}</textarea>
                                                            @error('details')
                                                            <span class="text-danger">
                                                                    {{$message}}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
