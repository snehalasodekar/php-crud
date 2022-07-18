
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <h2 class="text-uppercase text-center mb-5">Student Detail Info</h2>
                            <table class="table">
                                <thead>
                                <tr class="pb-3">
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Teachers</th>
                                    <th scope="col">Class</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="p-3">
                                    <td class="pb-3"><?= $foundStudent->getId() ?></td>
                                    <td class="pb-3"><?= $foundStudent->getName() ?></td>
                                    <td class="pb-3"><?= $foundStudent->getLastName() ?></td>
                                    <td class="pb-3"><?= $foundStudent->getEmail() ?></td>
                                    <td class="pb-3"><?= $foundStudent->getAddress() ?></td>
                                    <td class="pb-3"><?php echo implode(",", $foundStudent->getTeachers()); ?></td>
                                    <td class="pb-3"><?php echo $foundStudent->getClassName(); ?></td>
                                </tr>

                                </tbody>
                            </table>
                            <div>
                                <form method="post">
                                    <td>
                                        <button type="submit" name="edit" class="btn gradient-custom-4"
                                                value="<?= $foundStudent->getId()?>">Update data
                                        </button>

                                        <hr/>
                                        <button type="submit" name="detail" class="btn border-success"
                                                value="backToStudentView">Go Back
                                        </button>
                                    </td>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
