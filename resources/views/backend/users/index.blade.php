@extends('backend.layouts1.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle col-lg-3" style="">
            <h1>Nhân Viên</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item">Nhân Viên</li>
                    <li class="breadcrumb-item active">Danh Sách</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <div class="box box1">
                            <h3 class="card-title" style="font-size:20px">Danh Sách Nhân Viên </h3>
                        </div>
                        <div class="box box2">
                            
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-search"></i> tìm kiếm
                            </button>
                            <a href=""><button class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Thêm
                                    mới</button></a>
                            <a href=""><button class="btn btn-warning"><i class="bi bi-trash-fill"></i> Đã
                                    xóa</button></a>
                        </div>
                        {{-- @include('backend.users.modal') --}}
                        <style>
                            .box {
                                width: 50%;
                                float: left;
                            }

                            .box2 {
                                margin: 20px 0px 0px 0px;
                                text-align: right;
                            }
                        </style>


                        <table style="width: 100%;" class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ Và Tên </th>
                                    <th scope="col">Chức Vụ</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->group->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('users.SoftDeletes', $user->id) }}" method="post">
                                                {{-- @can('update', App\Models\User::class)
                                        @endcan --}}
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-sm btn-icon btn-secondary"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                                @csrf
                                                @method('PUT')
                                                {{-- @can('forceDelete', App\Models\User::class) --}}
                                                <button type="submit" class="btn btn-sm btn-icon btn-secondary"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i
                                                        class="far fa-trash-alt"></i></button>
                                                {{-- @endcan --}}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody><!-- /tbody -->
                        </table>
                        {{ $users->onEachSide(5)->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
