<form method="post">
    <div class="row">
        <div class="col">
            <label for="fisrtName">First Name</label>
            <input id="fisrtName" type="text" class="form-control" value="<?= $foundStudent->getName() ?>">
        </div>
        <div class="col">
            <label for="lastName">Last Name</label>
            <input id="lastName" type="text" class="form-control" value="<?= $foundStudent->getLastName() ?>">
        </div>
        <div class="col">
            <label for="email">Email</label>
            <input id="email" type="text" class="form-control" value="<?= $foundStudent->getEmail() ?>">
        </div>
        <div class="col">
            <label for="address">Address</label>
            <input id="address" type="text" class="form-control" value="<?= $foundStudent->getAddress() ?>">
        </div>
        <!--<div class="col">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Choose the Class</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="selectClass">
                <option selected>Choose...</option>
                <?php /*foreach ($classes as $class): */?>
                <option value="<?/*= $class['id'] */?>"><?/*= $class['name'] */?></option>
                <?php /*endforeach; */?>
            </select>
            <button type="submit" class="btn btn-success" name="editStudent" >Submit</button>
        </div>-->
    </div>
</form>