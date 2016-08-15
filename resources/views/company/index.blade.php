@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Add Company
          </div>
          <div class="panel-body">
            <div class="alert alert-danger" v-if="error">
              <ul>
                  <li v-for="err in formErrors">@{{ err }}</li>
              </ul>
            </div>
            <form @submit.prevent="addCompany" method="post">
              <div class="form-group">
              <input type="text" name="name" v-model="newCompany.name" :value="newCompany.name" class="form-control" placeholder="Company name">
              </div>
              <button type="submit" class="btn btn-default" name="button">Add Company</button>

            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>
                Company name
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="company in companies">
              <td>
                @{{ company.name }}
              </td>
              <td>
                
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
