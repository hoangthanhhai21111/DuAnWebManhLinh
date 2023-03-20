@extends('backend.master')
@section('content')
    <div class="page-inner">
        <header class="page-title-bar">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Trang Chủ</a>
                    </li>
                </ol>
            </nav>
            <div class="d-md-flex align-items-md-start">
                <h1 class="page-title mr-sm-auto">Danh sách người Đăng ký</h1>
                <div class="btn-toolbar">
                </div>
            </div>
        </header>
        <div class="page-section">
            <div class="card card-fluid">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Tất Cả</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <br>
                        </div>
                    </div>
                    <div class="container col-12">
                        @if (!count($registers))
                            <p class="text-success">
                            <div class="alert alert-danger"> <i class="bi bi-x-circle"aria-hidden="true"></i>
                                không tìm thấy kết quả.
                            </div>
                            </p>
                        @endif
                        @if (Session::has('success'))
                            <p class="text-success">
                            <div class="alert alert-success"> <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('success') }}</div>
                            </p>
                        @endif
                        @if (Session::has('error'))
                            <p class="text-danger">
                            <div class="alert alert-danger"> <i class="bi bi-x-circle"aria-hidden="true"></i>
                                {{ Session::get('error') }}</div>
                            </p>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <!-- thead -->
                            <thead class="thead-">
                                <tr>
                                    <th style="min-width:50px"> #</th>
                                    <th>
                                        <H6>Tên</H6>
                                    </th>
                                    <th>
                                        <H6>Số ĐT </H6>
                                    </th>
                                    <th>
                                       <h6>Hạng Đăng ký</h6>
                                    </th>
                                    <th>
                                        <H6>Ngày</H6>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                @foreach ($registers as $key => $register)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>
                                            {{$register->name}}
                                        </td>
                                        <td>
                                            {{$register->phone}}
                                        </td>
                                        <td>
                                            {{$register->course}}
                                        </td>
                                        <td>
                                            {{$register->created_at->format('d/m/Y')}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody><!-- /tbody -->
                        </table>
                        {{ $registers->onEachSide(5)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
