@extends('backend::base')
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$title}}</h1>
            </div>
            <div class="col-lg-10">
                <form class="form-horizontal" method="post" action="{{route('settings.general')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label">Site Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="site_name" id="site_name" value="{{$general->site_name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="site_description" id="site_description" value="{{$general->site_description}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection

