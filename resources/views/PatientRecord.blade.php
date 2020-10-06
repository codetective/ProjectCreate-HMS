@extends('layouts.master')
@section('content')

       
 
   <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title"> Patient Records</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Patient Name</th>
                                <th>Condition</th>
                                <th>Date</th>
                                <tbody>

                                    @forelse ($records as $record)
                                  <tr>
                                    <td>{{$record->patient_name}}</td>
                                    <td>{{$record->patient_condition}}</td>
                                    <td>{{$record->created_at}}</td>


                                  </tr>
                                    @empty
                                  <tr>
                                    <td class="text-danger">NO RECORDS FOUND</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                    @endforelse


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('scripts')



@endsection
