@extends('templates.post')

@section('content')
    <div id="page-wrapper" {{--style="margin: 100px;margin-top: 0px;"--}}>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">{{ $post->titulo }}</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $post->subtitulo_index }}
                        </div>
                        <div class="panel-body">
                            {!! $post->texto !!}
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /#page-wrapper -->
@stop

