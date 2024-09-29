@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Customer Messages</h2>
</div>
<div class="row g-4">

    <div class="col-xxl-12 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h5>All Customer Messages</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <div class="digi-dropdown dropdown">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">

                        </div>
                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Schedule</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurant_book_list as $messages)
                            <tr>

                                <td><span class="table-dscr">{{ $messages->name }}</span></td>
                                <td><span class="table-dscr">{{ $messages->email }}</span></td>
                                <td><span class="table-dscr">{{ $messages->number }}</span></td>
                                <td><span class="table-dscr">{{ $messages->date }}</span></td>
                                <td><span class="table-dscr">{{ $messages->time }}</span></td>
                                <td><span class="table-dscr">{{ $messages->schedule }}</span></td>
                                <td><span class="table-dscr">{{ $messages->message }}</span></td>
                                <td>
                                    <div class="btn-box">
                                            <a href="{{ route('restaurant.book.destroy',  $messages->id) }}" class=" border-0 mr-2">
                                                <i class="fa-light fa-trash"></i>
                                            </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection
