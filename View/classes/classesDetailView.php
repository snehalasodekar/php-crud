
</form>
<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <h2 class="text-uppercase text-center mb-5">classes details</h2>
                            <table class="table">
                                <thead>
                                <tr class="pb-3">
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Students</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($allClassesArray as $classRoom): ?>
                                    <?php if ($classRoom->getId() == $_POST['info']): ?>
                                        <?php echo $classRoom->getId() . " " .$classRoom->getName(). " " .$classRoom->getLocation(). " " . $classRoom->getTeachers(). " ";?>
                                        <?php echo implode(", ", $Students); ?>

                                <tr class="p-3">
                                    <td class="pb-3"><?= $classRoom->getId() ?></td>
                                    <td class="pb-3"><?= $classRoom->getName() ?></td>
                                    <td class="pb-3"><?= $classRoom->getLocation() ?></td>
                                    <td class="pb-3"><?= $classRoom->getTeachers() ?></td>
                                    <td class="pb-3"><?= implode(", ", $Students); ?></td>
                                </tr>

                                    <?php endif; ?>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                            <div>
                                <form method="post">
                                    <td>


                                        <hr/>
                                        <?php foreach($allClassesArray as $classRoom): ?>
                                            <?php if ($classRoom->getId() == $_POST['info']): ?>
                                        <button class="btn border-success" type="submit" name="edit" value="<?php echo $classRoom->getId() ?>">Edit</button>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
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
