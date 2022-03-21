@extends('layouts.Admin.adminLayout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Product</h4>
                        </div>
                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="basic-form">
                                <form action="{{route('seeds.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control input-rounded" placeholder="Product Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Status</label>
                                            <select class="default-select input-rounded form-control wide mb-3" name="status">
                                                <option value="">-- Select Status --</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Special</option>
                                                <option value="3">New</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label">Descrption</label>
                                            <textarea name="editor1" id="description" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class="col-lg-6 mt-3">
                                            <label class="form-label">Crops</label>
                                            <select  class="crops default-select input-rounded form-control wide mb-3" name="product_id">
                                                <option value="">-- Select Crops --</option>
                                                @foreach($products as $product)
                                                 <option value="{{$product->id}}" data-type="{{$product->type}}"  >{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-6 mt-3 branches-div" style="display:none" >
                                            <label class="form-label">Branches</label>
                                            <select class="branchesSelect default-select input-rounded form-control wide mb-3" name="variance_id">
                                                <option value="">-- Select Branch --</option>
                                                @foreach($variances as $variance)
                                                    <option value="{{$variance->id}}">{{$variance->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-6 sub-branches-div" style="display: none">
                                            <label class="form-label">Sub Branches</label>
                                            <select class=" subBranchSelect default-select input-rounded form-control wide mb-3" name="branch_id">
                                                <option value="">-- Select Sub Branch --</option>
                                                @foreach($branches as $branch)
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="form-label">Main Image</label>
                                            <input type="file" name="main_image" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="form-label">Sliders Images</label>
                                            <input type="file" name="sub_image[]" class="form-control input-rounded" multiple placeholder="input-rounded">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-primary mt-3">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $(document).on('change','.crops',function (e) {
           let type = $(this).find(":selected").data('type');
            let product = $(this).find(":selected").val();

           if(type == 1) {
                $('.branches-div').hide();
               $('.sub-branches-div').hide();
           }
           else if (type == 2) {
               $('.sub-branches-div').hide();
               $('.branches-div').show();
               //ajax request
               $.ajax({
                   url: "/admin/getBranches",
                   type: "GET",
                   data: {
                       product: product,
                   },
                   success: function (res) {
                       $('.branchesSelect').html('');
                       let html = `<option value="" selected >-- Select Branch --</option>`;
                       $.each( res.branches, function( key, branch ) {
                         html += `<option value="${branch.id}">${branch.name}</option>`
                       });
                       $('.branchesSelect').html(html);
                       $('.branchesSelect').niceSelect('update');
                   },

                   error: function (error) {
                       console.log(error);
                   }


               })
           }
           else {
               $.ajax({
                   url: "/admin/getBranches",
                   type: "GET",
                   data: {
                       product: product,
                   },
                   success: function (res) {
                       $('.branchesSelect').html('');
                       let html = `<option selected >-- Select Branch --</option>`;
                       $.each( res.branches, function( key, branch ) {
                           html += `<option value="${branch.id}">${branch.name}</option>`
                       });
                       $('.branchesSelect').html(html);
                       $('.branchesSelect').niceSelect('update');
                   },

                   error: function (error) {
                       console.log(error);
                   }


               });
               $('.branches-div').show();
               $('.sub-branches-div').show();
           }
        });

        $(document).on('change','.branchesSelect',function (e) {
          let branch =   $(this).find(":selected").val();

            //get sub branches
            $.ajax({
                url: "/admin/getSubBranches",
                type: "GET",
                data: {
                    branch: branch,
                },
                success: function (res) {
                    $('.subBranchSelect').html('');
                    console.log(res.Subbranches);
                    let html = `<option  value=""  selected >-- Select Sub Branch --</option>`;
                    $.each( res.Subbranches, function( key, Subbranch ) {
                        html += `<option value="${Subbranch.id}">${Subbranch.name}</option>`
                    });
                    $('.subBranchSelect').html(html);
                    $('.subBranchSelect').niceSelect('update');
                },

                error: function (error) {
                    console.log(error);
                }


            });

        }).change();
    </script>
@stop
