@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Enrollments
@endsection
@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Done!</h4>
                        {{ session('message') }}
                    </div>
                @endif

                <div class="box box-default" id="createEnrollmentBox">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create enrollment</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>

                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{--@if (Session::has('message'))--}}
                        {{--<div class="alert alert-success alert-dismissible">--}}
                            {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
                            {{--<h4><i class="icon fa fa-check"></i> Done!</h4>--}}
                            {{--{{ session('message') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}

                        <form role="form" action="/enrollments" method="post" id="createEnrollment">
                            <!-- text input -->
                            {{ csrf_field() }}

                            <input type="hidden" name="validated" value="1">
                            <input type="hidden" name="finished" value="1">
                            <input type="hidden" name="study_id" value="1">
                            <input type="hidden" name="course_id" value="1">
                            <input type="hidden" name="classroom_id" value="1">

                            @php
                                $warning="";
                                if ($errors->has('name')) {
                                    $warning="has-warning";
                                }
                            @endphp

                                <div class="form-group {{ $warning }}">
                                    <label class="control-label" for="inputWarning"><i class="fa fa-pencil"></i> Name</label>
                                    {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Name" name="name" value="{{old('name')}}">

                                    <label class="control-label" for="inputWarning"><i class="fa fa-check-square-o"></i> Validated</label>
                                    {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Validated" name="validated" value="{{old('validated')}}">

                                    <label class="control-label" for="inputWarning"><i class="fa fa-flag-checkered"></i> Finished</label>
                                    {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Finished" name="finished" value="{{old('finished')}}">

                                    <label class="control-label" for="inputWarning"><i class="fa fa-list-alt"></i> Study Id</label>
                                    {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Study Id" name="study_id" value="{{old('study_id')}}">

                                    <label class="control-label" for="inputWarning"><i class="fa fa-archive"></i> Course Id</label>
                                    {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Course Id" name="course_id" value="{{old('course_id')}}">

                                    <label class="control-label" for="inputWarning"><i class="fa fa-briefcase"></i> Classroom Id</label>
                                    {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                    <input type="text" class="form-control" id="inputWarning" placeholder="Classroom Id" name="classroom_id" value="{{old('classroom_id')}}">

                                    @foreach ($errors->get('name') as $message)
                                        <span class="help-block"> {{ $message }}</span>
                                    @endforeach
                                </div>

                        </form>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" onclick="document.getElementById('createEnrollment').submit();" type="submit">Create</button>
                    </div>
                </div>

                {{--edit form--}}
                <div class="box box-default" style="display: none" id="updateEnrollmentBox">
                    <div class="box-header with-border">
                        <h3 class="box-title" id="updateEnrollmentBoxTitle"></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>

                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{--@if (Session::has('message'))--}}
                            {{--<div class="alert alert-success alert-dismissible">--}}
                                {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
                                {{--<h4><i class="icon fa fa-check"></i> Done!</h4>--}}
                                {{--{{ session('message') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--{{$id=2}}--}}

                        <form role="form" method="post" id="updateEnrollment">
                            <!-- text input -->
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="validated" value="1">
                            <input type="hidden" name="finished" value="1">
                            <input type="hidden" name="study_id" value="1">
                            <input type="hidden" name="course_id" value="1">
                            <input type="hidden" name="classroom_id" value="1">

                            @php
                                $warning="";
                                if ($errors->has('name')) {
                                    $warning="has-warning";
                                }
                            @endphp

                            <div class="form-group">
                                <label class="control-label" for="inputWarning"><i class="fa fa-pencil"></i> Name</label>
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                <input type="text" class="form-control" id="inputWarning" placeholder="Name" name="name" value="{{old('name')}}">

                                <label class="control-label" for="inputWarning"><i class="fa fa-check-square-o"></i> Validated</label>
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                <input type="text" class="form-control" id="inputWarning" placeholder="Validated" name="validated" value="{{old('validated')}}">

                                <label class="control-label" for="inputWarning"><i class="fa fa-flag-checkered"></i> Finished</label>
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                <input type="text" class="form-control" id="inputWarning" placeholder="Finished" name="finished" value="{{old('finished')}}">

                                <label class="control-label" for="inputWarning"><i class="fa fa-list-alt"></i> Study Id</label>
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                <input type="text" class="form-control" id="inputWarning" placeholder="Study Id" name="study_id" value="{{old('study_id')}}">

                                <label class="control-label" for="inputWarning"><i class="fa fa-archive"></i> Course Id</label>
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                <input type="text" class="form-control" id="inputWarning" placeholder="Course Id" name="course_id" value="{{old('course_id')}}">

                                <label class="control-label" for="inputWarning"><i class="fa fa-briefcase"></i> Classroom Id</label>
                                {{--<input type="text" class="form-control" id="inputWarning" placeholder="Id" name="id" value="{{old('id')}}">--}}
                                <input type="text" class="form-control" id="inputWarning" placeholder="Classroom Id" name="classroom_id" value="{{old('classroom_id')}}">



                            @foreach ($errors->get('name') as $message)
                                    <span class="help-block"> {{ $message }}</span>
                                @endforeach
                            </div>

                        </form>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" onclick="document.getElementById('updateEnrollment').submit();

" type="submit">Update</button>
                    </div>
                </div>

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Enrollments</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Validated</th>
                                <th>Name</th>
                                <th>Finished</th>
                                <th>Study_id</th>
                                <th>Course_id</th>
                                <th>Classroom_id</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td> {{ $enrollment->id  }} </td>
                                    @if($enrollment->validated == 1)
                                        <td> <input class="validated" type="checkbox" name="validated" value="1" checked> </td>
                                    @else
                                        <td> <input class="validated" type="checkbox" name="validated" value="0"> </td>
                                    @endif
                                    <td> {{ $enrollment->name }} </td>
                                    <td> {{ $enrollment->finished }} </td>
                                    <td> {{ $enrollment->study_id }} </td>
                                    <td> {{ $enrollment->course_id }} </td>
                                    <td> {{ $enrollment->classroom_id }} </td>
                                    <td>
                                        <form action="/enrollments/{{$enrollment->id}}" method=POST>
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger" name="_method" value="DELETE" onclick="
var result = confirm('Want to delete?');
                                            if (result) {
                                                console.log('delete')
                                            }
" ><i class="fa fa-fw fa-trash"></i></button>
                                        </form>

                                        <button class="btn btn-info" type="button" onclick="document.getElementById('updateEnrollmentBox').style.display = 'block';document.getElementById('createEnrollmentBox').style.display = 'none';function updateEnrollment(enrollment) {
                                                document.getElementById('updateEnrollmentBoxTitle').innerText = 'Update enrollment ' + enrollment.id;
                                                var Form = document.forms['updateEnrollment'];
                                                Form.action = '/enrollments/' + enrollment.id;
                                                Form.elements['validated'].value = enrollment.validated;
                                                Form.elements['finished'].value = enrollment.finished;
                                                Form.elements['study_id'].value = enrollment.study_id;
                                                Form.elements['course_id'].value = enrollment.course_id;
                                                Form.elements['classroom_id'].value = enrollment.classroom_id;
                                                }
                                                updateEnrollment({{$enrollment}})"><i class="fa fa-fw fa-edit"></i></button>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function sendMessage() {
            this.$emit('messagesent', {
                user: this.user,
                message: this.newMessage
            });
            this.newMessage = ''
        }
    </script>
@endsection