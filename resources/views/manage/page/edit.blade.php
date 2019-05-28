@extends('layouts.manage')

@section('title', '页面修改')

@section('header')
    <h1>
        页面修改
    </h1>
@endsection

@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            @include('manage.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" action="{{ route('manage.page.update', ['id' => $page->id]) }}" id="page-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">页面标题</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $page->title }}" class='form-control' name="title" id='title' placeholder='标题'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link_alias">链接别名</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $page->link_alias }}" class='form-control' name="link_alias" id='link_alias' placeholder='链接别名,关于页面请用about关联'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keyword">关键字(Keywords)</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' value="{{ $page->keyword }}" class='form-control' name="keyword" id='keyword' placeholder='请输入关键字，以英文逗号分割，利于搜索引擎收录'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc">描述(Description)</label>
                            <div class="row">
                                <div class='col-md-10'>
                                    <input type='text' value="{{ $page->desc }}" class='form-control' name="desc" id='desc' placeholder='请输入页面描述'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="content">页面内容</label>
                                <div class="row markdown-editor">
                                    <textarea  id="markdown-editor" name="content">{{ $page->content }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <div class="box-footer">
                        <button type="submit" id="submit-page" class="btn btn-primary">创建</button>
                        <button type="button" id="reset-btn" class="btn btn-warning">重置</button>
                    </div>
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        markdownEditorInit();
    </script>
@endsection