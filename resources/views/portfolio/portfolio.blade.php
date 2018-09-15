@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h2>PORTFOLIO</h2>
        <br>
        <br>

        
        <h5><center><strong>PROJECT NAME</center></strong></h5>
        <table class="stack">
          <thead>
            <tr>
              <th width="200">PROJECT NAME</th>
              <th width="200">LINK</th>
              <th width="200">DESCRIPTION</th>
            </tr>

          </thead>
          <tbody>

              @foreach($portfolio as $port)
              <tr>

                <td>{{ $port->name }} </td>
                <td>{{ $port->link }}</td>
                <td> {{ $port->description }} </td>

              </tr>
              @endforeach



             

              

                      </tbody> 

         

        </table>
        
      
        

        
      </div>
    </div>
@endsection