
</form>

<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h2 class="text-uppercase text-center mb-5">Class view</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Campus</th>
                                    <th scope="col">Location</th>
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
                                <?php foreach($allClassesArray as $classRoom): ?>
                                    <form method="post">
                                        <tr>
                                            <th scope="col"><?= $classRoom->getId(); ?></th>
                                            <th scope="col"><?= $classRoom->getName(); ?></th>
                                            <th scope="col"><?= $classRoom->getLocation(); ?></th>
                                            <th scope="col">
                                                <div class="btn-group" role="group" aria-label="mixed style">
                                                    <input type="hidden" name="teacherIdHidden"
                                                           value="<?php echo $classRoom->getId() ?>""/>
                                                    <button type="submit" name="page" class="btn border-danger"
                                                            value="<?php echo $classRoom->getId() ?>">Delete
                                                    </button> &nbsp;&nbsp;
                                                    <button type="submit" name="info" class="btn border-success"
                                                            value="<?php echo $classRoom->getId() ?>">More Detail
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
                                        <button type="submit" name="goback"
                                                class="btn border-warning"
                                                value="goback">
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