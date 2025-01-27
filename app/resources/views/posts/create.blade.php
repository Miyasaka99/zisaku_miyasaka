@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">新規投稿</div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">タイトル</label>
                            <div class="col-md-9">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-2 col-form-label text-md-right">商品画像</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control-file" name="image" value="{{ old('image') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-2 col-form-label text-md-right">投稿日時</label>
                            <div class="col-md-9">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-2 col-form-label text-md-right">価格</label>
                            <div class="col-md-9">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="introduction" class="col-md-2 col-form-label text-md-right">商品紹介</label>
                            <div class="col-md-9">
                                <textarea name="introduction" id="introduction" style="resize: none; height: 100px; width: 100%">{{ old('introduction') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="condition" class="col-md-2 col-form-label text-md-right">商品の状態</label>
                            <div class="col-md-9">
                                <textarea name="condition" id="condition" style="resize: none; height: 100px; width: 100%">{{ old('condition') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-secondary" onClick="history.back()">戻る</button>
                                <button type="submit" class="btn btn-primary ml-3" name='action' value='add'>
                                    投稿
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection