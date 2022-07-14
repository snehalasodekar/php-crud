<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Class</th>
        <th scope="col">Teachers</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col"><?= $foundStudent->getId() ?></th>
        <th scope="col"><?= $foundStudent->getName() ?></th>
        <th scope="col"><?= $foundStudent->getLastName() ?></th>
        <th scope="col"><?= $foundStudent->getEmail() ?></th>
        <th scope="col"><?= $foundStudent->getAddress() ?></th>
        <th scope="col"><?= $foundStudent->getClassName() ?></th>
        <th scope="col"><?php
            echo implode(',',$foundStudent->getTeachers()); ?></th>
    </tr>
    </tbody>
</table>