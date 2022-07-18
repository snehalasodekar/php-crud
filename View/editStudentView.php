<form method="post">
    <div class="row">
        <div class="col">
            <label for="firstName">First Name</label>
            <input name="firstName" id="fisrtName" type="text" class="form-control" value="<?= $foundStudent->getName() ?>">
        </div>
        <div class="col">
            <label for="lastName">Last Name</label>
            <input name="lastName" id="lastName" type="text" class="form-control" value="<?= $foundStudent->getLastName() ?>">
        </div>
        <div class="col">
            <label for="email">Email</label>
            <input name="email" id="email" type="text" class="form-control" value="<?= $foundStudent->getEmail() ?>">
        </div>
        <div class="col">
            <label for="address">Address</label>
            <input name="address" id="address" type="text" class="form-control" value="<?= $foundStudent->getAddress() ?>">
        </div>
        <div class="col">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Choose the Class</label>
            <select class="custom-select mr-sm-2" name="selectClass">
                <option selected>Choose student class</option>
                <?php foreach ($classes as $class): ?>
                    <option value="<?= $class['id'] ?>"><?= $class['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-success" name="editStudent" value="<?= $foundStudent->getId()?>">Submit</button>
            <button type="submit" name="edit" value="backToStudentView" class="btn btn-info">Back</button>
        </div>
    </div>
</form>