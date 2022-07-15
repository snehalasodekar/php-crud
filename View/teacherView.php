<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">More options</th>
    </tr>
    </thead>
    <tbody>
    <form method="post">
        <?php //d$teacherDataArr =;
        foreach ($teacherDataArr as $teacher):
            /* echo "<pre/>";
          print_r($teacher);exit; */?>
            <tr>
                <th scope="col"><?= $teacher->getId(); ?></th>
                <th scope="col"><?= $teacher->getFirstName(); ?></th>
                <th scope="col"><?= $teacher->getLastName(); ?></th>
                <th scope="col">
                    <div class="btn-group" role="group" aria-label="mixed style">
                        <button type="submit" name="delete" class="btn btn-danger"
                                value="<?= $teacher->getId() ?>">Delete</button>
                        <button type="submit" name="create" class="btn btn-warning"
                                value="<?= $teacher->getId() ?>">Create</button>
                        <button type="submit" name="detail" class="btn btn-success"
                                value="<?= $teacher->getId() ?>">More Detail</button>
                    </div>
                </th>
            </tr>
        <?php endforeach;?>
    </form>
    </tbody>
</table>