@extends('layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Posts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 bg-white py-3">

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#createPostModal" ><i class="fas fa-plus mr-2"></i>Adicionar Post</a>
                    </div>

                    <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModal"
                        aria-hidden="true">
                       
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createPostModalLabel">Criar novo post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <livewire:post.create-posts></livewire>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <livewire:post.list-posts>
                        </livewire>


                </div>
            </div>

        </div>
    </div>

</div>

@endsection