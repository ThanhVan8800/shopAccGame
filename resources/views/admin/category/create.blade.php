@extends('admin.layouts_ad.main')

@section('content')
<div class="col-xl-12">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">{{$title}}</h5>
        <form action="{{route('category-admin.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Tên danh mục AG</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" placeholder="Ten danh muc" id="title" name="title" onkeyup="ChangeToSlug();" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Slug</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text"  id="slug" name="slug" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Mô tả</label>
                    <div class="col-md-10">
                        <textarea name="description" id="" cols="129" rows="5" class="form-control"></textarea>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-email-input" class="col-md-2 col-form-label">Image</label>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="image" />
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Order</label>
                    <div class="col-md-10">
                        <input name="order_category" class="form-control" type="number" value="" id="-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-tel-input" class="col-md-2 col-form-label">Trạng thái</label>
                    <div class="col-md-10">
                        <div class="form-check mt-3">
                            <input name="status" class="form-check-input" type="radio" value=""
                                id="defaultRadio1" />
                            <label class="form-check-label" for="defaultRadio1"> Kích hoạt hiển thị </label>
                        </div>
                        <div class="form-check">
                            <input name="status" class="form-check-input" type="radio" value="" id="defaultRadio2"
                                checked />
                            <label class="form-check-label" for="defaultRadio2"> Ngưng kích hoạt </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-primary">Thêm mới</button>
                <button class="btn btn-danger">Hủy bỏ</button>
            </div>
        </form>
        
    </div>
</div>



@endsection