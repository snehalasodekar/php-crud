<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h2 class="text-uppercase text-center mb-5">Teacher View</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="float :right;">
                                    <form method="post">
                                        <button type="submit" name="page"
                                                class="btn border-warning btn-lg gradient-custom-4"
                                                value="createTeacher">
                                            Create New Teacher
                                        </button>
                                    </form>
                                </tr>
                                <?php foreach ($teacherDataArr as $teacher): ?>
                                    <form method="post">
                                        <tr>
                                            <th scope="col"><?= $teacher->getId(); ?></th>
                                            <th scope="col"><?= $teacher->getFirstName(); ?></th>
                                            <th scope="col"><?= $teacher->getLastName(); ?></th>
                                            <th scope="col">
                                                <div class="btn-group" role="group" aria-label="mixed style">
                                                    <input type="hidden" name="teacherIdHidden"
                                                           value="<?= $teacher->getId() ?>"/>
                                                    <button type="submit" name="page" class="btn border-danger"
                                                            value="deleteTeacher">Delete
                                                    </button> &nbsp;&nbsp;
                                                    <button type="submit" name="page" class="btn border-success"
                                                            value="detailTeacher">More Detail
                                                    </button>
                                                </div>
                                            </th>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>

                                </tbody>
                                <hr/>
                                <tfoot>
                                <td>
                                        <form method="post">
                                            <button type="submit" name="page"
                                                    class="btn border-warning"
                                                    value="indexPage">
                                                Home
                                            </button>
                                        </form>
                                </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>