@extends('admin.layouts.layout')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Fayllar</h1>
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

  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fayllar jadvali</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('pdfs.create') }}" class="btn btn-primary mb-3">Fayl yaratish</a>
                        @if (count($pdfs))
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 30px">#</th>
                                        <th>Nomi</th>
                                        <th>Dars nomi</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pdfs as $pdf)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $pdf->title }}</td>
                                            @php
                                                $firstLetters = mb_substr($pdf->dars->name, 0, 30, 'UTF-8');
                                            @endphp
                                            <td> {{ $firstLetters }}  </td>
                                            <td>
                                                <a target="_blank" href="{{url('/view/file', $pdf->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('pdfs.edit', ['pdf' => $pdf->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('pdfs.destroy', ['pdf' => $pdf->id]) }}" method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick=" return confirm('O\'chirilsinmi')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>   
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>Fayllar topilmadi ...</p>
                        @endif
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix float-right">
                        {{ $pdfs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection 