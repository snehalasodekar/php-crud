<form method="post">
    <div class="row">
        <div class="col">
            <label for="firstName">First Name</label>
            <input required name="firstName" id="fisrtName" type="text" class="form-control">
        </div>
        <div class="col">
            <label for="lastName">Last Name</label>
            <input required name="lastName" id="lastName" type="text" class="form-control">
        </div>
        <div class="col">
            <label for="email">Email</label>
            <input required name="email" id="email" type="text" class="form-control">
        </div>
        <div class="col">
            <label for="address">Address</label>
            <input required name="address" id="address" type="text" class="form-control">
        </div>
        <div class="col">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Choose the Class</label>
            <select required class="custom-select mr-sm-2" name="selectClass">
                <?php foreach ($classes as $class): ?>
                    <option value="<?= $class['id'] ?>"><?= $class['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-success" name="addStudent" value="submit">Submit</button>
            <button type="submit" name="addStudent" value="backToStudentView" class="btn btn-info">Back</button>
        </div>
    </div>
</form>
