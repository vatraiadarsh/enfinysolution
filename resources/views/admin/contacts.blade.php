@extends('adminlte::page')

@section('title', 'Contacts')


@section('content')


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">contact list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="enquiry-table" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Contact Date</th>
            <th>Action</th>
        </tr>
    </thead>
{{--
        @foreach($bookings as $booking)
        <tbody>
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->enquiry->name}} </td>
                <td>{{$booking->enquiry->course->name}}</td>
                <td>{{$booking->enquiry->course->duration}}&nbsp;{{$booking->enquiry->course->durationType->duration_type}}</td>
                <td>{{$booking->advance}}</td>
                <td>{{$booking->calculateDiscount()}}</td>
                <td>{{$booking->booked_date}}</td>
                <td>{{$booking->trainer->fullName()}}</td>


                <td>
                    <form method="post" action="{{url('admin/bookings/'.$booking->id)}}">
                        <a href="{{url('admin/bookings/'.$booking->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Bookings">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$booking->id}}"/>
                        <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>

                        </button>
                    </form>
                </td>

            </tr>
             </tbody>
        @endforeach --}}

    </table>

@stop



