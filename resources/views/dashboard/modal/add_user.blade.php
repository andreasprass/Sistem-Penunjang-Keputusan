<div class="modal fade" id="modal_add_user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Data User</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal">
            <div class="modal-body">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputPassword3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <hr class="mt-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <select id="departs" name="departs" class="form-control" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      @foreach ($departs as $depart)
                        <option value="{{ $depart->department_id}}">{{ $depart->name_depart }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Division</label>
                    <select id="divs" name="divs" class="form-control" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      @foreach ($departs as $depart)
                        <option value="{{ $depart->department_id}}">{{ $depart->name_depart }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <select class="form-control" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary float-right">Add User</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->