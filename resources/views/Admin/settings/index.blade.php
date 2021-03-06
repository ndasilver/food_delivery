@extends('Admin.layouts.master')
@section('content-admin')

    <div class="row">
        <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Application Settings</h3>
                    </div>
                    <div class="card-body p-0">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Settings Property</th>
                            <th>Settings Value</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
        
                          <tr>
                          <td>Restaurant Name</td>
                            <td>{{ $settings->restaurant_name }}</td>
                            <td>
                                <button class="btn btn-info" type = "button" data-toggle="modal" data-target ="#name-modal">
                                    <i class="fas fa-trash"></i> Edit
                                </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Terms and conditions</td>
                            <td>{{ $settings->terms_conditions }}</td>
                            <td>
                                <button class="btn btn-info" type = "button" data-toggle="modal" data-target ="#terms-modal">
                                    <i class="fas fa-trash"></i> Edit
                                </button>
                            </td>
                          </tr>
                          <tr>
                            <td>SMS Number</td>
                            <td>{{ $settings->sms_number }}</td>
                            <td>
                                <button class="btn btn-info" type = "button" data-toggle="modal" data-target ="#sms-modal">
                                    <i class="fas fa-trash"></i> Edit
                                </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>{{ $settings->email }}</td>
                            <td>
                                <button class="btn btn-info" type = "button" data-toggle="modal" data-target ="#email-modal">
                                    <i class="fas fa-trash"></i> Edit
                                </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Currency</td>
                            <td>{{ $settings->currency->currency_name }} ({{ $settings->currency->currency_code }})</td>
                            <td>
                                <button class="btn btn-info" type = "button" data-toggle="modal" data-target ="#currency-modal">
                                    <i class="fas fa-trash"></i> Edit
                                </button>
                            </td>
        
                        </tr></tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
               </div>
           </div>
        </div>
    </div>
@include('Admin/settings/editModals')
@endsection

@section('js')

@endsection
