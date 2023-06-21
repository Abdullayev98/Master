@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Update Fayl</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    {{-- Main sidebar --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary ">
                        <div class="card-header">
                        <h3 class="card-title">Dars "{{$pdf->title}}"</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="Post" action="{{route('pdfs.update',['pdf'=>$pdf->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="file">Fayl</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dars_id">Dars</label>
                            <select name="dars_id" id="dars_id" class="form-control" >
                                @foreach ($lessons as $k => $v )
                                    <option @if($k==$pdf->dars_id) selected @endif  value="{{$k}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 
