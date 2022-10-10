<div class="modal fade" id="modal_edit_position">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Position</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('add_position') }}" method="post" class="form-horizontal">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <select id="departs" name="department_id" class="form-control" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      @foreach ($departs as $depart)
                        <option value="{{ $depart->id }}">{{ $depart->name_depart }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Division</label>
                    <select id="divs" name="division_id" class="form-control" aria-label="Default select example">
                      <option  value="" selected>Open this select menu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name Position</label>
                    <input type="text" class="form-control" id="name_pos" name="name_pos" placeholder="Name Position">
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary float-right">Add User</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->