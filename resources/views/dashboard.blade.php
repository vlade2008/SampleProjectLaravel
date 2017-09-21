@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                  <div class="panel-body">
                    <h5>TOTAL SALES</h5>
                    <h3 style="margin-top:0px">1,265.00</h3>
                  </div>
            </div>
        </div>
        <div class="col-md-3">
                <div class="panel panel-default">
                      <div class="panel-body">
                        <h5>TOTAL SALES</h5>
                        <h3 style="margin-top:0px">1,265.00</h3>
                      </div>
                </div>
            </div>            
        </div>

       <div>

      <!-- Nav tabs -->
      <ul class="nav  nav-tabs nav-tabs-google" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="row" style="padding:15px">
                <table  class="table table-bordered table-condensed">
                    <thead>
                        <th >Product<span style="margin-left: 5px;" class="glyphicon glyphicon-dynamic"></span></th>
                        <th >Production<span style="margin-left: 5px;" class="glyphicon glyphicon-dynamic"></span></th>
                        <th >Commissary<span style="margin-left: 5px;" class="glyphicon glyphicon-dynamic"></span></th>
                        <th >Branch<span style="margin-left: 5px;" class="glyphicon glyphicon-dynamic"></span></th>
                        <th >Purchased<span style="margin-left: 5px;" class="glyphicon glyphicon-dynamic"></span></th>
                        <th >Action<span style="margin-left: 5px;" class="glyphicon glyphicon-dynamic"></span></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Something</td>
                            <td>Something else...</td>
                            <td>Something else...</td>
                            <td>Something else...</td>
                            <td><button type="button" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus"></button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Something</td>
                            <td>Something else...</td>
                            <td>Something else...</td>
                            <td>Something else...</td>
                            <td><button type="button" class="btn  btn-xs btn-success"><i class="glyphicon glyphicon-plus"></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">...</div>
        <div role="tabpanel" class="tab-pane" id="messages">...</div>
        <div role="tabpanel" class="tab-pane" id="settings">...</div>
      </div>

    </div>
        

    </div>
@endsection
