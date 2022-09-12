@extends("backend.layout.admin_main")
@section('admin_main')
{{-- <script src="https://unpkg.com/@popperjs/core@2"> --}}
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          
          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Testimonial</h5>
              </div>
              <div class="card-body">
                <form method="post" action="/admin/testimonials/create">
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-user"></i
                      ></span>
                      <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="John Doe"
                        aria-label="John Doe"
                        aria-describedby="basic-icon-default-fullname2"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Company/Position</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="ACME Inc."
                        aria-label="ACME Inc."
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                
                    <div class="input-group">
                      <label class="input-group-text" for="inputGroupFile01">Profile Image</label>
                      <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-message">Message</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-message2" class="input-group-text"
                        ><i class="bx bx-comment"></i
                      ></span>
                      <textarea
                        id="basic-icon-default-message"
                        class="form-control"
                        placeholder="Hi, Do you have a moment to talk Joe?"
                        aria-label="Hi, Do you have a moment to talk Joe?"
                        aria-describedby="basic-icon-default-message2"
                      ></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Create Testimonials</button>
                </form>
              </div>
            </div>
          </div>
            <div class="col-12 order-0">
                <div class="card">
                    <h5 class="card-header">Testimonials</h5>
                    <div class="table-responsive text-nowrap" style="min-height: 300px;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Sr.</th>
                            <th>Name<br/>(Position)</th>
                            <th>Image</th>
                            <th>Feedback</th>
                            
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @php
                           $sr=1;
                          @endphp
                          @foreach ($testimonial as $testimonials)
                          <tr>
                            <td>{{$sr}}</td>
                              
                            <td> <strong>{{$testimonials->name}}</strong><br/>({{$testimonials->position}})
                            </td>
                            <td><img src="{{$testimonials->image}}" style="height:100px;"></td>
                           <td>
                              {{$testimonials->feedback}}
                            </td>
                            <td> 
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                
                                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="{{$testimonials->created_at}} , {{$testimonials->updated_at}}">
                                  !
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                          @php
                              $sr++;
                          @endphp
                          @endforeach
                          {{-- <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                            <td>Albert Cook</td>
                            <td>
                              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Lilian Fuller"
                                >
                                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Sophia Wilkerson"
                                >
                                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Christina Parker"
                                >
                                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                              </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                            <td>Barry Hunter</td>
                            <td>
                              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Lilian Fuller"
                                >
                                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Sophia Wilkerson"
                                >
                                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Christina Parker"
                                >
                                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                              </ul>
                            </td>
                            <td><span class="badge bg-label-success me-1">Completed</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                            <td>Trevor Baker</td>
                            <td>
                              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Lilian Fuller"
                                >
                                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Sophia Wilkerson"
                                >
                                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Christina Parker"
                                >
                                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                              </ul>
                            </td>
                            <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                            </td>
                            <td>Jerry Milton</td>
                            <td>
                              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Lilian Fuller"
                                >
                                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Sophia Wilkerson"
                                >
                                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                  data-bs-toggle="tooltip"
                                  data-popup="tooltip-custom"
                                  data-bs-placement="top"
                                  class="avatar avatar-xs pull-up"
                                  title="Christina Parker"
                                >
                                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                              </ul>
                            </td>
                            <td><span class="badge bg-label-warning me-1">Pending</span></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr> --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
           
        </div>
        
    </div>
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
</div>
@endsection