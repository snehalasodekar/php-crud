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
    <?php foreach ($studentArr as $student): ?>
    <tr>
        <th scope="col"><?= $student->getId() ?></th>
        <th scope="col"><?= $student->getName() ?></th>
        <th scope="col"><?= $student->getLastName() ?></th>
        <th scope="col">
            <div class="btn-group" role="group" aria-label="mixed style">
                <button type="submit" name="delete" class="btn btn-danger"
                        value="<?= $student->getId() ?>">Delete</button>
                <button type="submit" name="edit" class="btn btn-warning"
                        value="<?= $student->getId() ?>">Edit</button>
                <button type="submit" name="detail" class="btn btn-success"
                        value="<?= $student->getId() ?>">More Detail</button>
            </div>
        </th>
    </tr>
    <?php endforeach;?>
    </form>
    </tbody>
</table>