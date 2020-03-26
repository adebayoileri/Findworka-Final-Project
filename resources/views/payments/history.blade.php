@extends('inc.user')

@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
               <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Purchase History</h6>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th class="text-left">Payment ID</th>
                          <th>Payment Purpose</th>
                          <th>Amount Paid</th>
                          <th>Created At</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($payments as $payment)
                        <tr>
                        <td>{{ $payment->id }}</td>
                          <td class="text-left">{{$payment->transaction_id}}</td>
                          <td>{{$payment->payment_purpose}}</td>
                        <td>{{ $payment->amount_paid }}</td>
                        
                          <td>{{ $payment->created_at }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


      </div>
    </div>
  </main>
</div>
@endsection