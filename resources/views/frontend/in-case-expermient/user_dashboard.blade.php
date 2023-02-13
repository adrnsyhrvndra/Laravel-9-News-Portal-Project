<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="contact-wrpp">
              <figure class="authorPage-image">
                <img
                  alt=""
                  src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo) : url('upload/no_image.jpg') }}"
                  class="avatar avatar-96 photo"
                  height="96"
                  width="96"
                  loading="lazy"
                />
              </figure>
              <h1 class="authorPage-name">
                <a href=" "> {{ $userData->name }} </a>
              </h1>
              <h6 class="authorPage-name">{{ $userData->email }}</h6>

              <ul>
                <li>
                  <a href=""><b>🟢 Your Profile </b></a>
                </li>
                <li>
                  <a href="{{ route('user.change.password') }}"> <b>🔵 Change Password </b> </a>
                </li>
                <li>
                  <a href="{{ route('user.logout') }}"> <b>🟠 Logout </b> </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="contact-wrpp">
              <h4 class="contactAddess-title text-center">
                User Account
              </h4>
              <div
                role="form"
                class="wpcf7"
                id="wpcf7-f437-o1"
                lang="en-US"
                dir="ltr"
              >
                <div class="screen-reader-response">
                  <p
                    role="status"
                    aria-live="polite"
                    aria-atomic="true"
                  ></p>
                  <ul></ul>
                </div>

                  <div style="display: none"></div>

                  <form action="{{ route('user.store.profile') }}" method="post" enctype="multipart/form-data">

                      @csrf

                      <div class="main_section">

                      <div class="row">

                          @if (session('status'))

                              <div class="alert alert-success" role="alert">

                                  {{ session('status') }}

                              </div>

                          @elseif(session('error'))

                              <div class="alert alert-danger" role="alert">

                                  {{ session('error') }}

                              </div>

                          @endif

                          <div class="col-md-12 col-sm-12">
                          <div class="contact-title">User Name *</div>
                          <div class="contact-form">
                              <span class="wpcf7-form-control-wrap sub_title"
                              ><input
                                  type="text"
                                  name="username"
                                  value="{{ $userData->username }}"
                                  size="40"
                                  class="wpcf7-form-control wpcf7-text"
                                  aria-invalid="false"
                                  placeholder="username"
                              /></span>
                          </div>
                          </div>

                          <div class="col-md-12 col-sm-12">
                          <div class="contact-title">Name </div>
                          <div class="contact-form">
                              <span class="wpcf7-form-control-wrap sub_title"
                              ><input
                                  type="text"
                                  name="name"
                                  value="{{ $userData->name }}"
                                  size="40"
                                  class="wpcf7-form-control wpcf7-text"
                                  aria-invalid="false"
                                  placeholder="name"
                              /></span>
                          </div>
                          </div>

                          <div class="col-md-12 col-sm-12">
                          <div class="contact-title">Email *</div>
                          <div class="contact-form">
                              <span class="wpcf7-form-control-wrap sub_title"
                              ><input
                                  type="email"
                                  name="email"
                                  value="{{ $userData->email }}"
                                  size="40"
                                  class="wpcf7-form-control wpcf7-text"
                                  aria-invalid="false"
                                  placeholder="Email"
                              /></span>
                          </div>
                          </div>

                          <div class="col-md-12 col-sm-12">
                          <div class="contact-title">Phone *</div>
                          <div class="contact-form">
                              <span class="wpcf7-form-control-wrap sub_title"
                              ><input
                                  type="text"
                                  name="phone"
                                  value="{{ $userData->phone }}"
                                  size="40"
                                  class="wpcf7-form-control wpcf7-text"
                                  aria-invalid="false"
                                  placeholder="Phone"
                              /></span>
                          </div>
                          </div>

                          <div class="col-md-12 col-sm-12">
                          <div class="contact-title">Photo *</div>
                          <div class="contact-form">
                              <span class="wpcf7-form-control-wrap sub_title"
                              ><input
                                  type="file"
                                  name="photo"
                                  size="40"
                                  class="wpcf7-form-control wpcf7-text"
                                  aria-invalid="false"
                                  id="image"
                              /></span>
                          </div>
                          </div>

                          <div class="col-md-12 col-sm-12">

                              <img id="showImage" src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" style="width: 100px; height:100px;">

                          </div>

                      </div>

                      <div class="row">
                          <div class="col-md-12">
                          <div class="contact-btn">
                              <input
                              type="submit"
                              value="Save Changes"
                              class="wpcf7-form-control has-spinner wpcf7-submit"
                              /><span class="wpcf7-spinner"></span>
                          </div>
                          </div>
                      </div>
                      </div>

                  </form>

                  <div
                    class="wpcf7-response-output"
                    aria-hidden="true"
                  ></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  // end row -->
  </div>
