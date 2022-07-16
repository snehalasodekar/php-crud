<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr class="pb-3">
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Students</th>
                                    <th scope="col">Class</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="p-3">
                                    <td class="pb-3"><?= $teacherDetails['id'] ?></td>
                                    <td class="pb-3"><?= $teacherDetails['firstname'] ?></td>
                                    <td class="pb-3"><?= $teacherDetails['lastname'] ?></td>
                                    <td class="pb-3"><?= $teacherDetails['email'] ?></td>
                                    <td class="pb-3"><?= $teacherDetails['address'] ?></td>
                                    <td class="pb-3"><?php echo implode(",", $tescherStudents); ?></td>
                                    <td class="pb-3"><?php echo implode(",", $tescherClasses); ?></td>
                                </tr>

                                </tbody>
                            </table>
                            <div>
                                <form method="post">
                                    <td>
                                        <input type="hidden" name="teacherIdHidden"
                                               value="<?= $teacherDetails['id']; ?>"/>
                                        <button type="submit" name="page" class="btn gradient-custom-4"
                                                value="updateTeacherForm">Update data
                                        </button>

                                        <hr/>
                                        <button type="submit" name="page" class="btn border-success"
                                                value="detailReturn">Go Back
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
<?php
/* TODO
 //$teachrDetails get from controller?>
<!--<td><?/*= $teacherDetails->getId() </td>
        <td><?/*= $teacherDetails->getFirstName() *?</td>
        <td><?/*= $teacherDetails->getLastName() *?</td>
        <td><?/*= $teacherDetails->getEmail() *td>
        <td><?/*= $teacherDetails->getAddress()?</td>-->
?>
*/