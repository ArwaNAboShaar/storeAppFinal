
@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="btn-toolbar pt-4 pb-2 mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ url('products/create') }}" class="btn btn-success  px-3">إضافة منتج جديد</a>
            </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2">المنتجات</h1>

        </div>

        <div class="btn-toolbar mb-2 mb-md-0">

            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">الصنف</th>
                        <th scope="col">السعر</th>
                        <th scope="col">الكمية</th>
                        <th scope="col">الاحداث</th>
                    </tr>
                    @foreach ($products as $product)

                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td>{{  DB::table('categories')->where(column: 'id', operator: $product->category_id)->first()->name}}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a href="{{url('products/edit/' . $product->id) }}" class="btn btn-info">تعديل</a>
                                <a href="{{url('products/delete/' . $product->id) }}" class="btn btn-danger">حذف</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
