
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <h2 class="text-uppercase text-center mb-5">Student View</h2>
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
                                        <button type="submit" name="addStudent"
                                                class="btn border-warning btn-lg gradient-custom-4">
                                            Create New Student
                                        </button>
                                    </form>
                                </tr>
                                <?php foreach ($studentArr as $student): ?>
                                    <form method="post">
                                        <tr>
                                            <th scope="col"><?= $student->getId(); ?></th>
                                            <th scope="col"><?= $student->getName(); ?></th>
                                            <th scope="col"><?= $student->getLastName(); ?></th>
                                            <th scope="col">
                                                <div class="btn-group" role="group" aria-label="mixed style">
                                                    <button type="submit" name="delete" class="btn border-danger"
                                                            value="<?= $student->getId() ?>">Delete
                                                    </button> &nbsp;&nbsp;
                                                    <button type="submit" name="detail" class="btn border-success"
                                                            value="<?= $student->getId() ?>">More Detail
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
                                        <button type="submit" name="back"
                                                class="btn border-warning"
                                                value="back">
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
