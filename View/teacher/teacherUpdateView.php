
<!-- *************** -->
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Update Teacher</h2>
                            <form method="post">
                                <input type="hidden" name="teacherIdHidden" value="<?= $teacherDetails['id']; ?>"/>
                                <div class="row">
                                    <div class="col-md-3 mb-4 pe-0">
                                            <label class="form-label p-2 fs-5" for="teacher_id">Teacher Id</label>
                                    </div>
                                    <div class="col-md-6 mb-4 ps-0">
                                        <div class="form-outline">

                                            <input type="text" name="teacher_id" readonly
                                                   class="form-control form-control-lg" value="<?= $teacherDetails['id']; ?>"/>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="first_name" value="<?= $teacherDetails['firstname']; ?>"
                                                   class="form-control form-control-lg" required/>
                                            <label class="form-label" for="first_name">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="last_name" value="<?= $teacherDetails['lastname']; ?>"
                                                   class="form-control form-control-lg" required/>
                                            <label class="form-label" for="last_name">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <input type="email" class="form-control form-control-lg" name="email" value="<?= $teacherDetails['email']; ?>" required/>
                                        <label class="form-label" for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <input name="address" class="form-control form-control-lg" type="text"  value="<?= $teacherDetails['address']; ?>" required/>
                                        <label class="form-label" for="address">Address</label>
                                    </div>
                                </div>
                                <!-- Assign class from available classes -->
                                <div class="form-group pb-3 mb-3">
                                    <label class="col-md-4 control-label">Assign Class Room</label>
                                    <div class="col-md-4 selectContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                            <select name="classroom" class="form-control selectpicker">
                                                <?php foreach ($classData as $class) { ?>
                                                    <option value="<?= $class['id'] ?>" <?php if($teacherDetails['class_id'] == $class['id']) echo
                                                        'selected';
                                                     ?>>
                                                        <?= $class['name']; ?>
                                                    </option>
                                                <?PHP } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center ">
                                    <button type="reset" class="btn border-warning btn-lg">Reset all</button> &nbsp;&nbsp;
                                    <button type="submit"
                                            name="page" value="updateTeacherQuery"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                        Update Teacher
                                    </button>
                                </div>

                            </form>
                            <hr/>
                            <form method="post">
                                <div>
                                    <button type="submit" name="page" class="btn border-success"
                                            value="detailReturn">Go Back
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
