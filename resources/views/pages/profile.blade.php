@extends('layout.master')

@section('content')
<section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-8 offset-2">
                <h2 class="section-heading text-uppercase text-left">Profile</h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Change Password</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Profile Display  -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form class="pt-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fullname</label>
                                <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="mobile_no">Mobile No.</label>
                                <input type="text" class="form-control" id="mobile_no">
                            </div>
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <textarea class="form-control" id="address" rows="3"></textarea>
                            </div>
                            <button type="button" id="editProfile" class="btn btn-primary">Edit Profile</button>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                    <!-- Ordered Items Table -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive mt-2">
                            <h3>Items Table</h3>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- change Password Section -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form class="pt-5">
                            <div class="form-group">
                                <label for="old_password">Previous Password</label>
                                <input type="password" class="form-control" id="old_password" name="old_password"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
