
    <div>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex justify-content-end mb-2">
                <button wire:click="addNew" class='btn btn-primary'><i class="fa fa-plus-circle mr-1"></i> Add New User</button>
              </div>
          
              <div class="card">
                <div class="card-body">
                  <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Options</th>
                            </tr>
                          </thead>
                          <tbody>


                            @foreach ($users as $user) 
                            <tr>
                              <th scope="row">{{$user->id}}</th>
                              <th scope="row">{{$user->name}}</th>
                              <th scope="row">{{$user->email}}</th>
                              <td>
                                  <a href="">
                                      <i class='fa fa-edit mr-2'></i>
                                  </a>
                                  <i class='fa fa-trash text-danger'></i>
                              </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
              </div>
            </div>
          
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      
        <!-- Modal -->
        <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
          <div class="modal-dialog">
            <form wire:submit.prevent="createUser">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" wire:model.defer='state.name' aria-describedby="nameHelp" placeholder="Enter full name">
               @error('name')
               <div class="invalid-feedback">
                    {{$message}}
               </div>
               @enderror
                  </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control  @error('email') is-invalid  @enderror"  id="email"  wire:model.defer='state.email' aria-describedby="emailHelp" placeholder="Enter email">
                    @error('email')
               <div class="invalid-feedback">
                    {{$message}}
               </div>
               @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid  @enderror" id="password" wire:model.defer='state.password' placeholder="Password">
                    @error('password')
               <div class="invalid-feedback">
                    {{$message}}
               </div>
               @enderror
                  </div>
                  <div class="form-group">
                    <label for="passwordConfirmation">Password</label>
                    <input type="password" class="form-control" id="passwordConfirmation"   wire:model.defer='state.password_confirmation' placeholder="confirm password">
                
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
@livewireScripts  
</div>

