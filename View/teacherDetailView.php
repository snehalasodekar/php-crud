<table class="table">
    <thead>
    <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Class</th>
        <th scope="col">Students</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php //$teachrDetails get from controller?>
       <th scope="col"><?= $teachrDetails->getId() ?></th>
        <th scope="col"><?= $teachrDetails->getFirstName() ?></th>
        <th scope="col"><?= $teachrDetails->getLastName() ?></th>
        <th scope="col"><?= $teachrDetails->getEmail() ?></th>
        <th scope="col"><?= $teachrDetails->getAddress() ?></th>
        <th scope="col"><?php echo  implode(",",$teachrDetails->getClassName()); ?></th>
        <th scope="col"><?php echo implode(",",$teachrDetails->getStudents()); ?></th>
        <th scope="col"><?php
/*            echo implode(',',$foundStudent->getTeachers()); */?></th><!-- -->
    </tr>
    <tr>
        <form method="post">
           <div>
               <button type="submit" name="detailReturn" class="btn btn-success"
                       value="fromdetailpage">Go Back</button>
           </div>
        </form>
    </tr>
    </tbody>
</table>