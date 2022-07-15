<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Class</th>
        <th scope="col">Students</th>
        <th scope="col">Actions</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php //$teachrDetails get from controller?>
       <td><?= $teacherDetails->getId() ?></td>
        <td><?= $teacherDetails->getFirstName() ?></td>
        <td><?= $teacherDetails->getLastName() ?></td>
        <td><?= $teacherDetails->getEmail() ?></td>
        <td><?= $teacherDetails->getAddress() ?></td>
        <td><?php echo  implode(",",$teacherDetails->getClassName()); ?></td>
        <td><?php echo implode(",",$teacherDetails->getStudents()); ?></td>

            <td>
                <form method="post">
                    <input type="hidden" name="teacherId" value="<?= $teacherDetails->getId(); ?>">
                <button type="submit" name="detailReturn" class="btn btn-success"
                        value="updateTeacher">Update</button>
                </form>
            </td>

    </tr>
    <tr>
        <form method="post">
           <td>
               <button type="submit" name="detailReturn" class="btn btn-success"
                       value="fromdetailpage">Go Back</button>
           </td>
        </form>
    </tr>
    </tbody>
</table>