<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Edit</h4>
      <button type="button" id="btn_close" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('admin.account.edit.post',$accounts[0]->id) }}" method="post">
                {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">First Name</label>
                                  <span class="fa fa-asterisk"></span>
                                  <input Name="first_name" class="form-control" value="{{ $accounts[0]->first_name }}"  maxlength="50" placeholder="Enter first name">
                                </div>                                
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Last Name</label>

                                  <input Name="last_name" class="form-control"  value="{{ $accounts[0]->last_name }}"  maxlength="50" placeholder="Enter last name">
                                </div>                                
                            </div>
                            <div class="col-lg-6">
                               <div class="form-group">
                                 <label>Role</label>
                                 <span class="fa fa-asterisk"></span>
                                 <select class="form-control" name="role_id">
                                 @foreach($roles as $role)
                                   <option value="{{ $role->id }}" {{ $accounts[0]->role_id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>  
                                  @endforeach 
                                      </select>
                                </div>                               
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">E-mail ID</label>
                                  <span class="fa fa-asterisk"></span>
                                  <input type="text" disabled="" name="email" class="form-control" value="{{ $accounts[0]->email }}" id="exampleInputEmail1" maxlength="50" placeholder="Enter email">
                                </div>                                
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="Password">Password</label>
                                  <span class="fa fa-asterisk"></span>
                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" maxlength="15" placeholder="Password" min="6">
                                </div>                               
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Mobile.No.</label>
                                  <span class="fa fa-asterisk"></span>
                                  <input type="text" Name="mobile" class="form-control" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  value="{{ $accounts[0]->mobile }}  ">
                                </div>                                
                            </div>
                             
                        </div>                     
                        <div class="modal-footer card-footer justify-content-between">
                          <button type="submit" class="btn btn-success form-control">Update</button>
                          <button type="button" class="btn btn-danger form-control" data-dismiss="modal">Close</button>
                        </div>
                </form>
    </div>
  </div>
</div>

