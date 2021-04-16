@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron" style="background:#F5F5F5">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="col-sm-6 col-md-8">
                        <h2> Your Profile
                        </h2>
                        <div class="table responsive">


                            <div class="divTableBody">
                                <div class="divTableRow">
                                    <div class="divTableCell">Name: {{ Auth::user()->name }}</div>
                                </div>
                                <div class="divTableRow">
                                    <div class="divTableCell">Email: {{ Auth::user()->email }}</div>
                                </div>
                                <div class="divTableRow">
                                    <div class="divTableCell">Phone: {{Auth::user()->phone_number}}</div>
                                </div>
                                <div class="divTableRow">
                                    <div class="divTableCell">Gender: {{Auth::user()->sex }}</div>
                                </div>
                                <div class="divTableRow">
                                    <div class="divTableCell">Date Of Birth: {{ Auth::user()->birth }}</div>
                                </div>

                            </div>



                            <p>

                            <div class="btn">
                                <a href="{{ route('home') }}" class="btn btn-warning">Orders
                                </a><!--This should redirect the user to his/her orders and show said orders status and list the orders-->
                            </div>
                            <br />
                            <div class="btn-group">
                                <a href="{{ route('home') }}" class="btn btn-warning"> <!--This button looks different from the others for the purpose of the users not mixing them up-->
                                    Edit Profile</a> <!--This button should enable the logged in user to edit his/her profile-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
